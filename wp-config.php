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
define('DB_NAME', 'fenixav2_rflom');

/** MySQL database username */
define('DB_USER', 'fenixav2_rflom');

/** MySQL database password */
define('DB_PASSWORD', 'LLD11fy*');

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
define('AUTH_KEY',         'X[E/A/Uj15[l 5H22r:se05[=`!!Il},V,zU,(Xe<r_$cV^a[.mx<E(1+aJy8yyH');
define('SECURE_AUTH_KEY',  '!{u6Em@.}1o%GueimFCE{)NQg)x|B~C QY#P=Vm|21;u:w+.>#O}q${>9hJ>r@$<');
define('LOGGED_IN_KEY',    '=chW]kgc=NLdx,=U5;xPp{FEBLj^kr5>yi>6vg3f4F^zw=TEp&rR-Phkd5>H;RW0');
define('NONCE_KEY',        'SrsYO1L3F+GxT!nb#>[Hmtr7y/(W?DZw*VME3v)RW$T>}QA?&Iw[g<Jfuqp1/>-}');
define('AUTH_SALT',        'CzeRrun)GHA;}QXiJNix4SKF]3l&^ND[S&ZY,p/;rZ09?H5Xz82f*(H/bh~A-_+m');
define('SECURE_AUTH_SALT', ' S/$`TH;=+5fU$2maap:wgMa>2uOiH+zfFK!9_oBn@iV(B6ekjc l(;F`&~*8Ld^');
define('LOGGED_IN_SALT',   'EGMTtw(?J$jOvCyuwczhM$!}]auLs.Ynv(lGdmZbz8)OO>=u7s7DkcM/H4*8yZ;o');
define('NONCE_SALT',       'z<E46b;4,UP2YuKu>?aB@a;UXFJ)]TlMy?]}09%ZG?r|2wq5--.g^v|q]of}4Mfe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');