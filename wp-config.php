<?php
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
define('DB_NAME', 'jesse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')A!}}Z(C.bIyiYL}tRe8-G;J3}R6[TtO|Zhxj`v&0_P#LL--3JpFh7P.N-0WO[Kq');
define('SECURE_AUTH_KEY',  'p#T)GGgZYxU},K>rwppyORN)C)|0oH+U4/;eZ{$J}k/LQ+Ll#z&pcl.;6.-f2|~c');
define('LOGGED_IN_KEY',    'L6ZWx7XU2+Z03a|/Pf4A)X]@(e-b{^*}_?X,s1kz${>MN:g^2,&Iwv+hjl+oQ^HI');
define('NONCE_KEY',        'j7%&=&XOKyI<J{}|J*zMfSGI-c;.ywD>a@pkr*4G=#_YH6>ed9W1<$plT*E?|@|Y');
define('AUTH_SALT',        '!FTo~ nK>W+$7>Jh{kq6CXuRb3!@/yJ#pR>2`[qkM~_Uo?m)Hb:)6.&*0OyeUG*&');
define('SECURE_AUTH_SALT', 'y|_vgISr7eDJOLJ,S-GQhTFin|&Rn@ q=M}b>Am2)AMDS8m/A,dLUTgwmgp66K-Q');
define('LOGGED_IN_SALT',   '`]K#u*zRy4aLf`jG$6Q/AP2XnVycD!Q5LA7r:;gPeo=S|8B>ibzR4N6jVwI$evln');
define('NONCE_SALT',       'HwOh</DM`{6a=>PNf%wZB6Mwg9&zvEug GgK&dRBX4~TvZ))3`m]Q#x8Rt^{sMMM');

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
