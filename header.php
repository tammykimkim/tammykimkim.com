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
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="ostrich-sans.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- THIS IS THE HAMBURGLER MENU --> 

<!-- <div class="mobilenav"> 
  <li><a href="#">Never</a></li> 
  <li><a href="#">Gonna</a></li> 
  <li><a href="#">Give</a></li> 
  <li><a href="#">You</a></li> 
  <li><a href="#">Up</a></li> 
</div>  -->

<!-- THIS IS THE HAMBURGLER ICON --> 

<!-- <a href="javascript:void(0)" class="icon"> 
   <div class="hamburger"> 
     <div class="menui top-menu"></div> 
     <div class="menui mid-menu"></div> 
     <div class="menui bottom-menu"></div> 
   </div> 
</a> -->

<!-- HEADER STARTS HERE -->

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
		<div class="logo-box animated fadeInSlide delayed-1sec">
			<a href="<?php get_home_url(); ?>">
				<h1>
					<div class="logo">
					&#x3E;<span class="cursor">/</span>&#x3C;
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

		<nav id="site-navigation" class="main-navigation animated fadeInSlide delayed-0-5sec" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'one-page-theme' ); ?></button>
			<?php wp_nav_menu( array( 
			'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
</header><!-- #masthead -->
