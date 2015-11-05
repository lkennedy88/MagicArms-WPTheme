<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package magic_arms
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function magic_arms_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'magic_arms_jetpack_setup' );
