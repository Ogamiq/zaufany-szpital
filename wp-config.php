<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'szarlej_szpital' );

/** MySQL database username */
define( 'DB_USER', 'szarlej_szpital' );

/** MySQL database password */
define( 'DB_PASSWORD', '!1982plesK' );

/** MySQL hostname */
define( 'DB_HOST', 'sql5.progreso.pl' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uw#?MJuBELzcuHzoJu4.d9Q$y~<%hS$^{<k>wbn+0ur}borzRkl^sY+?g.Sb7fBT' );
define( 'SECURE_AUTH_KEY',  'SB;/iJTI$n&J.e-RcsV9|,$07N<F+Xks3.|KbO~ki]+HS?kz N?%Is^!#mkS,]3H' );
define( 'LOGGED_IN_KEY',    '>F}EK)+;0A`^It&ulfxK)/+{1ib@V>WRTfz _gI2VRNlj-2P5(U14L2#a[ksz?Z_' );
define( 'NONCE_KEY',        'RV|)OO=Av@O+uP.+-IeqN`iPB3O|}zdOK##}IjeiauKFIdakaORgYrtVZEMso?n7' );
define( 'AUTH_SALT',        'c |#[GFn0tm]B`nJ<bv9X[5=-_PAd&ZofjRZ}Tn^Ti*RRDlj]lxq>MFp }NJZ7QS' );
define( 'SECURE_AUTH_SALT', 'Uho9}^zk}.3he%Q#d<Cg7>=$YKuM$^|C*RC[ZRlnaCWrhA5{P68 /H8e?Y,bGGXe' );
define( 'LOGGED_IN_SALT',   'G$L&@6lTz@>^)e4@wt.(SpgN<)V^wHQG/w@zpxS/,Kf*81N=MQc8v?M;I(gJs0a9' );
define( 'NONCE_SALT',       '~&2|jnvn|s//[s$4*3V>T?W%RcUy^LMl(t5>8uw.7R:A@RVR%AxP5;@sDMG8 k=F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
