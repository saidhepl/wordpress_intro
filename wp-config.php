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
define( 'DB_NAME', 'dw_wordpress_202' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'qaLShC0$kw{u58d_;&/dmst`|{7cN|[DJ4!Lvr:@-9#HiIfq|emg DyClu%2tLh5' );
define( 'SECURE_AUTH_KEY',  '/X |F @iNI :Af0U~_c8&8FF+c)(x7?$n,qec5I!l+*P4iv!a)sJK8Ok>_a=DE:)' );
define( 'LOGGED_IN_KEY',    'Q[6wXeW~fUDIfr?2_hjVWjV*s7%RM@)BQV0DNaaq^2;lX`_+NFd;p6-b)=w>B{;l' );
define( 'NONCE_KEY',        'HQYGx~dFef}ag5VCZBf5(T4ErY}n~PkX2ndIg+3UT8Gc@- ~RK;9qJvM]ZC]5v44' );
define( 'AUTH_SALT',        'e4/,3(|wdsUH^0?6vd2M*Z9np,ZhHJvfZ0|m1[sYI<O0*=(~>c)i6(KS$#$d>WFA' );
define( 'SECURE_AUTH_SALT', '^;,tkh57Wi&WKa`IQw|IVxBm0Sp4EE6_Wgni/r*xNsN>ZRxm/&P*ktC!$j/s)&!3' );
define( 'LOGGED_IN_SALT',   'TK]9YQ[K|FM/ajN+l`J85~yoZL){Aq)P<`(C{</NLJu;*z1R[@},3!Eb-XVNr<iB' );
define( 'NONCE_SALT',       'c^mNfs~>f{ymq|_N+!OT5WAEwKpaj6W:V<h92^.WbuN/@/aCd164m&x_q:fZ ^t}' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
