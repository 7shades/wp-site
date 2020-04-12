<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shades-dp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e5v=G!q`Mr-ejF][[)4*Vbh(sD7l=6AL@_#@%s{h}M0e4Xb[s<1Rme&#</0UcP5c' );
define( 'SECURE_AUTH_KEY',  'GaVWA?%;QGNJsM1CJvA0jP$MDv9Q=WdU^XJo~Ml?=h^RLqBKi?BhWrA%&w:Vl`bn' );
define( 'LOGGED_IN_KEY',    '2Wxf#5Vf8[^GYn&f~~8}@%E]N|hx?zt`b$h-=aP}Ko0jU6#yCNTUw7}soIy0R5z#' );
define( 'NONCE_KEY',        'JF_*NjjQk/#I=}!3U#QHiE_$H5N{%r*XjhtuHE7EGcMeQ42K]|w3L>Hb:tppqs>>' );
define( 'AUTH_SALT',        '&/HG$4<9<^|jFIxSyW66W3@t$~HIO+zsx,tYhQ*|0E?vKzQj8aqgP^>)*MOd+4=L' );
define( 'SECURE_AUTH_SALT', '?~,1EbaSY`2HD$HPT2upKM(]=&0[(TJEt:-sRh&]wlVS+RbD87`TB~:)Q0?9cRQ#' );
define( 'LOGGED_IN_SALT',   'P[pu/p7<X5?b~n@;yz,zU78J5 [w?@]l&`0#;;%~<^-eX0g0LUbSQ|JOh?2T4qhk' );
define( 'NONCE_SALT',       'c.$OO #HdH;!K|}0r}$hM,rZd,DCEqi)VZn+>h_F|xahpZ*LKKATzsdg+b9iLO6p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ss_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
