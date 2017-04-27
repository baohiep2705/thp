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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/thp.com.vn/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'thpcomvn');
/*define('FORCE_SSL_ADMIN', true);*/

/** MySQL database username */
define('DB_USER', 'thp');

/** MySQL database password */
define('DB_PASSWORD', 'PNK5OxLDPNK5OxLD');

/** MySQL hostname */
define('DB_HOST', '192.168.2.50');

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
define('AUTH_KEY',         '/:M`_*&Kj`Ugh6;Wika{#m<ADd&. s1}$T.6kGAo2*oH#fZ_zB{[T/37G5QR[vd`');
define('SECURE_AUTH_KEY',  'NQU X%^_5!6?&/t+9%C{avX4F%**Dn533QFe^(?d:%YE#[w[=.ne{X3>l^Hz*mh/');
define('LOGGED_IN_KEY',    'ipORUKl;/!6MWOlMP:r%k?=rYd|y5P3fY.S`Do7Wk,13:,U)^hXBY9b`W[j>z^&=');
define('NONCE_KEY',        ' &AFhPD`!gF}0aPhv./ohX@{ 3l]?lXD8^U@%QW.vs,N477[n-+_r3TjDx8c=:Q>');
define('AUTH_SALT',        'P[dy-|#=e?we.cN79[g>a8_=SaB]qjQm-9;EMfhDY:/G>uOwb@}}mCVF1Kp7.@6C');
define('SECURE_AUTH_SALT', '9EYVMs2Z+^9d2mfzNv551SBkYAa1$ZFjkcd@?_o88.V0bdMF[-sW/<nCRe 7-Qp?');
define('LOGGED_IN_SALT',   'B*@x(yKKI1_a!Kl.~,(3 eBb|XUJRB3Z $1,BY:K`tkldyhEon]{f{09`saK1=o^');
define('NONCE_SALT',       'S^z&cK,A7p12ZQJR[#b_$S}@!PC /g-DaU`&_K0ZJI xD[n^WP?h~@&Tmb] l!IJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tra_';

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
