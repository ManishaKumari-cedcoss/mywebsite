<?php
/**
 * @package plugin
 * Plugin Name:       Budberg
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
  * Register the "book" custom post type
  */
function pluginprefix_setup_post_type() {
	register_post_type( 'book', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );
	/**
	 * Activate the plugin.
	 */
function pluginprefix_activate() { 
		// Trigger our function that registers the custom post type plugin.
		pluginprefix_setup_post_type(); 
		// Clear the permalinks after the post type has been registered.
		flush_rewrite_rules(); 
}
	register_activation_hook( __FILE__, 'pluginprefix_activate' );

    /**
	 * time of the plugin.
	 */

	function add_my_menu(){
		add_menu_page(
		"Budberg","BudBerg","manage_options","hello-world","add_function","dashicons-visibility",);
	}
	add_action("admin_menu","add_my_menu");
	
	function add_function(){
		echo "Activation time ";
		$date=date("h:i:sa");
		echo $date;
	}

	/**
	 * Deactivation hook.
	 */
function pluginprefix_deactivate() {
		// Unregister the post type, so the rules are no longer in memory.
		unregister_post_type( 'book' );
		// Clear the permalinks to remove our post type's rules from the database.
		flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );