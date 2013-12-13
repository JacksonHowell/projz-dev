<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_trunk');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

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
 */
define('AUTH_KEY',         '$|gqN^]@rfY/Q}j5VnS6rIA(}_bU+/Vqz%EsJjrGbiv=$i~D^9PGr#w8L`>-I-R(');
define('SECURE_AUTH_KEY',  'Ea7X)3%r}zik4&Q=))2.:xB`6zcpj!iLe[L:wb**9?RBK#wbb+*<|FqGK+Hl8#uT');
define('LOGGED_IN_KEY',    'JLWi!vQdKb7!kb)+(><JlAu1#-{RwRZ;eS{o|/K,.(:M31W/[J<~BG9c4sN=x9UL');
define('NONCE_KEY',        '2&Nb1f+fN>!T%%*aie3Ci-FFzA qZB&sNBuG{]x]lzk9t9tj^l~.~#}Z_m,PO8e:');
define('AUTH_SALT',        '}hD(.&k#}kpkuyuKRbU*>~oAz#mhMKdV<rq[Z7y`7r{`z6Dsya-57v{Ld*_>T*g7');
define('SECURE_AUTH_SALT', 'i~YmEl6BU(/Z7531`*Tky_R97^.$6)rh},~XQr}{*s#<d5R$KfA95vn&R;t@jBZ*');
define('LOGGED_IN_SALT',   ' 0m69$`1NK@,L+$^*|i0>+g0JC.bkR%O/l*hZVzw-vsjM&xsZ|_;eGzKl{,W9i2@');
define('NONCE_SALT',       '[fK+)*L@xi-40=gc~-~AG|(+D&u2=DN&!Usay=AZ>?&;jL^MzEUB0MlA]D#!OTrE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
