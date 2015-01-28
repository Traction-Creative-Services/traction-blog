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
define('DB_NAME', 't_blog');

/** MySQL database username */
define('DB_USER', 't_main');

/** MySQL database password */
define('DB_PASSWORD', 'GWQs9Hv1@');

/** MySQL hostname */
define('DB_HOST', 'mysql.traction.media');

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
define('AUTH_KEY',         '~JSPIH@59>x+)2w5<4}V@V6+;Wrm%mC5LF>H6NNeE7BSScZh]{CVk.bYfj+sE*-;');
define('SECURE_AUTH_KEY',  '5g)qCu<7I*QZmT_#a6|c]ZvH/aLI%t5lnC0-WJEWHl2K +3N3e>p7O56pNLYY)3R');
define('LOGGED_IN_KEY',    '~;$Z;+~x;n<P2g;T~It1#-QI%+Ah5xo@bv(]Dd>`Uem~1IrFuo;2;;<uSi<M)|P+');
define('NONCE_KEY',        'G c|@aSl/g7)<FR ;&~l(~y8O^:GNx~XKQNOZ*`~2uw3oz*o` }4+swv~-q-><AW');
define('AUTH_SALT',        'lg40b3T OI9{( Ti@hXN^&GCl&m>-,cU38jwq{Gi9QmuPqbAc^4M` %G`A{GQVP&');
define('SECURE_AUTH_SALT', ']7)U!X(59t]?m#-Oa|SYP)^l SoR+5~Nzmkvt3YPVVknt;k<]z6;oqhx2ajR2YUo');
define('LOGGED_IN_SALT',   'Un,_k]v%Bx-}xDH]HnQDeH_l#GG_rEr!Zh:YTz]c2?n%Ds~|EAr(*uKG+coL:{qR');
define('NONCE_SALT',       '5kG[~/G#bC,AK1o{7D;g&ZGj,xuH^9Jr Dd`n~q+wU|X;I+/qk%:;tR .,wV|xP]');

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
