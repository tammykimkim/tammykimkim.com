<?php
/**
 * One Page Theme functions and definitions
 *
 * @package One Page Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'one_page_theme_setup' ) ) :

	add_theme_support( 'post-thumbnails',array('post','portfolio','page'));
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function one_page_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on One Page Theme, use a find and replace
	 * to change 'one-page-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'one-page-theme', get_template_directory() . '/languages' );

	/* This theme uses post thumbnails (aka "featured images")
	*  all images will be cropped to thumbnail size (below), as well as
	*  a square size (also below). You can add more of your own crop
	*  sizes with add_image_size. */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(120, 90, true);
	add_image_size('square', 150, 150, true);

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/* This theme uses wp_nav_menu() in one location.
	* You can allow clients to create multiple menus by
  * adding additional menus to the array. */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'one-page-theme' ),
		'secondary' => __('Secondary Menu', 'one-page-theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'one_page_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // one_page_theme_setup
add_action( 'after_setup_theme', 'one_page_theme_setup' );

// Adding Google Fonts & Font Awesome links
// Add Google Fonts and Font Awesome
	function load_fonts() {
		wp_register_style('google-fonts', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300,400,200');
		wp_enqueue_style('google-fonts');

		wp_register_style('font-awesome', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
		wp_enqueue_style('font-awesome');

	}
	add_action('wp_print_styles', 'load_fonts');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function one_page_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'one-page-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'one_page_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

/* Add all our JavaScript files here.
We'll let WordPress add them to our templates automatically instead
of writing our own script tags in the header and footer. */

function one_page_theme_scripts() {

	//Don't use WordPress' local copy of jquery, load our own version from a CDN instead
	wp_deregister_script('jquery');
  wp_enqueue_script(
  	'jquery',
  	"http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js",
  	false, //dependencies
  	null, //version number
  	true //load in footer
  );

	wp_enqueue_style( 'one-page-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'one-page-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'one-page-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'one-page-theme-custom', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );

	wp_enqueue_script( 'one-page-theme-walkway', get_template_directory_uri() . '/js/walkway.min.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'one_page_theme_scripts' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Get rid of junk! - Gets rid of all the crap in the header that you dont need */

function clean_shit_up() {
	// windows live
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	// wordpress gen tag
	remove_action('wp_head', 'wp_generator');
	// comments RSS
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 3 );
}

add_action('init', 'clean_shit_up');


/* Here are some utility helper functions for use in your templates! */

/* pre_r() - makes for easy debugging. <?php pre_r($post); ?> */
function pre_r($obj) {
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
}

/* is_blog() - checks various conditionals to figure out if you are currently within a blog page */
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

/* get_post_parent() - Returns the current posts parent, if current post if top level, returns itself */
function get_post_parent($post) {
	if ($post->post_parent) {
		return $post->post_parent;
	}
	else {
		return $post->ID;
	}
}