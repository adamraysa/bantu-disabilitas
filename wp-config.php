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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bantu_disabilitas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=AY.`qD+rcJhv6(xbI.N]xK,)[6wl?_ryv2;-pkDF6+)g~vw&ZgXgCsR6y,U|bYP' );
define( 'SECURE_AUTH_KEY',  'K#9vvRkfvr_opCzGBxOG_$zt6Kt$dwlM1Fm<3|}>l]b{nHiqq8.*K9MEuuE7DJl{' );
define( 'LOGGED_IN_KEY',    'L[!>OQDU3({D*o_6AYkit){ :CC/Jm!rnmdWp7GQOdkhX6A~T.Of&1Gs:%IDWpKU' );
define( 'NONCE_KEY',        'A.}#@B=CY6X3v^3O}!{|/Jq?,wa[AIZfVJ*zWto5/4FQA])F@dtHkza_!u5rz`1B' );
define( 'AUTH_SALT',        'X.c8QTM5`A1,MyX+`/.`ZTGHdBT|F`#?[+.Hp<l#I7(vP:{Rh &Isq))Ry)U$FnE' );
define( 'SECURE_AUTH_SALT', 'mFI,~+H7wG;S[hWBzp:t9@l&EvrX!}ksh$b{}Cw?!B_w0CEahB3rx@sFgoLx:Zy_' );
define( 'LOGGED_IN_SALT',   'YQ5 )L2cPnp(yK7%&2*xLJ^,42AzHP$H/N3*EnM/GE3T6(8kCD$j0Kl~m[MCX>Iz' );
define( 'NONCE_SALT',       '&~}-@^]A}v7eG#.~)cE:id_k}u/QM$!a:yi7FJ .U.GDhak=l-/=U^;*Y3ru>4_!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
