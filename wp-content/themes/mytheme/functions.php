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


// attach post thumbnail(featured image).

add_theme_support( 'post-thumbnails' );

/**
 * Custom header
 */
function themename_custom_header_setup() {
	$args = array(
		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

/**
 * Custom sidebar and widgets
 */
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
	register_sidebar(
		array(
			'id'            => 'secondary',
			'name'          => __( 'secondary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'my_register_sidebars' );



/**
 * Custom post format
 *
 * @return void
 */
function themename_post_formats_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );



/**
 * Custom logo
 */
function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// This code is responsible for to enable  Custom background color.
$args = array(
	'default-color' => '000',
	'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
);
add_theme_support( 'custom-background', $args );

// Automatic theme to support !!!
add_theme_support( 'automatic-feed-links' );

/**
 * User
 */
add_action( 'template_redirect', function() {

    // Get global role.
	global $role;
	
	$user = wp_get_current_user();
	$myArray = json_decode(json_encode($user), true);
	$role = $myArray['roles'][0];
   

	// Prevent access to page with ID of 2 and user role.
	$page_id = 1963;
	if ( is_page($page_id) && $role  === "subscriber"   ){

	// Set redirect to true by default.
		$redirect = true;

		
	// Redirect people without access to login page.
		if ( $redirect ) {
			wp_redirect( esc_url( home_url() ) );
       }


	}

} );