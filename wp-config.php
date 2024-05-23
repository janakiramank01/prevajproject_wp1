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
define( 'DB_NAME', 'prevajproject' );

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
define( 'AUTH_KEY',         'pvwuP3CA+,Hd=&a~#z}c1%*@.ur,qh+bWtL|D=:eW&?6@m9iNvGp nU?g4lzt|f/' );
define( 'SECURE_AUTH_KEY',  '0bIQ,9pXhReIx$L*CRm3);+vyUa)pVRCFju79+lTPlWsWSWKh/RU@AAcq:W>!!0d' );
define( 'LOGGED_IN_KEY',    ' (!MpA0tmeJ}c0#pHWzy0lZI1c[<#B_c%RKi;5DzN?D15K_ERMB7N5a(A)=/`JXb' );
define( 'NONCE_KEY',        'U,tg</k{22~YoC`$+<`$:b`q9R`_+KM_El*Zict<V^ dB|>*r5A~^l.=<6,VFgio' );
define( 'AUTH_SALT',        '5KP4?`n!H1QVJ:=_[O%Y*.{k.BoQC!,|zxY;pq5G)y?`aa!GHE;t AkTVzEJl`-D' );
define( 'SECURE_AUTH_SALT', '8BebYlV|r6>ENeC%$fKqmd`Y3)uOX:^{Uk{px,sj oo H=~jK<wfa3SkDL%<o `7' );
define( 'LOGGED_IN_SALT',   '~&l8v,ZmkEQfye,bd*8O4<|@p[01H!`dW=_d]h,sKX6l#>7o`f5[Y@<>P1p0--3U' );
define( 'NONCE_SALT',       '[2{N?>48_f;4nGGX2;#-~w?Tg3may&dF+6Qtb#Q<:LF9hetA}2G=xX(#]$)>[yNL' );

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
