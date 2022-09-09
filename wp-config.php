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
define( 'DB_NAME', 'nzdravkovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'nzdravkovic_trpkovic' );

/** Database password */
define( 'DB_PASSWORD', 'ZB^@OxY!1l(F' );

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
define( 'AUTH_KEY',         '<#>:kmot2$Xu-q9oJL/T~U6w:Qo2Z>.,`ekJL<u4=T!w;qFI^.@~N1!(ax{S+~&p' );
define( 'SECURE_AUTH_KEY',  'Z{Bp_AA?|OTd qxo)}rPk.JX0o#zA.]Vs(A!,U>/i9b3EoOJBN[^#:@11@CPX<]H' );
define( 'LOGGED_IN_KEY',    'Pp4^>RYy#w=AYnxvJ({L)4IShsS[ONB}#=bB.EyX1B2jK[Uc_~`@_}E*eg*D&EkU' );
define( 'NONCE_KEY',        '=$Hkc9f4_9;z~0bh.!Ca8akSt8yB@d@01p0^tJ+p{cGoAF<Ro~D}ou^#)~uECW2E' );
define( 'AUTH_SALT',        'CCM-<-}GfetV^@=Z%,%dWS7f2RGgQ3e|uU#hfU+GRqa-_&6r*];{8UmMOimb53_W' );
define( 'SECURE_AUTH_SALT', 'Eixq2$M7XR>ty ;x9|yiNCN ,k*maBiN&$~s9j*dY@1(~v{rYU=!x-}aD|OvrNED' );
define( 'LOGGED_IN_SALT',   'i2~4xB9{~u3}Q -^3{Urk)yCm(}Z&wN!_>T] `!mCXtxz.AF ISit} $_aSj_gmr' );
define( 'NONCE_SALT',       '3`v;&_&X$+}C,N/W{I[waaVI3A[Klg),fVsoQvbB[:DY|_CZrL}.3fd;pr u`k/~' );

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
