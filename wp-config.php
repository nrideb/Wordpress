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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3FK(|-D,bkokS[?L!siTm2.zx@UMd9pAFHQrwXC.o4N$|%A(~{j%Yk]TU2z8DZy*' );
define( 'SECURE_AUTH_KEY',  'NuNXAPp>GSR_ xO|)i@N`3]5Tuj3Vy7d2sy5mU?a.-Ua.%PNPtRN{rw|s>t%BIWz' );
define( 'LOGGED_IN_KEY',    'T_w)uLJY/VI`ftQ&}Gyypt;&+]N^b+j#Sz0M? RT=_}D`.e5td8?6us()v372Q:e' );
define( 'NONCE_KEY',        '[mI+;I%F/:f:Sq5EVA`hI.a8ub(zP$e:bY;kK+o#hn-KBh.6>pjr;0k9:T.a+,|,' );
define( 'AUTH_SALT',        '(y xw~%n]^nvf*_i0:#F&JoCx7maXd]q$&#OYsmmNsV4ACCWYu&n8$gPj tCwrf,' );
define( 'SECURE_AUTH_SALT', '/XPJo* T[uS)4~i=!oagDZZZ0`[Z2y-Hwi|v|nO_rt2E$&hwj%[$-I`fk)VeD9*F' );
define( 'LOGGED_IN_SALT',   '1Y59qw=Zu>UT|t-u>4M8D;NuXKqhe}N7i<hh!KmO>%^Ta#E`LbuV-tE!.1Baclzf' );
define( 'NONCE_SALT',       'Hcp[EJY^D. 48Ste8d5<8C{hY^=vENQO5uslM[g;_zKwQTfs.:77%LZUvcD9TqJM' );

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
define('WP_MEMORY_LIMIT', '256M');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
