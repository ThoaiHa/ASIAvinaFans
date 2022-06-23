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
define( 'DB_NAME', 'thoaiha' );

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
define( 'AUTH_KEY',         'nF;]WckMQf{{;5af8eo[9le8Znx9Xa>.%dur4n($FXozKWVstS/]bbwsvX1V?3z:' );
define( 'SECURE_AUTH_KEY',  'utpc[N.lv3T>/v-XS=.vxsPEjfyU{ }4O#CBqp0XH[Z[#mW7WZ=C.8Enic9A5v&y' );
define( 'LOGGED_IN_KEY',    '0bP>~Y TD(n4P{7MG2y+!dWV+`6r?!*~_$<Y*Z.;9%J`C2;%DY$bRkfxD:P?p}_u' );
define( 'NONCE_KEY',        '_938$(32i)W-dnUiyRZ:#RuK&?ToC=}Wxw3Qiatc<N+y~*&vHVO1PO+)W$c$Gm-9' );
define( 'AUTH_SALT',        'EB2W01WcD&L850+fFd(L7n>t@G7tw5PCsNM$93MTQL?(OE2SXjp{4huyKSnvU,T>' );
define( 'SECURE_AUTH_SALT', '@H.zZeC_;=_7xLtY.!,,G,)F<$in)*)jP4~Y?q[5UU,M|ahPN%QI/d,E/-w>z9<|' );
define( 'LOGGED_IN_SALT',   '9]-*+@doB9iUta<8C~<3+qZJAx[G{CL;BIR7WusjO2X33@#k9/4B)O6G_jMg<KAH' );
define( 'NONCE_SALT',       '85lQ4>-%z@/5`g3d:suS[dC+K$z`h*F)gmz[A+_tCj4BL0g(Z1KJZ8pQz~xf!,BT' );

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
