<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_USER', 'mrbirtch_matt');

/** MySQL database password */
define('DB_PASSWORD', 'mattB247');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        ']!-^QX#J~~VKh`-X`=L?@At+E? h|Kkct(=kpD+$Qlt%h] MQLROhz#=B|js$|#Y');
define('SECURE_AUTH_KEY', 'pP<@l)DhUzc0HRJjz[CS4[*jVs6l8Brd]l^XW*I!&grWm6mWxs%WPe!hl`IT]-ys');
define('LOGGED_IN_KEY',   '%_7h($9J`|1 cJWA`&=]m^jh>[DgSM::3GLxyFjrG11)Cs0>.Rg^gohP_/N;xe`s');
define('NONCE_KEY',       '%KeB=s4+O#9Bvrr3f5kO9d~oqH(dh,T+CXVm,5_{W)~15+7S;9L% {5?F=!j|Tcu');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
