<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'catalog' );

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
define( 'AUTH_KEY',         'O,.IPA$F~v8j({-lr%nUFCu]D6IH+cAz39bBqBdNI74aK&QjME5t+t#66(;ip*%a' );
define( 'SECURE_AUTH_KEY',  'SI-9^PT}H})R92WGv~<fe5~=nCC[B`5/V3EkvyrCtgz[orO3Tz$X6F_PUx~xFK[&' );
define( 'LOGGED_IN_KEY',    'y.]aDT!X2QpU|<x5GX|xj;Km)kCxmiKE2S26~2FzVCd%iq^~k*|3TXT&bSjO~u%R' );
define( 'NONCE_KEY',        'zW!x<}ly$34Y-qi}cs}/mwTOK}=>x?UDISX.+_]tj5Tj~*D`%@IWyuR4vmTY#!2H' );
define( 'AUTH_SALT',        'wC$<k{,jG54xc~?c0[!=|]YN0g0n{UsVmGQ!dXW_FH-v{6grxU$G#]%FQ*0Y9I9-' );
define( 'SECURE_AUTH_SALT', ',K<d;*`N[PzF9Ti{(Cc,!3/k.T|{kRv6b~>o#yAkkB$2RN!6^~o/$)jBOl~H2{|#' );
define( 'LOGGED_IN_SALT',   'ovUt>36+M62[AkLg>PrX)k?~1qPcu|bR{Z;}*8mjZLHB9WGd36z!u^_drh-b5emi' );
define( 'NONCE_SALT',       'L_1=EV17Ja(mH;PT_ TpCDWSU)0`+01n@1rEmxR[~K]:b.FHO3byIS$-+@2_)][K' );

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
