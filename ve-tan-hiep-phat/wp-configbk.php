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
define('DB_NAME', 'nau83f1c_naucharm');

/** MySQL database username */
define('DB_USER', 'nau83f1c_winny');

/** MySQL database password */
define('DB_PASSWORD', 'x3IsgbVua1@!A');

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
define('AUTH_KEY',         'u;53dNR:4U0oXQ9u3m,phM~bKrsia`AD^;B|Z9VRe9w~mkLb_dm=id}-=]yY,Zkp');
define('SECURE_AUTH_KEY',  'Tw6Cm4c_=D7E(#oL2+5d/y.C65y%Q=3i?1vDK0t]BWq<{4xv$Jay4OX/2;<bw|[l');
define('LOGGED_IN_KEY',    '=7Tpi!)ro_niE~+oV 7L6Rv[6sDN?d|`v,[|&:PzM{2ByO%,)6G4*9H_6!9_VcFl');
define('NONCE_KEY',        'cULBPu%|Qs9)VqNE-|6~a$g-P]-DcI}%+fRo|:I9eD%kkx!`nQDG2j_PM%+qC-Yb');
define('AUTH_SALT',        '`qrg7%Qulz?ZR$O.Wif:I,z@9O+@k5O(~y@FX%>$$$A|a%6yd9)uVDVzO+U$[t<5');
define('SECURE_AUTH_SALT', '(|}yb9@pX-oze|:_3=<6W|1_WTz#V3Vpe;vtr_<D}Fk5_);Y~7B4y^.U5/7*t7;A');
define('LOGGED_IN_SALT',   'xMrCFGD#`[&@BkG!q#!m$o1o26gX[lGjaA}oaRfbX;5%]$|9HC(Qp$_gV<+6LpI@');
define('NONCE_SALT',       't5O5+|!30H`4C)ucLHTzrS-G!0?k4_;?.|8+j6Xq&# /*1Q+7tGDfu*`UL>V#WsA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'naucham';

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
