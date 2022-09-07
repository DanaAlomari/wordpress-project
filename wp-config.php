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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Project' );

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
define( 'AUTH_KEY',         '[VW+jrkELP7V[+97E?z:59=kPb>k>v]jyzFq~X.T>noA:`#Us,PG9bMiKdN88.5s' );
define( 'SECURE_AUTH_KEY',  'd&PvrI~AxA]ceF48AX<wmxO.L~whG_fT/sj+ ~00q;^xBGvZ<Q[Xbp%2W@JC*`Iq' );
define( 'LOGGED_IN_KEY',    'B~`o|Qb;MS*eeQ%pKNlul]:JR`/{ttD.E4W~D#Z3Ri)2Y{$i`Kb0oEpDL6m3vSev' );
define( 'NONCE_KEY',        '8Q#X=c 3uW6}2b89/qH3|7%H=E-/1wM7r=tr(Gf)nWA4]<Ca6dRH1w)(w#NqnIl]' );
define( 'AUTH_SALT',        'HNx+^F~=h:1p+-[ )GM+W1 U$ROmbBD};:.DVW4z`J2l`/s!z^{5P=sdD<~w5w7_' );
define( 'SECURE_AUTH_SALT', 'gJc;aG]NBuAJD0dh+b^7MD~RBM{RU7.bgwm&t3#O;(SZVB|GLtn-Xv:Ir,{4<)tq' );
define( 'LOGGED_IN_SALT',   'qh;z:9I]Kl=#-CL=_``kFUVm+TIe{)Z!<&&g.*6w}Xu,N|~QP>}g#P/-W{R1d[*}' );
define( 'NONCE_SALT',       ',k`2gu1U?~U{f-WDl^0a}JCJi+%DO!&gyCUQf$V.8{m5Gx{];D:YDvf>c10INU!<' );

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
