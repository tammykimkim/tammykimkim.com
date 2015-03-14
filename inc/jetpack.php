<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package One Page Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function one_page_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'one_page_theme_jetpack_setup' );
