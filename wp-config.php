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
define('DB_NAME', 'momodsDBxug');

/** MySQL database username */
define('DB_USER', 'momodsDBxug');

/** MySQL database password */
define('DB_PASSWORD', 'apjvMYSb2');

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
define('AUTH_KEY',         ']l+t#SmeTm2LEXLx].6m+qi+HbTmb<ANg0F4}Fv|@0|RgdsCRNCR!0:Cs!wo!Ohds');
define('SECURE_AUTH_KEY',  'Sx]_*2]axmm*tH9TTHe;#A2;LAt<*+u<XPi|@0[Zskh~sGZROGZ:!85:G8o|--:|V');
define('LOGGED_IN_KEY',    '$XQf{^{Bn^y}YMb-;atlap9OLe]~;]9l*x]*Leaq6PH6P+;<Amaq[8o@w|RkdRh:');
define('NONCE_KEY',        'B$v,QjcvBRFBR!0}C0gvs!Rg+q*PeXqAPE6P+{Am$qj$IbUn3<73My{,3>Uj-[Vo');
define('AUTH_SALT',        'L#*;atm+HaTi;HA;Eu.*eu[8:Zsl~KdVKZ[85K-[~w#WldwDWKa_,Ug}B3Jv,@}Y');
define('SECURE_AUTH_SALT', 'zYocVo8RFCV|4[|8odwq.yEXTmb{EAIy{*$fTmj$I7QMfU,73>7r^$r,Unbx]at');
define('LOGGED_IN_SALT',   '5DO~;JY,3}Fr^z>YocVk4NFgo@NdZNh0K8XqAIEX.y{<Afyuj$MfUQf<73M$r,');
define('NONCE_SALT',       'nIUQg}B4>v,9;+]*x#TmetAPHX.2{Am+u*PeXm2IAQ${GZ|5:Cp~w#Shap5OHW_1#');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
