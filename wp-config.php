<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'nzdravkovic_projekat' );
/** Database username */
define( 'DB_USER', 'nzdravkovic_projekat' );
/** Database password */
define( 'DB_PASSWORD', 'Rsc$G+n0Zg}g' );
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
define( 'AUTH_KEY',         'v%i52b4f1PlNf9/>`1-WG)GOtl4a#wxB#$^;%J1aB]QXl[hRqas|#*ef6Y*E-I)k' );
define( 'SECURE_AUTH_KEY',  '*AYF )H?/p70n-z`${-RcQrzoeI|e<_G2f#0PL]5*Bi,K7%<| :zDKTA|idw{[J5' );
define( 'LOGGED_IN_KEY',    '#[[1_PEGrm{|mP_R8UM;,=!;WMBO>-Hy>z~qc7`[r(grYL(_W`t5LssNm[e8 /.t' );
define( 'NONCE_KEY',        '_zY-Kv1l`pNFwZ%/FZ,Uq9f;r2YDIz=u` 2i++%xAHr1a:[lA K.*&:=*pEz$!:U' );
define( 'AUTH_SALT',        '3sAUHb/8(ad9CPcKQ:74cS~?Zp7;{pX`;O1BM9Qa+DxK&)=K$,A_vY.S85Jp_Iqb' );
define( 'SECURE_AUTH_SALT', 'kI=PC<&H@/ 9|}agn3`Y{|E_XD_F]Lb:Sn)1utXv`<xenQ`i?~~$I-`r}^2#6<4E' );
define( 'LOGGED_IN_SALT',   'b>K~Vkq]KBSt?8wZ}AsE9<CM@Au2qNR vUhn6.i%-<f4B&lbD;Xr>Dx#]D;]*QTS' );
define( 'NONCE_SALT',       'nP*`G$iA}Pf-E6rE;a?VhM[gY5[;;14~N n7C3b#@1jm2jN}&_c%OR:J>OF1LIvH' );
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
define('WP_MEMORY_LIMIT', '128M');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';