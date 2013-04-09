<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mrbirtch_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '2FQWU:5zV|Lnx[hs;yOTsvIl^Rt0KGon^<o/;gVh8~XSn+m{-R3QIofMo+EDbn}`');
define('SECURE_AUTH_KEY',  '(h486<UWKg[B)4B%o[|{DZAsmzH=>sw^>.%tG=Q2.I?s4@HREWf}YH65;<<;-eD{');
define('LOGGED_IN_KEY',    'McOT>F5}NhpYom3Dvo=|l/)e!%xLX?NgK!3+~A#QpFJo|y$1L/LBi$oaGY$H-v?@');
define('NONCE_KEY',        'va44ZokXexJa/, %E-4|.&bOa(emo=q (k+f2h-gdZIrv4jhF?y7nxJKT*+Ku6k%');
define('AUTH_SALT',        '_f2=v0oz:#:9 -NssZ2<3mN#igW0X=)xZMe~~-qoJ#LHdv9,g&yIKM_uO8+_XOHB');
define('SECURE_AUTH_SALT', 'JpHlC-+^-uD~>TNyx^6nDXVAZ$@RnF3v/qg*ZvWIX6uq8=[$xZiMKGbQ0u.%o<Y?');
define('LOGGED_IN_SALT',   'THT=NK0E}Ra?:(N-v]G{Tp.J&^vG`-%kL1QuoDYbb*-Wo?2yFw22jW.$bl-P8H)!');
define('NONCE_SALT',       ';b#`L1J#=]!t3.V`d1|5@$#z~kAcjM=( ih_nGUuoSXUxlrI2).Vd?VCg2nhM:Dt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
