<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'nzdravkovic_portfolio' );
/** Database username */
define( 'DB_USER', 'nzdravkovic_portfolio' );
/** Database password */
define( 'DB_PASSWORD', 'VHbGWip,5Gk)' );
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
define( 'AUTH_KEY',         '. -Rx2DzU<HkZs4ASe_usArg<*KxbTEu*vXG T.IJEa5B:S?./5OCA.nX5HOHl]?' );
define( 'SECURE_AUTH_KEY',  '0E7`pl`t)T96l63IVjaF`T7yACS_]WzC{A*(,^)L+RjT%5$c ,CKb@^V{+zLPraW' );
define( 'LOGGED_IN_KEY',    'hu~!Ov6QG(%OQ24Tjh %+!DT]jpnK(AA6CAuIwb{uUw_u N24Ng0h-xpHr0o(oB!' );
define( 'NONCE_KEY',        '3KpKob/Z|jb8YWt57@p@a9eUC$${RPUfPMW-cTMqd7t}Y2>2 j^tM;[yMu+to:0(' );
define( 'AUTH_SALT',        '-!|r#^g1Zlvpq}$xwP%cx5HIR]$@-(<DaB{j/Ce-*0-Ui&xO>k!6}#XG:>Xjrj|x' );
define( 'SECURE_AUTH_SALT', '3RF04yM]J,}N+OVTB.G:]bgoh!L*BHxN s?jEvG0U9!:7Y+)(?OSE|)n*Nm20R,}' );
define( 'LOGGED_IN_SALT',   'TYmz%_-?/X p`z,;pLK4?]1,CL_k|Djm/%P66M?8%}ox(QhCEp8d^c^Z&JA#Zw)b' );
define( 'NONCE_SALT',       'H@pp0Y$7JA3J@O+gbX&d+K|JWqn-avn*CPXvBlL.2k0n(e%;2(S6fx${&F?E9jlf' );
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