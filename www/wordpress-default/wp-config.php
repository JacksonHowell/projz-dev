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
define('DB_NAME', 'wordpress_default');

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
define('AUTH_KEY',         '`UJj,Y9YYFegA>pd3G;)+Ka-!z@IUX*:]|=_M#$Ba9Tqajoj]pr<pifK-P;$&1.h');
define('SECURE_AUTH_KEY',  '=y)4!4C[ 4JQ8{ 5Y=^o2iA6c{n[r{+GrL~0S{fP+^.({c.XivfxKrj5b2?xP17+');
define('LOGGED_IN_KEY',    '[B+bzU=7;7/cG}/aQbc[fbJd=L`%R$GQII.z|Lc]fQ]VN j>;ezHu-mGMo:Bj=QE');
define('NONCE_KEY',        'INhmf.lUQy!#vcM&<;=Ig/.z.nz-3y-Q6mu)}@5gsaMSHPBFx_ht2j~Y*Y%c%`AL');
define('AUTH_SALT',        'Uu&<dL!<_0?lxTNYT8PZ).0}76cc?E&,lV~F @hHCoDJ|0Dr1<ghm+d#J#4oj{r%');
define('SECURE_AUTH_SALT', 'fzU;%]M$&g6CnBQeXkq2U00~5iGlz`aE/N70/w&&9)l5At:F E$3d`1yM@igT#qv');
define('LOGGED_IN_SALT',   '7mfxyGBk8RPYo`+zTrPT9~b;+MDT|czge![0qiY-p`Fn:i`{o]s>Mf!a945W&(7(');
define('NONCE_SALT',       'i_.0Ym&e^U`[84S)*rKi/+56/&XlDb|.h[}9E+2}_G^I!~!d#r10>#7`~r+AY(U<');

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
