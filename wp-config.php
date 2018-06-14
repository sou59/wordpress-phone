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
define('DB_NAME', 'wpphone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'a95I4>s-iAO:qTs5W-(W9d7>IBTpW#}tCP[{PQ,o#H#)&Bkf&x{>R-1j~U9pFaDE');
define('SECURE_AUTH_KEY',  'j>&dFZ6Rg=tI2;KolqzEz)r`7_VMFEKh0&2A0vfsN6Bgm4:`3yM:1wka8|S9/zMp');
define('LOGGED_IN_KEY',    'jmy*cU+P:XYt_o Bg-[K7L?Uv.k${!5Szs,m<k`+F1C_?%$Z;ig3K2V}Z^gbp-ls');
define('NONCE_KEY',        '6~6ETiL;KX,MUbSle>N60WQTY}]b=wL=!a8X-DQ?^CvJ52qoNZc}y>/Ut_k$B-w)');
define('AUTH_SALT',        '8Ar~7%18LU0ngaJ1+gI!2r$f:K5h#hs[r#!.~Tbd2FQ1nvlPU$ox<%#dRqM:styh');
define('SECURE_AUTH_SALT', '$~$f|!_w|dVGSrgoTF0z}@R$?NM EX2eov]%X8M/-a_W}tkZ.Z?v/|;KdkoFAe.*');
define('LOGGED_IN_SALT',   'tPXUrL8EL<#hs4:CK!I0n7o,/(L~kRL%mf+k-+K6Ux@$_Z|]VKEh/X2N_DRH?pfj');
define('NONCE_SALT',       't@XmjVs[]Oz-7^U9W7S8]%KniI7AnZ0I(G)9eBmaYk0)|H1#3A~>dE#<3eYw)9V8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wfp_';

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
