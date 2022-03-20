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
define( 'DB_NAME', 'webhakwordpress' );

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
define( 'AUTH_KEY',         '&5:i;D`p:@ !-Kh=0pXKs[YrKB9bz;1S;q;5wTJ1*F$0rp3dp1#J=,95;VI,{>iD' );
define( 'SECURE_AUTH_KEY',  'XZM<~eJm-@zPEM@TTJ/jXKXt2/_E^!?V[Nh}m@L:!+/h ^aJ*|i$H#ZR)bn+7t2D' );
define( 'LOGGED_IN_KEY',    '{::?-A<04#&uw]{eB;X`ih*XpxBkhYhBrWkAW/RFI>ZS%iv}~B7B:?$6j5Jn0am@' );
define( 'NONCE_KEY',        ')5G1|sk;l>b`7ytRRS19LYiq-B(t*vAgb[!(WH3*?i#>0@eP&BVb-;1RF-03QKp.' );
define( 'AUTH_SALT',        '5Y42G,mv.#K8v+$iNm$mqCI:$/l_:<ZTJGS9]/w<-YM<cR4qkT4fxMt6V]7FJrv6' );
define( 'SECURE_AUTH_SALT', 'K:$CHN0K*s?G f@Iq}~{z|Um&kjPD;GfcrII]vY~Zm1I]k(G)``b}fMcZz0x^v(X' );
define( 'LOGGED_IN_SALT',   'UhECG-uc0dONkw!?.Mg|*!Q=|zaCsP*U1l0fdSZKW15U9p]:.Ujk*Oc NdDx=K.D' );
define( 'NONCE_SALT',       '2T9}M@&#N#w,e>Jwz~(7O!%OFE(F,I`[M1zJaDLb-jli`HOr9*&^JcxY22HO-iwa' );

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
