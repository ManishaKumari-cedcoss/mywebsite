<?php
/**
 * Description
 *
 * @package mytheme
 */

/**
 * Description
 */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'main_style', get_stylesheet_uri(), ' ', array(), '1.1', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'blog-name', get_template_directory_uri() . '/css/blog-post.css', array(), '1.1', 'all' );
}
/**
 * Javascript file
 */
function themeslug_enqueue_script() {
	wp_enqueue_script( 'jquery', ' ', array(), ' ', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array( 'jquery' ), ' ', true );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
/**
 * Menu function
 */
function register_menu() {
	// menu register code.
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
		)
	);
}
	// attach with action hook.

add_action( 'init', 'register_menu' );




