<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alzheimerproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lol0000' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'EQO+:y(S#.(k-&]SFf;d8Vs3HO3]S6p!s]}A_2?!(A=W[x4iI0c3<Qy!3[#2?pL8' );
define( 'SECURE_AUTH_KEY',  'P7_z<E6>#r{-6vO;<t*N0`y_O@1e+Y;Cw#rPtK RP^@q7K44y%{J,z8.Q,jRYfkO' );
define( 'LOGGED_IN_KEY',    'Q14}XrtY*@|j_%.iJ]~0QCBIDL9jH$*H BC#R&ZQUmq{?=e>!1/C3:kT<=+;YiAY' );
define( 'NONCE_KEY',        'Y(AKaqe;vwut2!b`_wK0:q@DGUE.2 &DqOREW1OT70_;%cAF/U9Bz|p]*kmIOgy_' );
define( 'AUTH_SALT',        'o%UxwOgd]BFPGGRx,%_y|CBEK:my`!SIOs>ipD>8`a8vQl}lgoB9Dz4i,<7{BDro' );
define( 'SECURE_AUTH_SALT', '^$1A>T)~~%adatlC66F`uUT9nz$j^CG{|DiYhuFCYs+([MKqo!q>N>yZflQ$B_[5' );
define( 'LOGGED_IN_SALT',   '=k!d]Lr.cVL-)t`%D<s0y3ZRh.;@osh/=`RpE`lm!<3_q@-wfuhO/~1akJl};yeN' );
define( 'NONCE_SALT',       'J9n/TFG.E(D.C&@@Ofu/lF)=AL=no_tA%p|g%g@v5p]TDvC|sQ0r~G*lGSd+oK;C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PV4XxVu_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
