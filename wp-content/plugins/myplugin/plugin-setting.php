<?php
/**
 * @package plugin
 * Plugin Name:       hellobugg
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Manisha
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 
/**
 * create contact form
 */

// define("THE_PATH",plugin_dir_path(__FILE__));
 

function feedback_form($content) {
	if(is_page('Feedback Form')){
		include_once plugin_dir_path(__FILE__) .'/form.php';
	}
	return $content;
}
add_filter('the_content','feedback_form');

function my_feedback() {
    register_post_type('feedback-form',
        array(
            'labels'      => array(
                'name'          => __('Feedback'),
                'singular_name' => __('feedback',),
            ),
                'public'      => true,
                'has_archive' => true,
        )
    );
}
add_action('init', 'my_feedback');


/**
 * enqueue file
 */

function form_ajax_enqueue() {

	// Enqueue javascript on the frontend.
	wp_enqueue_script(
		'form-ajax-script',  //js file ki id(ye id nonce me kaam atti h)
		plugins_url() . '/myplugin/form-ajax.js', //js ki  path
		array('jquery') //ye jquery code ko access de raha h
	);

	// The wp_localize_script allows us to output the ajax_url path for our script to use.
	wp_localize_script( //ye script uska address batata h jaha pe rquest jani h
		'form-ajax-script', //js file ki id
		'formajax_obj', //name of object
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ), //object value(ajax)
			'nonce' => wp_create_nonce('ajax-nonce') //object noncevalue('id')..id can be changed
		)
    );
}
add_action( 'init', 'form_ajax_enqueue' );

/**
 * ajax handler
 */

function formajax_request() {
    if(isset($_REQUEST)){
        $myname=$_REQUEST['mydata'];
        // print_r($myname);
        $page=array();
        $page['post_title']=$myname[0];
        $page['post_excerpt']=$myname[2];
        $page['post_content']=$myname[1];
        $page['post_status']="publish";
        $page['post_slug']=$myname[0].'-feedback';
        $page['post_type']="feedback-form";

        $post_id=wp_insert_post($page);
        // echo $post_id;
    }
  
}
add_action('wp_ajax_ajax_request', 'formajax_request');
 // If you wanted to also use the function for non-logged in users (in a theme for example)
add_action('wp_ajax_nopriv_ajax_request', 'formajax_request');