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
define( 'DB_NAME', 'lakelo53_lakelouise' );

/** Database username */
define( 'DB_USER', 'lakelo53_c4_admin' );

/** Database password */
define( 'DB_PASSWORD', 'c4@publicidade' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(uA16?.8<<#Y;X_$:*<<2Hgx_M ~KENVI@0][1sG/26M:sN:RB:|06mb$*,-_+:Q' );
define( 'SECURE_AUTH_KEY',  'an~7VWN,^WRO(z2cQ`h)#&Q=5x_OKGG}^:LKuKbY8rN](P_:>mS[&1QpB*2ujZc5' );
define( 'LOGGED_IN_KEY',    '9TnMk}jV/mC|_,}J403f/K~,S^_{@#jfb3rc0?4f7m#1S8}FY*_nsyw+3{B6I[i^' );
define( 'NONCE_KEY',        '7{eldm2_i,nB7]!Otg74n+[T>s3Ej>.c%`l^lar):ES|Vx)~P7v`P* +3oz}}GPP' );
define( 'AUTH_SALT',        ',1PQ{s;_C&9rB?x<1d7>D2~B:^2=9}TShRHu2AOCxvSz{H}k3n7eM~1lRPk|bHd&' );
define( 'SECURE_AUTH_SALT', 'pQ:vSy6{o1=Uw_ U~5ZY0Lim$e|+[/`G!#q?7Js]NOie?MY$u:!^MeQiLY`yY6B2' );
define( 'LOGGED_IN_SALT',   'Bwp-idFuHQnsa;Zt:P-%1Ez1c=0)<?{7.Dv4>x&m;T{].MkAg`o?g2OEwCclJ}cV' );
define( 'NONCE_SALT',       'Zb}5BY%UU2Y.N/(u2LD#:el]Z.]#VP`&Z!aDT*kOh3[PU}cl6dV($f+Z3%<|:#uO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_lake_';

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
