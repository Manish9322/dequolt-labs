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
define( 'DB_NAME', 'dequoltlabs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Manish@123' );

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
define( 'AUTH_KEY',         'p!#Wj4qis@uRKwkB{2Zy)t=s(oE`5s>W8$Q%LQB !ab4733&&/?1 ]&]$RU5sz</' );
define( 'SECURE_AUTH_KEY',  'ETS_H(qED-TW(2-RQ2 -Rqf_HW)[`E5$<kRwvz:WLB!7`TiP@4/U]=#CN;YihZb7' );
define( 'LOGGED_IN_KEY',    ':~6_,Qf<#T>tz&E_jrL@jht7PKtgMi@86^|u#EcCl2hq_ASX%Y3tXY;YD61i]i{/' );
define( 'NONCE_KEY',        '.LtBL,-~y6Iq|8uQh0B{M(Nk?[4/N(.SaoI9-]f^/8#TGt!zW#HRuLK:6io!nGAK' );
define( 'AUTH_SALT',        'xao5&8e)ca;r$(-JULI>XNf;7&Gk+hX5gx={1B(Qj;J=?xn6oA7j,2zx4}h5fr|H' );
define( 'SECURE_AUTH_SALT', '5.T{zllOj>h8u+f$DF4S%:W+Bl:/?QJ9g@(-0j*?|{Yz;6tS*kv->G-v71:[0Qy6' );
define( 'LOGGED_IN_SALT',   'FEwlRc)NgH<TkZSehk*=9_GspBzn^6IXIXz4oivQ#`4IeZ((Qs+sj^olLnKoK%$8' );
define( 'NONCE_SALT',       ' W~4[:?bf?kGb+yJ9Vkl<[BG4ovsP@,ztU$paQypraB%Szf6WBq0Res5!1?s`0e3' );

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
