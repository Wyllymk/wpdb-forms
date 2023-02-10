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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'BKFzla4o}*K^Z*qUmH+Iasq[>0_W5TnO&9EV)RG]Jj99_(QO*VRe65.Y<Pw8)!hK' );
define( 'SECURE_AUTH_KEY',  'K_5RA~BkH1[Kg*9q|qFLk@o9 M!%&`L+;h|Q:Xp7GyhLP0+CtrfNH_cyz?xf<|`[' );
define( 'LOGGED_IN_KEY',    'hoiSTst7l!|2>4WW<[1ic4M.pTK:AsD|O[k2yRI#?d`kr_{V e&uG0i+wA<]HaI6' );
define( 'NONCE_KEY',        '<f9xBi&4:3*Dh9#as`=R$mc/[3YEW0HI-#t>N1@R8kF(f)G4 i:9IB/AXQ@z>0%2' );
define( 'AUTH_SALT',        '2%1!1`K[BKDh(1F)3MxFdJe3/NpInMpX4~vR,R5|)|PcZ+Q0VT|DP-p,nH<$g{AY' );
define( 'SECURE_AUTH_SALT', 'dV]@uaz+c> N6THl~[1)yCX`!xDXJ9;MW`q*Na&EHdyJFb;kn?TXG0P&uI|Rb[w=' );
define( 'LOGGED_IN_SALT',   '9*6(2R)6VkkG2,:ctSIAU;x+S,1,Muq+dv*Cg+0-8VkKJxKS9C@dQ>HI6gcC(T+=' );
define( 'NONCE_SALT',       'Ub8L4U*mzdqrYD,dW3vqRX9x8A =! (N}DI0l>`}h#%<M;BG?ju5}Zp*-u(Nl(,J' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
