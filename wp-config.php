<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_duoc' );
/** Database username */
define( 'DB_USER', 'wpduoc' );
/** Database password */
define( 'DB_PASSWORD', 'duoc2024' );
/** Database hostname */
define( 'DB_HOST', '192.168.18.130' );


/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WixAN(@77e|o,XN(c%en%h2g?|S[X@o#rZ-e3s$H]i O>%s~v;<9|wF4)/GC-6Au');
define('SECURE_AUTH_KEY',  'zja*&X]T.EHUrYIYvHk0&RL+qW1`(@(3n.Hr=Y5$#HW:CbB,|SB(x5s(@8+gi?Fg');
define('LOGGED_IN_KEY',    'NrX-s9c8<;L=-z50L9xI(;-4)]s2@8V_{}YuK+12_h=ton&t|!X;!--ZU%l]SvA+');
define('NONCE_KEY',        'tc`W=mU^sjPBZoH%tR[B3+~A>M#HF_%b{?Z~,s![AwMm[2tKh(ZL~A5kAM{|%(|+');
define('AUTH_SALT',        'zqPeMlGQT$&hI@h82)l1bbe4~$aasFD~9WJJ7k/u#BWvx^A+-e:<uk baXVpE*B-');
define('SECURE_AUTH_SALT', '?EQ|K]Wxq)zu%=|Yi++jAt;^>-Ro%C,qZx}Gnw-F3Q>Es+vfH|>L.2xRP|o-yB6(');
define('LOGGED_IN_SALT',   'k(8p!}iVu`8Q2z!8abq>bcN#WCdhF!AJvm~yy^Fvok?ZG&!2 Wr!VJIYMx[>FJE4');
define('NONCE_SALT',       'qU:Ss:I7G*`GW6(_b-iG5S{&g=f.aURq,/(&6-}LNwtcx=Bg+l@+ya;K#oI*-^_j');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */a
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
