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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'KXbClUIi](|J=lvX%,G @Vq6AZ~2^6?hr]tOG_BjytAwx+$Li&8aX@62@l_t5JL[' );
define( 'SECURE_AUTH_KEY',  'KXPuhd;)*9pbeRjbP+foN8`8{!`_cEn3ta?N~mlDii,:M@34:JCvE;rTJ}eO)5CL' );
define( 'LOGGED_IN_KEY',    'w-5u(G=pI|LrUI#AJXPHKDgm@emO$MT:Wd@9J9]12T!yn9IUf@<M}>Df$7uN!LW.' );
define( 'NONCE_KEY',        '<5C+C,.*;=?PQm!B- EQD,FVGe`GmI86p|TYQ:22b{2~/pxUcE^bsl*=vSGBRn6m' );
define( 'AUTH_SALT',        'Md-*HSk!DTg78}=@63weQ+*.J`Lq}npk`=aqbtS}YberLV>FGx0vLr/mKGoK<gn&' );
define( 'SECURE_AUTH_SALT', 'FT5Li-)*<2{lpt(Nt`|MiH,C/6BUqzOUmWO}#LP2Vf~T:Iqf#Bfdi<~f^9xg5MT@' );
define( 'LOGGED_IN_SALT',   '0lG8Ofw9sKhx8Xm9)3,`_9op7]e@B1mia>(BjSe#Rn6*&<=]|130|UbZDkxX`}vV' );
define( 'NONCE_SALT',       'Yd11#AbX)Wv;T|r29(CM@Vv9ZE$D@2D0REIL9&d/gQa!:c1=3QJ.H|z`Nt?;u=#Y' );

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
