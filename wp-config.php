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
define( 'DB_NAME', 'hcctemple' );

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
define( 'AUTH_KEY',         '(r2Wr!^N]*%`Rf=e]Sl>5qtWuNG*fJczd*f,;t:vr-SKeq3$6)u4=cP/W^F](?J/' );
define( 'SECURE_AUTH_KEY',  '|E`(BB+|JIMA/WGI#v`4AkX(iMPd`oSp!-Vu:!S}i h>M1p3br%(^^5JaV{vmG<T' );
define( 'LOGGED_IN_KEY',    ']5!hZ5boo4{3pnQ-=$Jy)zrVF9GYvM.83na IM~l*o:fi,R{CLq!{y71NU)Tim0Z' );
define( 'NONCE_KEY',        'GSm9;Zg%[%j~FB|y^y8ga5V?.SMg9$8-Ft`XfMixxxoFQ/rsF`PJep d-I#!tgq&' );
define( 'AUTH_SALT',        'P`: |RnPtqO5M$^B(J5! [6Cu)4%z6Mx!7 =%!rA;h8i~O~S/{OY<r,zW1#6}u(o' );
define( 'SECURE_AUTH_SALT', 'T~WFAW5Y?bi-]eklQoKiVmA0C.sI4IhjqGoSm(6IQ&?/vWY=&5+qnjE(iwc]2*n^' );
define( 'LOGGED_IN_SALT',   'M%]0To67?Jene*)t|<zgwRAG)  |wkmJAMQT}5Q g` Ju+s$]|F4FFtR?CKvE#/!' );
define( 'NONCE_SALT',       'sl^>e=^_zT-%Wio ACIkUx-Du8HItRjCEQ;qIla.|d;a9CB[oZ_SHAy%n(-Pd95L' );

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
