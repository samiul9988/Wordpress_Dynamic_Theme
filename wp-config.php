<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Deelko' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i1wxdk5kC7MwkTHmuYOxVylrJ8sIalf8fvUkCnkYFTJqI0QQ8AJqieD05y4ladYJ' );
define( 'SECURE_AUTH_KEY',  'VbBzMyW9eYodVT17TxkGSIvIQ8d5WjDfUglkxas7SP9Vf3aw4AH1mOyBiSAR1foC' );
define( 'LOGGED_IN_KEY',    '08bVV5PVQisea4LHRPnPCtPg7HOqk9G0ofF9XOfx0ypgGsatNJYBJhzMaqSoT1ar' );
define( 'NONCE_KEY',        'eEwvXAnqQZOK2jEScsMRoO9B3ZjpS0mKOd9QvzULfYhKNRzhN7aU86KRmz4b7CFx' );
define( 'AUTH_SALT',        'yC4l4LLAlhDBd9zjWZbXga670md295L2MczIL6sqBdO6O3dqmY09pfRrPf2n1HXl' );
define( 'SECURE_AUTH_SALT', 'fUTgFzl5lssqIzTlPm81P7zHffy1iW8o3oUeOHNWKqzrQZgvauEs8W8gFBYbg3Nn' );
define( 'LOGGED_IN_SALT',   'SDUxZvbBFjCcYzG4FWlXteznGBiTzoQJUGSKoy6W3NDcHlE27Gnfm854KLjZ5cBn' );
define( 'NONCE_SALT',       'w1HzByYl8bv0aATGKzGqae5d05YmnjEFqAoOUzVxztHOz9934plD889Rmr0EMMuG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
