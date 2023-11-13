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
define( 'DB_NAME', 'multisite' );

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

/* Multisite */ 
define( 'WP_ALLOW_MULTISITE', true );

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
define( 'AUTH_KEY',         'J4IZzgO2(?,_p Y$l)iJ=n29k E>8##Df)C{+=xnw-(Mwlg|hO5kkt0=:k7SnT()' );
define( 'SECURE_AUTH_KEY',  'EgA!X&lrks+;(x<r}w>9[ #87CHc3]0C[-xd%D=iqNMXOuWz?T$]%T;rl4i;o{q5' );
define( 'LOGGED_IN_KEY',    '4T/O`X/J_qo-k]%0HGy>U5<bsHC&@q65-88k-Tz-&cMDb_jThBqs_BuIhUzR!# e' );
define( 'NONCE_KEY',        ':Q1Z7/uK3hEGwfmA;b?EQrFK3a?(6v&LhVBb0-Gd21[d&5lG;]0E&iN438+j1qG}' );
define( 'AUTH_SALT',        '?W4?{l>75_m6rWwb~;HK:Q(Z.XG5UTR-EUr)rc^0+8%/zfEx6>LjiAQ?0zeWE@8a' );
define( 'SECURE_AUTH_SALT', '<ot*Ph!no*,0u7~n9S+]Xq_J#M*OpSKP f2lC2MzE,g.iST]g%Q,hO8&HgEfti^R' );
define( 'LOGGED_IN_SALT',   'rI>/*/W;NR}.23#>zR]M]vGh0Pt53PW[5H@vg;4(T%D/X4`.%>luf6DpDEya,qnb' );
define( 'NONCE_SALT',       'ruMYU5rW{GtaeIUFZ$.q//S:bUY=a;EhxSAeq?^Gj/vu+dXMq{<fTnQrc#Oh2F-P' );

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


define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/multisite/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
