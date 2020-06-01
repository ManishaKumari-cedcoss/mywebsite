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

add_theme_support( 'post-thumbnails' );

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    )
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


body.category-tv { 
	background-image: url("http://example.com/wp-content/uploads/2017/03/your-background-image.jpg"); 
	background-position: center center; 
	background-size: cover; 
	background-repeat: no-repeat; 
	background-attachment: fixed;
	}




