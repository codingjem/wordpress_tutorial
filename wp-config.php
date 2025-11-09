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
define( 'DB_NAME', 'wordpress_tutorial' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'yk!qM_Buy]vPpZD>>iDL+OV<ZRG>4}~4gb+^-Sr|ugqD==xJ.(V5u{WeDl)!G1Vg' );
define( 'SECURE_AUTH_KEY',  '(L*iJ8;$q ii+X<s{*t OS$wV6+uJmJ3Y&PQZgZW+KD*Oe86{PC-3Y/2R6) izJ(' );
define( 'LOGGED_IN_KEY',    'q@OIvdmN%{W?=k|&B~# g(w,->@<5<8ffX|^Fk)yn <=1?}kdB90s:_XlT.Xb>NS' );
define( 'NONCE_KEY',        'X i c!YTXq+^rAq`):$Y(<0rI|b@73>Br<$)l~pxKd6z=l^dB.4@y7@MY&MjKP I' );
define( 'AUTH_SALT',        '=-u)/=R;>Vfcln-`>o3|Gb+@;{0s!/x)P-Q2(2R<i[-wRR)wXXtl1zuMz_%#@8HZ' );
define( 'SECURE_AUTH_SALT', 'h4I3G#)xWX[,)|L:O;2h19vj+PjL5F>WONGJd3AYm~8zF+qfjly{A*ruzBR*bViV' );
define( 'LOGGED_IN_SALT',   '-Kg@@W|;`4owQZ%o4oJmz}{SXo@Fn>;zrK%51Gej(#jAu5f]rC]8mp+`jV^6Jm]`' );
define( 'NONCE_SALT',       '&Uo}hXBXj|9CUzTY_+:rGocYah`;wL/{().yR@siBeI&.f`Biq5^u!U/&A)o!ja>' );

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
