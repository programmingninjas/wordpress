<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'yourpasswordhere' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define('AUTH_KEY',         '.oEGr*9v+RrYMNyZDf.~tm{vP2|FWC=<S]!6V5)lG`=U/|,Mbk<:rduwO_Wc-T&*');
define('SECURE_AUTH_KEY',  'V7bWMHyr,(0LsMGkN/0%e:<5i?~LuY9U@iI:zJW-ik#R;&/W >t^6L<jxS]I/7M!');
define('LOGGED_IN_KEY',    '!|K <d/570v@L9/geRil1;^YblYV@U`hL~5yj$n{`R|@ bSu#x2Xptc4+tI?oy8v');
define('NONCE_KEY',        ';}gAQWH6llC3r04*Wm~F]Tbs0$`OuE^c;1e=I2uJcX]7[Sea&R8pi#!FU~8-x:0V');
define('AUTH_SALT',        'ts9++6o)0`!.3AsgB<.Z{#&1*BK|6q)-9RGn4`46D?d`E-Vho6Y+&*prc)@ClACH');
define('SECURE_AUTH_SALT', 'YUa,{~#C66;>.p-2kP=&c k3}Y|@eH}D+XP<V6!?Fm/7m&e- +_V+cq1%-rQ),]h');
define('LOGGED_IN_SALT',   'GfYy-@*`IEp*FYb]-Axt7b5US8;M4Li?vME-epg9k;I{KP@9RjHn*[.s$TJjKKU9');
define('NONCE_SALT',       'm62n{J?lLPyZ/CyZ}@<-Q[[C-_XF,)F2Se04M-4uNY,W-{nwJ>zDvafH*ar5*5e.');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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