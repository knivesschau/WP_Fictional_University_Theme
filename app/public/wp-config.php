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
define('AUTH_KEY',         'fEWNF4wHfYG9vHoCUWlZbpb5mPdx22anK+2pM4wvaaexqW5aefyacwojdjrupL5pyzHYpTeZVc7vO8J1iIhJcw==');
define('SECURE_AUTH_KEY',  'f9YFvkXYH22Hr4p8urksc1Ya/jpXYi4FlVogvQbCjrgKQwzHCkn7jafI8vm3rzCYB+dhJ9eqgBh9JHR5Yz6wxg==');
define('LOGGED_IN_KEY',    'Ao9+QPUEgD7sjCODuEu/r7AJZ59egeBJw+E5tvvUEtOUVkrWzf9Z/GkFxnxBQ4SsIwkSJ20iC+X/V/5tXLOoew==');
define('NONCE_KEY',        'KzC9VPUtlIH7Xidn/+lz/R8ZP3BOv1lFiHSJDmGTwPl6DcvIzrsCTpgAac2GGH7o/EGPGw1dkk4UgWiw/Nl3ig==');
define('AUTH_SALT',        'QJ8WAKOIMsF4fd+LbNwmuZvCU3noFXgicOkNyiFJUE2ECkXwlLV4n4KDNbHquZsxS9FjoK9Bdv9D5ZdmyJDSSA==');
define('SECURE_AUTH_SALT', 'fqzwsS7SLhJjm7x/q/b+lHKHfPXJ88W+CNIUS4CXB69KFyzsC/kxZa81FfEa1urIGmYqk3EHYrAgnHHbJabNBQ==');
define('LOGGED_IN_SALT',   'xAdbrfWEGICE1hgxjafrdfk5uxK6OhPzDNMT9RGNPNAC36wbigUhFRELAwvseFCNZkienQ5YpY/Csf0vIqEQlg==');
define('NONCE_SALT',       'PvAVLColva1l5fmwBejwzTlJ20QvTVorLMDBRfHL/624LtFf769/vrymFi3U57QLh0LvJ8UtaTKrNpBUrVtmxg==');

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
