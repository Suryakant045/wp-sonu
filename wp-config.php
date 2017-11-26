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
define('DB_NAME', 'db8bfcbd8e3a8e453bbf2aa837008cd1df');

/** MySQL database username */
define('DB_USER', 'hucctldvidbzbczp');

/** MySQL database password */
define('DB_PASSWORD', '64KYTDPvNSQqx5LoW2eDox5EU5BiqrosCGcvqXsUiRzbSZBzDWhkbyuG8feWbEfw');

/** MySQL hostname */
define('DB_HOST', '8bfcbd8e-3a8e-453b-bf2a-a837008cd1df.mysql.sequelizer.com');

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
define('AUTH_KEY',         'A_D8pM}`wF747gSfX|.&Rkg>%/Z/L%ltd@O_WWN`$oQHbUH<VS$T0xc{W !, oLz');
define('SECURE_AUTH_KEY',  'wz v 3pgP#1%6Z+R[eIa!vKjQr,fd<XP**B;7;aF(2L%YJ7}WI7?0/=([OPP#=2L');
define('LOGGED_IN_KEY',    '$e+3A`!qW*T=>Mw gcVsq{BgxID&_;g6!#]@1J>:_:+GE`qhnmtBYW!a!{*r1S(A');
define('NONCE_KEY',        ').YAlxfS%FT#P{^Aj*x&3_M~wo4b2--QXr9xvC!24O1Y`RXlelz5{1b9gnj<e,jT');
define('AUTH_SALT',        '/@/[c1:Z177;1AT`_Y]utg0W9fa%xE8tW4.4D06zM6sW!fmblYOZoDlFGO;qDr;`');
define('SECURE_AUTH_SALT', 'r7w1&3>yu1Y):gGHeJofM^IN5?+YQW?#Yv.1fi58.sXw$2X&}W)?kz-}p fjIO2q');
define('LOGGED_IN_SALT',   '=$=gfp/w#=gtmP-x>e XJ>O.=%kBDA,z#AaJT[6|:KZu+LfpOQ%ts^+`% n{-&mq');
define('NONCE_SALT',       'q4|d;@g9AD@T<_bIqD.zJ*McW4rkzw^2PPA]_a~.$6Qlu/7):4E;;K?8OqSO6_P1');

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
define('WP_HOME', 'http://wp-sonu.herokuapp.com');
define('WP_SITEURL', 'http://wp-sonu.herokuapp.com');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
