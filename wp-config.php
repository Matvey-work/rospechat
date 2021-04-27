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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rospechat' );

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
define( 'AUTH_KEY',         '5DGRq/HGcJvf37Xzi_>Ub4*EbpzqWHow2b4CQa`8=xdU:]VTES<sNKQk=74%[.+9' );
define( 'SECURE_AUTH_KEY',  '1;6t_8q1t0q~;(|(pm1BA smnWrW@a?MbG/ql_Vt-Bkg$FEp5_w0BO4Tx8c<}2*U' );
define( 'LOGGED_IN_KEY',    'RR#5!D5Y9EH]e{%yb>t8VA.Je*t6o-:wF3>2HVpg^(j6Ay~:_1`dJK@UHqru?>@7' );
define( 'NONCE_KEY',        '$amxM.!g7jh{/}uPdb=Cejl~z#L6|vd1YIrA36IUR}hi|nty_H`sSgA6A^+;8(_g' );
define( 'AUTH_SALT',        ',00RyHd:LWjmx(xR>PFWM~w_fFw2Y%ba9Nx%3$hHSXs]{E Q8yY]qceC/3RXV*im' );
define( 'SECURE_AUTH_SALT', 'H#Tm.w~0cHW)QxYs0lax,+*<#O/ar|[$wZXGCb#]}75vxCf`Rwty-f,n>=^.j~Yg' );
define( 'LOGGED_IN_SALT',   'B&hb)x%GCs@7G95h/aQjxGCfiT@Z{4sJe#2m:*n7s,V1VPbFRnr()ow<4j^GAr>K' );
define( 'NONCE_SALT',       ',a,v&>=tr5Ipizk}2]sE2!xK5=l@G8im&N.!^(A{r:W~ku0r>m]3rXUIA=[GpQ+>' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
