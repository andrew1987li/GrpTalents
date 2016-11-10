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
define('DB_NAME', 'db_talents');

/** MySQL database username */
define('DB_USER', 'db_user');

/** MySQL database password */
define('DB_PASSWORD', 'db_talents');

/** MySQL hostname */
define('DB_HOST', '172.17.0.2');

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
define('AUTH_KEY',         'qUo4jxfS&hs/Cp0FD3^]JN<J4g6{ISm)23 nk<?Lr:D(at e;XZs-*8qI=45PVMD');
define('SECURE_AUTH_KEY',  '%~!`XL%0!M=kF39NOe]c^6A]250t3AqIf08wA]4vTq<H[=Qm%sVy<nVX+[-Z^juZ');
define('LOGGED_IN_KEY',    '0@8A<_6g{X*Jt{Ae?Ew9O7WA3BHgGvyrrCL~EMeK&].x6jNmNA#qK&_k:`8K29Pf');
define('NONCE_KEY',        '?)lA`.JfS;{Gq2P?;_o+] uzT^}i^^tC4[o6_$-v0.EF}RLknGO/,;yw_Y@.j6B6');
define('AUTH_SALT',        'W+e|S&f/kZ>Pr-!M`0Gz Gs/F`8`EUs{qRkbfM0$U`SMDoNi4[];YQujfgr&FX=6');
define('SECURE_AUTH_SALT', '5|u4AQqB`fLX%rrtByJ~LA]KIqvnURMDZw;2JAjdxa/(HaT1>f@@1l;bv*Rs5[T1');
define('LOGGED_IN_SALT',   ';3{lDZ+i%0v)4he<1o*E{6{9qX5k?RQ89Vs /%JWq@mp6:3U<(iC9,.54^HdX2s.');
define('NONCE_SALT',       'sZaNU(FuP_mm`>j@Ld3C=9PDQWrw2+RrgVs,9KI)|L$u&(pc~~TJO+8PD5S+RSCf');

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
