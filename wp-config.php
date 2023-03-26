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
define( 'DB_NAME', 'wptest02' );

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
define( 'AUTH_KEY',         'B>xGi>sMohuVqe,k..VTaC<vR$C6JnHe{ZCSisx-.V23b`f$z9Q5F?pi$ZG9rB+K' );
define( 'SECURE_AUTH_KEY',  'NEvB9]&w.:0;d`t%;Aab~43|blCw%}84uGg2VxR=;N|f-n[T_j:dJC{#l~@hd_3q' );
define( 'LOGGED_IN_KEY',    'rEdZ:fm]IUzo7]V&c-{bo05K2osuL2L#0_ ./}_;y:#<qY2B?Hb2b$h%O#i-2tLa' );
define( 'NONCE_KEY',        'S0k=,YI}St?C{aO2Op=tyu=S%HYM7M}`Bt>HJkj3&*0hXO6e2,z70&goRqvMZ:D;' );
define( 'AUTH_SALT',        'u}(eIws;x50GL{QN$17YBkLD)WzFtdLSC^_tk|7I|]$.5D]v6$,4%R[wW)M!dtSm' );
define( 'SECURE_AUTH_SALT', '4{LOKYFeKznrM{{H!>&s<A`*3%_!hhqvO*J02,,<[>J~a!+JZwm>Jp93aYH1v.7Y' );
define( 'LOGGED_IN_SALT',   '55~dc~Q0DlRopSBp1jhM,Aora/y8w`n6oFq&aU8|>fTzOygxsy*`3?giG])ZkJ=?' );
define( 'NONCE_SALT',       '(dfou|$BfAtkHRI=K-l=Dc:4,GX)5[aNA@MMRZaRWE|n2T]!+G@vk2f0= JxD~V!' );

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
