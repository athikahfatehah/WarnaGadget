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
define( 'DB_NAME', 'warnagadget' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'TZ>lw/cs+I@ AevRAj^AAg4tc4Nwhv528@,Ta^R#?tV#:!;e}G&.Jh+9DkEi Zhk' );
define( 'SECURE_AUTH_KEY',  '>}ZVp2>Ggm7f~ar.0f>qDy5!o.5,/gFPIKBM1t-|}j1`.y>Y1q/9HON:`O~X^+!U' );
define( 'LOGGED_IN_KEY',    '2{*jBBh?v&2o$mB$k6@&_hfLBe,?M7:1SScwz#!YncKhn}PI1fgi/7,x5$+MTti<' );
define( 'NONCE_KEY',        '|s<ZlhPvsQ:iTb1&!zbA%6bM]Gk9aqU+HBh,xZG+g=cTcBXD3WO(`NOnjkWjgE)?' );
define( 'AUTH_SALT',        '?qhL`yh-m!#6*N{/9IKqI4s5W7zZh^if/w_!/?l4RvRd|R<J|M2bQ&Vg9/2SO+16' );
define( 'SECURE_AUTH_SALT', 'fPHHH+M~*qz3>=+f4Z6#y}:U61]!K%1-iHRDs)}7R/EUur[Hec:cV3>/qQy;fF$A' );
define( 'LOGGED_IN_SALT',   'Y(d*IH=SUz=BI3nqaGXClvV11yplY(b0nQ`-K]i4~>*PUJM!)LCmggiYXsB h0{q' );
define( 'NONCE_SALT',       'GN 9>n.?Jm1#6}Zasfm+5=u6:LtdZuLU<!%s>c,k`g+|7^0H^J;C)~iqZq_UvG]#' );

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
