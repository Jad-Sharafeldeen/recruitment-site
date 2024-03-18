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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' a=.:r__`:0(jP@Rqt*/T1N!4&{?LCwnVsa~(n1CQ/!(/Z$F%#y|`_e_,yOqq#(h' );
define( 'SECURE_AUTH_KEY',   'v)`vi&^TUk76!/w^!H/Mh~0Ah% n<*R?RZdtU>[/tAD+}K9BDo*V]?8hwhS>3TVJ' );
define( 'LOGGED_IN_KEY',     'Bve-|,aos}FqE&IjRJ,*@3dx}n?M<*g9jhfD+cggCs@BIK0lS}:<vm{<Uag|laj5' );
define( 'NONCE_KEY',         '<rce5(Y1A?@~`ND1&g%f }W3O%~@K/uUjac2+BXe-Hu;wg]l:,JC,UV{%Y.T,n9K' );
define( 'AUTH_SALT',         '5)F/wg:E_-ec,z+V0,uE7qp}5v~Gj9)/7$@iK2 R-RJQL#M+R`.9.D>C9 8_708-' );
define( 'SECURE_AUTH_SALT',  '|>`TqJ62Xy,:v:CNQQl@qf&7LhtJ|H,;]DtHPYD_}JY<{H6>Uv8,05G;j}=2n$ak' );
define( 'LOGGED_IN_SALT',    'u3Gwh2W-*- 1AN6ObP<?9EN)K#nq-D(e4[F,m|!XQtnVie!0DP)ix~I>o%[,WPV^' );
define( 'NONCE_SALT',        ';a+gc?0YEIGWdv,U#XPD~,+`Ev,;W*E=}0pkxkbUd3?rXm#jW<zVdih`vlR=5AGS' );
define( 'WP_CACHE_KEY_SALT', '.6e?WW&Di!`C}9{#j@.^C=RzhBDsB41O.YURga9Xq5n*37]or]}-n{A(H|x+(FXA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
