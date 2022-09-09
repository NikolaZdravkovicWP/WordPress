<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'nzdravkovic_digi' );
/** Database username */
define( 'DB_USER', 'nzdravkovic_digi' );
/** Database password */
define( 'DB_PASSWORD', 'zjpSWE)kh1}Z' );
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
define( 'AUTH_KEY',         'Yu%%M>)Ix!s2;Vrj^R`(:!qwkRhGmDXAy((_J4bjn0Lb-3Qr1}kRxkE(6QO!Q.|Q' );
define( 'SECURE_AUTH_KEY',  '3y03{V%/*Xsr!!KCg@};uN>ikM8I% -dc(#N2BY8TC8p/!p/%I<fo;>1i]X,vk70' );
define( 'LOGGED_IN_KEY',    'KsoJk$c<GFGF$CmFN]9m1rr~ok-f Bpjh`aB;=~6doDD*iPD,+BX3-K~[  `[L{S' );
define( 'NONCE_KEY',        '_nhemRd#Ys}#Li[- @M3xRg?kUsy|(eYxk}#1k]_Y`mqea]Nov1]2?JbqG({r,HE' );
define( 'AUTH_SALT',        '@YGVD<HR`FUL!m=AO]{Y$Hj<@Od+>m&g-g)M&s?{MDd@dmpr.;1lAzFk@;E{H%@$' );
define( 'SECURE_AUTH_SALT', '(J}]6HfO9bJ,IQkJg>tn8#-pl1>bccWDsv!1O]Is7{Ddlm4~CC+@,gz?a~$IIb#?' );
define( 'LOGGED_IN_SALT',   ',g[@VRf:nWPP~t8IRpKk[wS+b.Z^{#Kyo5/)O$.d/8MF9?c|k?cz=qoRm CSZVcO' );
define( 'NONCE_SALT',       'jVV={E]i@nhe3e>p] s2!rVv;%F%qL*pnX<p~(~N76^n:T6t[N{R6ik#L;3 h.ts' );
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