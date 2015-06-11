<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\WebServ\httpd\vadmar\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'vadmar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/G?(*2l0(H$}p|>9 *,S&oj9(@Zm]~#.#|xf4EFpEc%+2$b*zAxkVXsXQ%@u-,e6');
define('SECURE_AUTH_KEY',  '}@XF{oqBA7rPWejB;pP1y]VdTxM>%esMD3)M+LJ]$xM79-9>+>wG~+12a5SLMvz5');
define('LOGGED_IN_KEY',    '|}!qhq mDT|t$yE/1*dm^c_ETX67N:{vQ>|A-t9Ct ,*Q;Ze 7I/:,nKvK5^Xo~-');
define('NONCE_KEY',        'Iw#HT +KY2:JCE ?*xg{g$ u3sOJ|.._nJ2(8o<({GNlQE{-Jn-E7N(Tkg%&iAVq');
define('AUTH_SALT',        'nGGc+EgHZQN$=Ki6&b~6CP?!Evwyr82{6C)$~:umxM2SJQp0}lOqs-j+2=+,TCGW');
define('SECURE_AUTH_SALT', '~UYzMD ZN_z|X61-)>T|yJ6y5e|u@RD*c[_*4.*]|$c%IsK|1m|61<|#qWtG+ip&');
define('LOGGED_IN_SALT',   'K.8v#)xxi`@J6;gDa6n,i@N`~<,i:FuLC@Z6iySh>(&=UZKKF@wuQ2CS-iNY6N}Q');
define('NONCE_SALT',       'NyGk14)L-+Oy.{-]XwWlLzeM`TXAz5n<hiPo~T[za7qUOj,6S%KPbfWF!K*+z;e[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
