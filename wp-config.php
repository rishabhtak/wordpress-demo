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
define( 'AUTH_KEY',          '(,r$)4-Et]/oS0~j,^BUlC/SEJfqIS44/]%%M#B&3Jvf97A];I(C&O_,()r>j5nO' );
define( 'SECURE_AUTH_KEY',   'k>a`8+xn<?Wc==g2*NrGK~s_R(q8Cs!#N+_;Z/Y3^:Lff=g9L|v`RoB%gA|!^2w[' );
define( 'LOGGED_IN_KEY',     '@xEGm8kk~V)1&V1/4Ctz73;LlM+cskS$,KVrj|8.TqtqM3`1E:28XBVMeb%4RtJQ' );
define( 'NONCE_KEY',         'Fe10`Aeb+/]nc=B1EhbNHEcd%GT6~/u,$9 GBg`&Dyg%nhiBAK9Y;>)e(.Pu2%=-' );
define( 'AUTH_SALT',         '.vEr_6vHY6p&pK}}wwFtRCSQKCw#Jr7zC2-V@d7jniNdj)M!<bmi$AD*lM1_Yip+' );
define( 'SECURE_AUTH_SALT',  '/>5rCa|y})QB:E1v(t5%51qH9_{R$.[Vlv#(!TUi42$jq%w>$+@(ShwogNB6d & ' );
define( 'LOGGED_IN_SALT',    'Gip/hYcv6j<t5=&`B}}@y+x_Jc0%iTW{(}fd+X.0Y5i6zv&!J<>b&m^wr+(-?_]~' );
define( 'NONCE_SALT',        'P8c,zr;[a<@N41WKmG8ED{rdgKQ_S*!a`x<a@BvQC-6`#_QOXu&,(`&{GKK`o&cJ' );
define( 'WP_CACHE_KEY_SALT', 'b9viBX7He%GKb$J95a1fw8O0nQs 9_g[PG_jJ;qi?D29,E7KXDqzrvY~&|[WG3V9' );


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
