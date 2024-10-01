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
define( 'DB_NAME', 'wp_assignment' );

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
define( 'AUTH_KEY',         'Rh,Z(i>],*!qDiwx~0X)AC}kQR 3R{1/c|u Vc??_)V%| L[XIUCSa4+`)*|ITxV' );
define( 'SECURE_AUTH_KEY',  't}p$[MSAWn#D!P{i!]Q:^nT@_z%)[!!h0?Mx_.Eas(qd444Nf-j2OV3ArP4dx*O[' );
define( 'LOGGED_IN_KEY',    ') ^366dRBFP]/}1j&<lMlJrjc&8u;M%RbQPBVw@W(l1q?zmKGE5}=mzQe,&8(u)W' );
define( 'NONCE_KEY',        's9{VmZarDgF[bVokZC|j,JO7-;Kgdna3BaE(B3$DoUD]xz(Gh-aFELF{UZejXnY`' );
define( 'AUTH_SALT',        '}Bz62$~G%n/ ,S!h@zEF K^`7E;j^xkj?.aKWMmfN4fxd<(:cKUcswabHb.Y+}E9' );
define( 'SECURE_AUTH_SALT', ';D#ZDP,tt!J~S/%{+w}l,:562]/K#ki;vZj+)YDBp$M,i P#47*4oK06;E50!_Oz' );
define( 'LOGGED_IN_SALT',   'Dq(sx*Yz|0EJgur ),i,![x-6Gy50XLH$|GXu;s-e]vET$8*WsjAu|/_3DS7j*UP' );
define( 'NONCE_SALT',       'leHhcYc*M&AcoLX$NA_I&?C.^,3HL1<>e#S[|+Q7A2cckVpK21D-`-K~ds-6[>tB' );

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
