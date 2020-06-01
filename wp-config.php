<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p00ecyIqtyzbkxVqr5kTq/2/GIIkqqcs83TX43aYjcHZsNSChOquLmrHI3MdXZiRNGUv0iHxX0X2mdp1eQ/CgQ==');
define('SECURE_AUTH_KEY',  'ThTc52OU5eTrY50L0mVuWssT0uCPljpcXgnJDrrZRKbEH/L0H+dbykSgFlMxM7Lwb4YuQD4kw7+pl8Tu2iU/Fg==');
define('LOGGED_IN_KEY',    'Hbatkm3PWXHp2hOphMXKe79TkVpdfISyHGbiKDFETbqQKaTzJiW1vHWQMevATiLbKD6/DLX7LwpnNWIpW+OoYg==');
define('NONCE_KEY',        'yEvH0JIOBRG96KnIETONgS1xQ7bHTjR9cfLcVn1vpp9u21RhBOX3Ol+QgWn8Efl5VHU2RcGqsv5tQSQpDIxi6A==');
define('AUTH_SALT',        '/cYWZmK+eSneixqxu+FaKTOLcf7HyNuLafQ+HBSJE2aMOgVn82QJLQe+yeGCWTioM4lhQDX1AR4Hz9OWJdohbQ==');
define('SECURE_AUTH_SALT', '4txMyqsl1c1aswSIpBUvy6U524xI1cJVXY7OX0PvfJP7r+eLsFNmCTzL7ktbB5imtDDvNi2dW4uMAITis53QJA==');
define('LOGGED_IN_SALT',   'HiWIjI7Ah8EGQTOqkP1X2PV+dRS0SEl/gqse66vgz2t0PNCtmivh5drbjonAl7/kVuGJoIUFUCCPQXPTvCmRKA==');
define('NONCE_SALT',       'sfnYAKHglCUxE/RUIsLXv2G7FH4V2gw9KG9PVMD7oGITVlyIHj310y3ygUbJ5AnNt7EH0CtuKPEuCs2+xk+tPg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
