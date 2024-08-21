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
define( 'DB_NAME', 'PortfolioWebsite' );

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
define( 'AUTH_KEY',         'CtZR&Q=]AUchho>sr{<Gv?5c>4aUr8g(VAqg/9H60W#mHKojTeAWO^Gs}lFTO%t2' );
define( 'SECURE_AUTH_KEY',  '0}sUmE?eg@hE(MRH|g-Llgy[HAG&c.g&_8@<y)wnSl6*oIF-&zM>Oe7KY+|2doLa' );
define( 'LOGGED_IN_KEY',    'N6i`,!#~7UsO{*n@K+1RRyzw*%>x5T9^b[!@t@3)?!f7][#T#^P@YWIg  ){.Izf' );
define( 'NONCE_KEY',        'ndiLD1_ZWa;s:i Kv=Xo]G+M@8jEW=!rIG)01d`6pqzOp:ZD/q6tQw7iU6~:% _j' );
define( 'AUTH_SALT',        'ev8Jdi^d%2-H;]sT%149@|+=s<Y@T6bd]4[ZH60#^sJF,:9i(N[-O2*Y.NKm% 9m' );
define( 'SECURE_AUTH_SALT', '8{(66WBtc3<RO>l6PL9R*pTtsrt/.UO6*;YWK,dp&nL>(U^ZOY_#P{#zU MsvYjJ' );
define( 'LOGGED_IN_SALT',   '0MA)G7T#G!HvnX&+iF8ZOW>,)SzOT#{H 8FKBEyi_C5nb(r3d-Va#u&0=KYlvpdU' );
define( 'NONCE_SALT',       'ywWewzQ@SXHQKNEAdi17/n*R(_QDWKyhy[xRyd{9hnR0z3,]aZ%z_RK(ypydL*Qf' );

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
