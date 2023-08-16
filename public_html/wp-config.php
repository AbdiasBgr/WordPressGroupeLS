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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mttujzgl_ktvacdo' );

/** Database username */
define( 'DB_USER', 'mttujzgl_ktvacdo' );

/** Database password */
define( 'DB_PASSWORD', 'o5S6[cpS@8' );

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
define( 'AUTH_KEY',         'ekvenmbkqisjydigqtmwnaahv1hw5nt28q25um7zrirqwici1fl6j1sjxu5a8eks' );
define( 'SECURE_AUTH_KEY',  'cj4h6gi6gvhegygsnaeyfs4nkhtupa36obbe4dmdmgmzbubnvszj3klk1pujevnn' );
define( 'LOGGED_IN_KEY',    'tttfykcn1ryy3boyzvbttlfj7wh9aanijtdsgyoiskj2hrthef36lcvo6ldkclwd' );
define( 'NONCE_KEY',        'ivk0mshilm2rh3libklj1zwgtpcq6zehpmbw89tnqt0ae6rxrloimxuh49dxgerg' );
define( 'AUTH_SALT',        '9cvn06qthgjkjvydzpyszqgkfcw1cfn4lmyyctimur0rvb4b2eujy2vmhxyu6uup' );
define( 'SECURE_AUTH_SALT', 'w5ge2lkrhhb4bahcpjzdgoafg2kq0hsdyik1mtiv6cx0wdjyhrowqaxlmre8m5gr' );
define( 'LOGGED_IN_SALT',   '2e2tfet5uxjcexnrwwcmecgbixsbadkdwbqvfue4igxhbqfzmykzzsdrlzybperx' );
define( 'NONCE_SALT',       'mgghgyedqeugzzkotsmxwg2cud4y6fojrpw46qdw7p8jmmpzidt3976knathb0na' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
