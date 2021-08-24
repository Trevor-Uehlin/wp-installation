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
define( 'DB_NAME', 'company' );

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
define( 'AUTH_KEY',         'y}g@8,#?GFophd@b*KUg!`EP9E!H=t~IuP2?9=+Ih%I8+k.?=z21| CdxwN p~8d' );
define( 'SECURE_AUTH_KEY',  '*)rSKk1+K%|}vcf#>byYYJg5@P.[xB=P9wJU2r&mJdhW&[7n,AM2A`T1omSkj`M#' );
define( 'LOGGED_IN_KEY',    'Ek{Y]egR]F{9#EXI<Pt`o]r02AQU*3W+x4UNiLd,)4F|bC,%$HP~oed)JV1X~.p,' );
define( 'NONCE_KEY',        '?>N3,0[ -qfK8Hz7eesp1XH2wPLOS_DQvRTUYo`tgsrn^:f ;ru9T~5J0@rD%%I3' );
define( 'AUTH_SALT',        '20e>]}R `P]c.{n^~cjvk`j6p?n).r[#:&6M!Mr5586]p-zyuf*`|B=`r:;kK4,2' );
define( 'SECURE_AUTH_SALT', 'A(3sJ!d6&eFDr]@pom,bl&=W%QB(0(`m <7Xkgm`bq{%-gOA}{5%/K+8*;nCg_8l' );
define( 'LOGGED_IN_SALT',   'opm%JiRu<Hzmc5j1hVIa?-2?8J4S9O{,mJ6${R.RFg[<W(#XwojAt5KmI5>i 5ol' );
define( 'NONCE_SALT',       ':z#5>%hxA-1_}Y7dZ)+_xP(Om[m_Vt_m[<|D.AoW;;x~uT0h3QEMHZVLvDdKy2p6' );

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
