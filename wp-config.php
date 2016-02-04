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
define('DB_NAME', 'project_organizer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'b%Za|3u#fxR|x=AqyUQ[-<>#P9RXN}J`!&9{2PC|3S5v~r>1F@&5ONzXy-gBshnK');
define('SECURE_AUTH_KEY',  '|yr2k~FXP?id-i|wKG>y%*o-$Ho8~fngHT+Ww+ANlyM|4M5Y._PIRCi-_3-d%;SE');
define('LOGGED_IN_KEY',    '0Nyl`S:AaY7=hHGhMdNV6OR$2}jpv2||r=NZ!P--!7nJfh]*LqNW/-We)i>{m6{<');
define('NONCE_KEY',        'bv5Cc(IRu|#zop=91}gGq>!-+b<30~K*S,8z(#a#:+*Cwg-0le`Xq#b#Y2oR!W!j');
define('AUTH_SALT',        '/_&ff,{pdxLBzv7sJu:{{-c-&&~Xo4&D(+L_HU,cB3n`w{|7l;lM/dBG_R75.HRM');
define('SECURE_AUTH_SALT', '5&bMk+%-vp.^q/OMqog5%V!L9Qk%?Ec1;N|VtLpE#sifd1fz:,I3oU|s6cSpuae>');
define('LOGGED_IN_SALT',   'qYvmr@!-!_YTHK}Tm_UrO$lG9vLdYIp{g-1sa}f9YD]6<f|snRV<5F5T#[2;!3Dd');
define('NONCE_SALT',       '(EF,6cjIgVmd~wm<DYk0`6TW._74kKX&FG-oSd.stFZ!b.$y.k>>YKo+-/+Ja1f0');

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

/** Sets up 'direct' method for WordPress, auto update without FTP . */
define('FS_METHOD','direct');