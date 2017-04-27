<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define( 'WPCACHEHOME', '/home/thp/domains/thp.com.vn/public_html/ve-tan-hiep-phat/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
 //Added by WP-Cache Manager

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thp_vethp');

/** MySQL database username */
define('DB_USER', 'thp_vethp');

/** MySQL database password */
define('DB_PASSWORD', 'Baby1985');

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
define('AUTH_KEY',         '{<biEZIF+%h}8[-]R|X^q,d%TAzOJu a3LW,qt0hk {1N Da}D7PK=R4t($*>nb;');
define('SECURE_AUTH_KEY',  'URI9O^Fq7+`|!IC%eMg>o=R3Rji28-lyaE{+BNHb>h,fSba(U*E_Yb0O|}E$.Gwj');
define('LOGGED_IN_KEY',    ' 7MxyZlc8*qf>C9E|o,&S(#7Y|~9QfqvISS@kl#Xc;<lJDt+L^l54OZB)IRFPLF|');
define('NONCE_KEY',        '~fqvGaf0)qkN:dTZ(%i7[]-&oN&m=$dJ;2H=|8>*4r3+~8g`[=T}kYw-&v2v};qU');
define('AUTH_SALT',        '!c|QVpV{TJ(N0UeX@%|mMBp9:hmS*N1pOyU^N0>BKgG_xSk7l)b|WC [udYAHn?|');
define('SECURE_AUTH_SALT', 'wq8QPCpC#?Cw|yzl+CElGsW([O`gUhsT[@p+gv4 t(`.l5Q|PWX<S_|#jQ3UaJ_?');
define('LOGGED_IN_SALT',   ',(/Sf:e>Qut!*qHN~<HLy0-iLz:00*M_m=jn,[lA%68u9H::GJ}IPIB/YGs.Kt5+');
define('NONCE_SALT',       '-.2@M2chM9A5(0}oJ>y&4(U<f0ef[Oz-Z)B?3z{2$:.y5(p<{=6PiZa-xN=>jE5<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chua_';

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



