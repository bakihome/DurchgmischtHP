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
define( 'AUTH_KEY',         '+k`M^{q-j/zMg<+N~>x*/yho]|{yLl}qC7R{9)/ G^^kA`|&;9G69*F9zU?CYqDX' );
define( 'SECURE_AUTH_KEY',  '@h69w)+NIyN6Q]H!hNw0^>g4&I-Jih,#Pi!HgkM?<ly)H;>d.V>S6^9qhHmd`5OL' );
define( 'LOGGED_IN_KEY',    'HU4BE(6JQX!K,*{6nF#^~r8t[l<dnGHVsA :S))Fdna+D,okwj/:at;p2/RD[#]8' );
define( 'NONCE_KEY',        'JkzD)aC^.]_HfJyJLLI^8ZYa^y0~k[2bff#1RK=P_ZeCWu^=1up^kj2-me-^YjZn' );
define( 'AUTH_SALT',        'fl)V6xO&rS %#Id$+Qyzf4XrR+g;wM_z.f!wFq?%[t*tO~PvQ@C>(ghl<n`@G~VM' );
define( 'SECURE_AUTH_SALT', '@mUjJtJ~(3Fy,}eNXN0i)#2u%&(o;@^/v}zy_a<?YL*&}E)TfIcK@LGk0EM3op@7' );
define( 'LOGGED_IN_SALT',   'E!*)f3._fOcq7 ]8.[GKb[emmeR;`#.85B$hdc(Pp[_>{Z.C7,l5u}+<W*Fji2dd' );
define( 'NONCE_SALT',       '&bdTC8 xX{Zpg!3zr]X:SXQ?p;|OOn8*nUa(yB(:=fu[Q<>JTDp>?N1$*`JR$.+h' );

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
