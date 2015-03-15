<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package One Page Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- favicons -->
<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="images/favicon/android-chrome-192x192.png" sizes="192x192">
<meta name="msapplication-square70x70logo" content="images/favicon/smalltile.png" />
<meta name="msapplication-square150x150logo" content="images/favicon/mediumtile.png" />
<meta name="msapplication-wide310x150logo" content="images/favicon/widetile.png" />
<meta name="msapplication-square310x310logo" content="images/favicon/largetile.png" />

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="animate.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'one-page-theme' ); ?>
			</a>

		<div class="site-branding">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
				</a>
			</h1>

<!-- Cursor logo goes here -->
		<div class="logo-box animated fadeIn">
			<a href="<?php get_home_url(); ?>">
				<h1>
					<div class="logo">
					&gt;<span class="cursor">/</span>&lt;
					</div>
				</h1>

				<div class="logo-name">
					tammykimkim
				</div>
			</a> 
		</div> <!-- end .logo-box -->

			<h2 class="site-description">
				<?php bloginfo( 'description' ); ?>
			</h2>
		</div>

		<nav id="site-navigation" class="main-navigation animated fadeIn" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'one-page-theme' ); ?></button>
			<?php wp_nav_menu( array( 
			'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
</header><!-- #masthead -->
