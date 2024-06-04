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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newproject' );

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
define( 'AUTH_KEY',         'I)QZA=/,QF:]a@8-Ff9BH(1I`b0D)V}w`v_ObHs1f:_wQS7$qu>oOm9DG)7uqOp^' );
define( 'SECURE_AUTH_KEY',  'bk6>{CD~qG[(_uWP^*70[lrShEDi88L&h8yaRP~?D4&0Qy{OMQBsXFF_VUV):2Ht' );
define( 'LOGGED_IN_KEY',    '0y6BG)XJvd..@Hy0$ki/#t1w2m%V,*(!6%Ff?Z.g|)<]B`_2pvm,79qqD8/%7P$Q' );
define( 'NONCE_KEY',        'jO{v[B)cTtYu5oBD.c7d7l)=9O*d5.q+NZ[SGwjn~:?|%)?L4DTqc<Rfg3}i.Xf ' );
define( 'AUTH_SALT',        '>$rVyVk Bd5miBl-adf6;2pdbUd7Xz3gFu|?f)Hv5*q3SJ49;Lm<#9c6IVtaefF4' );
define( 'SECURE_AUTH_SALT', 'lvdY4L#po2GDh<,8tSa-UgU$_p~X~tGS=|88)T_G3[kyL!}fN!G/v%82&tN@dvQ.' );
define( 'LOGGED_IN_SALT',   'h#+#N#a%vBl.zKSzO>t$_s1kE1%koA?nL^X#21xN r=J*KWLyU3*|F>sGodatrd}' );
define( 'NONCE_SALT',       'U<cXh^y<g[AX+G@#Vo9DDdQU#>PS/)2NVoVYicUO:| {r@P ii(@9(K,C,U#.}oI' );

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
