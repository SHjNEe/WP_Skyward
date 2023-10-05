<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'tMcj5O6QisN+Wom3/LjDMCtVyHWgYP8chn+19a7qjCeZXzENA2ekiTPgFXqV8IBu9xRVk70R0RQpOj685TDUzQ==');
define('SECURE_AUTH_KEY',  'QXmm6XCmg10ZVTGeP75j3Op/YRB0/q1qU57HG8D3hysWlYdgLKkkLvCsAhnG5/TDpy6L2YBMKU73ttVbDkWysg==');
define('LOGGED_IN_KEY',    '4u1S0OaxQkEiThmmx9GZbrZh2dLvEGw2ArzzYUINbShDGrixgGaWn8mDDbatHpb3QkaugIsmh+wnPvNDPPBbVg==');
define('NONCE_KEY',        'dcsvgTk1sIPZPiuRtf9juxpT4Ns9w7pbF4t5Xt69r9QUSNM0aYr3RGGs3afelKRZXEVR60sDH83Heu7TBajScw==');
define('AUTH_SALT',        'lbucpUZvyW8MUQ+Ce87d2kglK0GkG0c8qgIihPV4SWLNVhtDaQPyj7nVq92obLt3rObPJEe7Ivm7CSMxBsCr1w==');
define('SECURE_AUTH_SALT', 'D1mNetMpPfGbdpLfjQCl/ZUnEwokFewnupX1lotfN0XUCPgqsHZIKWvEutc8wa6oOrKcGkzEFOmAUZlLSOPyQg==');
define('LOGGED_IN_SALT',   '1nD8UL7tB3isras51RVxgv6cV0fMdjczP/KZi0Mc6fbQVZEVP5TIslAri0mWn++MNgKiHBxcxpiMk1vb7XUnWA==');
define('NONCE_SALT',       'ihuEjc6SrXAcqNfzWGHIk1W0qKL+Znl38zHDroVCJ11ksttBIUDp+NV6qwujzer7dxGISGsaGmzUGFFOEk5Vbg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
