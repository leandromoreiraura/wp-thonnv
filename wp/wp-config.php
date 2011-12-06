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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'iK1,KC]K&Oh&E5D_Y)kjGf=MKVy43K55w&$tPj-0Yf /YJQUs.Q<}guav2*2r*Z)');
define('SECURE_AUTH_KEY',  ';Dnr,c?esH_*#nM^3bT}TQ=gxj:eB*KL*0QUAR-mx}2^.XskcS0QVa/NEO%-,t=+');
define('LOGGED_IN_KEY',    '8?9qBq|*6u)sSJTs6nrJ=;F|4&+je(KDzM$Gka%CL12dSGyN3Gms}RQkfKpTXXQ0');
define('NONCE_KEY',        'X=azHbq(z3[#jR7qH2;kps{J@N1]`~MygOl/pff`%7NgYsv>8{_oLwOQf!AnOIz~');
define('AUTH_SALT',        '`;/FuZ>xyZLNnZrHGT~3/y$@TdR.vQGAo.2;6w)&bJZ@PD0N[0ms$OW$Z>2ufs0:');
define('SECURE_AUTH_SALT', '7|~70b,iccuSK:piU*6 -i7Dg~nYwK!R_vgg#PSYs75L!Zs6s7ZueD})6TpmQvM*');
define('LOGGED_IN_SALT',   'O{:(!.Ib6xUfoAa=@ nIQt2fJ]38? O<?x:Q]B{q>k5>31[De|F2dvQQ$3A:YM4t');
define('NONCE_SALT',       'E}3&Bl`i,?u-)gKRl6XQ`;]ndbEWXkU.7)O9cpXgjwWH^uoy`1Z*XmVlXT~^CX(K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thonnv_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
