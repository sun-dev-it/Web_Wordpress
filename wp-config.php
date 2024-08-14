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
define( 'DB_NAME', 'web_wordpress' );

/** Database username */
define( 'DB_USER', 'web_wordpress' );

/** Database password */
define( 'DB_PASSWORD', '010902' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9!ippNz?cRs!o@#%,AWEB|:P--QR4hSZ..N[t107jPe@ubBABrdw-yMme894NfTM' );
define( 'SECURE_AUTH_KEY',  '|PTET1g~M]B#^~-TMC9iFMY-+r~x9Ao?Loy% Yk gU.X* 7fti*r<v{uM_Sn6}|w' );
define( 'LOGGED_IN_KEY',    ')!:r*..7ZlB7Nr9ehBt>^%Shaz6j YkLtB3pHcVA|iT{&[p(+&ZgU)`m*ic@Z`*X' );
define( 'NONCE_KEY',        '7U%S74S+$(kB3MjJyh9=c)MJ&,3q)n9wk&G04-Kbi4yv._Q]1jgm(Yf}zsCX:-R4' );
define( 'AUTH_SALT',        '?)MLqR#]8>(qoyaNPjX3jlke8TnV)^dO6AG?XW]&fc-g<g&{ZTq8utX$Hl7=?!Zb' );
define( 'SECURE_AUTH_SALT', 'f#/}0bN^bmK =;3#)7VmKJAHggE:AiBWr2#/7{{&qzRJX)=lA6YRpyXu0MS,`$)2' );
define( 'LOGGED_IN_SALT',   's{DCzuJd)hM@U8n6jE9=e&w~?)!~?+uKV?2d$9qOVczLcG)*TL7F|oD <q2xJur0' );
define( 'NONCE_SALT',       '7S6L-QYzwb]Y{Tk?)p=Kxsd}^>492(0z6HcI^0LYH&^!)SG<Jpk:w$ky)y=eD]$m' );

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
