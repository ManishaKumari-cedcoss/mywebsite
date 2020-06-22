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




/**
 * Custom_menu_page
 */
function custom_menu_page() {
	add_menu_page(
		'Add Link Page',  // page title.
		'Add Links',  // menu title.
		'manage_options',  // admin level.
		'own-custom-settings',  // page slug.
		'callback_page'  // callback function.
	);
}
add_action( 'admin_menu', 'custom_menu_page' );
/**
 * Callback_page
 */
function callback_page() {
	echo 'WELCOME TO ADD LINK SECTION';
	?>
	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
	<form action="options.php" method="post">
		<?php
		settings_fields( 'own-custom-settings' );
		do_settings_sections( 'own-custom-settings' );
		submit_button( 'Save Settings' );
		?>
	</form>
	<?php
}

/**
 * Setting_init
 */
function setting_init() {
	register_setting( 'own-custom-settings', 'setting_options1' );
	register_setting( 'own-custom-settings', 'setting_options2' );

	add_settings_section(
		'section_setting',  // id.
		'Section to Add link',  // title.
		'callback_section',  // callback function.
		'own-custom-settings' // page slug.
	);

	add_settings_field(
		'setting_field1',
		'Facebook Link',
		'callback_facebook',
		'own-custom-settings',
		'section_setting'
	);

	add_settings_field(
		'setting_field2',
		'Twitter Link',
		'callback_twitter',
		'own-custom-settings',
		'section_setting'
	);
}
add_action( 'admin_init', 'setting_init' );
/**
 * Callback_section
 */
function callback_section() {
	echo 'Section Call back - ADD LINK HERE';
}
/**
 * Callback_facebook
 */
function callback_facebook() {
	// "this text is due to third callback function";
	$setting = array();
	$setting = get_option( 'setting_options1' );
	?>
	<input type="text" name="setting_options1" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
	<?php
}
/**
 * Callback_twitter
 */
function callback_twitter() {
	// "this text is due to fourth callback function";
	$setting = get_option( 'setting_options2' );
	?>
	<input type="text" name="setting_options2" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
	<?php
}