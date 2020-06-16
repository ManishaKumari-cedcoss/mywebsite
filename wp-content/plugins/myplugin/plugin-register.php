<?php
/**
 * @package plugin
 * Plugin Name:       Budberggg
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
 * option is create
 */
function budberg_plugin() {
	$time=date("h:i:sa");
	add_option( 'budberg_plugin', $time );
}
register_activation_hook( __FILE__, 'budberg_plugin' );
/**
 * Deactivate option.
 */
function plugin_deactivation() {
	delete_option( 'budberg_plugin' );
}
register_deactivation_hook( __FILE__, 'plugin_deactivation' );
