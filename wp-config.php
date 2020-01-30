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
define( 'DB_NAME', 'another' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ih&V+tBIWD6ZOyHZ {.jjfE$+Mu87:zrKWSLwkRKtqm,Wi8Zd(3ubigTAytOkNF@' );
define( 'SECURE_AUTH_KEY',  'P2a,,?6?P=ft;*Wv}NCHc-jT4Vc.JXo:NI<F9qP.W-qnQI/WBbV7v|qLw3G,[L^8' );
define( 'LOGGED_IN_KEY',    'vHg &5jA;Ob;[kVwzS$`E;k3?=iY@wW|Nel}TWzdAIM:H{]g|.8Yh9!p>wLS>r/_' );
define( 'NONCE_KEY',        '#^@9AfIs4wLir764Y$I)aJ,Io.uhu.O5Ep`L7BgIx[{F45*7[0v8t.]*R_5_f`lS' );
define( 'AUTH_SALT',        ' -Nn+5T|; .3MIuUakV7V.tbE$n^Kt7j$3za|vu2q?m*)<YkB@Nd#%I@VM>jHc!S' );
define( 'SECURE_AUTH_SALT', '@YyRJ2{wu>Fxdp*KTGez[3u&X/XwUz`P^kS{uJ=7_:YksL2U14I=&y7{Q/gOfIk_' );
define( 'LOGGED_IN_SALT',   'dAIT[+KTp;j:cHG|v O.7%!{vk 0b:CnX$]SK#!;]Krtm{`&n;~C<4+YTlTI6 )F' );
define( 'NONCE_SALT',       'L[p6W/KNx?[wO3}Aat_[S;U2}^1AFxJI,]`UBC*<S&`!{a_ b}Mb1F>[}S?}V:x&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
