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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\brasil\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'brasil' );

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
define( 'AUTH_KEY',         '*ji@u0rJ%c>T!6#CTkQ&ii00C$~_bTDdCpIA{8+)*e{7UFg,3R`B`6VO?;`RMlV@' );
define( 'SECURE_AUTH_KEY',  'LaI@__6o>:JkncePUeM*-bqyNpBOD/cSx.1Oyw{&S2R}6tQXc.@f|gzJ(O1.r{j#' );
define( 'LOGGED_IN_KEY',    '*T-`tqW,kA8piBN};G{Z&VHntp.5A=s:Lt/Cp F(*I<n1lX!h^h:`ggC-o(EP)s{' );
define( 'NONCE_KEY',        'Q.D^,V%>p0F&Zc7$W9N[brp!S=ytyJV`(C`xtlyhW~l2K~sAcH` =*k599(YyI]8' );
define( 'AUTH_SALT',        ' F|>;U.#:%.iqDr]+cpU&j(o cGs>}!Rjb!1bzW?~]0<1nk^$>JM*N;X]1w90IV4' );
define( 'SECURE_AUTH_SALT', 'g/ulGu?1K2W=>f2:=[Nk)&I<AP(r$LzCq7#!G/A=zq)@B[>Ydet8,Qk{/h>z-cr-' );
define( 'LOGGED_IN_SALT',   'EI{*EVgROHF8B?crSrcvJ^1q%;2t1~!d{6^GG@ s&*(29C^Si9&#xD8F}Eo&TUMg' );
define( 'NONCE_SALT',       'Xv*f}c=QloXtMHR{o5l^(T3bX@lS.@V#Yct^5$l/xUU&BHWYYCRjQ6{i],__qY1P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
