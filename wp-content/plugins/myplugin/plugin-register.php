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

/**
 * Add filter.
 */


function wporg_filter_content($content)
{
	if( is_single( )) { ?> 
		<a href="https://twitter.com/compose/tweet?url=<?php the_permalink(); ?>">CLICK HERE<br>
		<?php
		$word_count = str_word_count( wp_strip_all_tags($content)) ;
		print_r('The total words is ' .$word_count);
	return $content;
	} 
	else{
		return $content;
	}
}
add_filter('the_content', 'wporg_filter_content');