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
* add option n.
*/
register_activation_hook( __FILE__, 'budberg_active' );
function budberg_active() {
add_option( 'budberg_active', 'activated' );
}
/**
 * delete option.
 */
function budberg_deactive() {
delete_option( 'budberg_active' );
}
register_deactivation_hook( __FILE__, 'budberg_deactive' );