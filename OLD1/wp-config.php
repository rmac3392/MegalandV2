<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u484898470_d5KBN' );

/** Database username */
define( 'DB_USER', 'u484898470_XMt2f' );

/** Database password */
define( 'DB_PASSWORD', 'TOyl5gYzQE' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z~j<%5f32Q-#*UAnk[I$uvTXHAa>AxTk}aiD!r[;fMRR2GD=c;d&|cpOCS-8p=WM' );
define( 'SECURE_AUTH_KEY',   'f+?u+,&NGHa^OJ76ec1Ce1(RIi5ED<XPH2m.+ok$1gWmjWe${C=(vFz`)4uJPw[;' );
define( 'LOGGED_IN_KEY',     '$1ck+{k15+pE[!uaV!]u2XPNOJ^[{n=TZ<KDCludjrq,K5Z,L4m`kY@s*A8/4p<r' );
define( 'NONCE_KEY',         'MXzbWrctepGTYa~Gta|M(drt;h2%*j=Jb|;7z`{lb.o<uqO$c)/bo|! 7cJ+{ghk' );
define( 'AUTH_SALT',         'o4-#ZE=C)%:Qb=O5~t`%*v,kLGHU(kzA?aw#s:dO,)07Taq(o!X>;6 rD:Z4b<Q^' );
define( 'SECURE_AUTH_SALT',  'r!jSa#y@%/R|?U**ev;+nc|R=3R4yW~cde%^l(Q(orPbyj.=d]iBCxg`LH%+C`<2' );
define( 'LOGGED_IN_SALT',    'R#jpd`#{=qUd]`v&N%/C 5R!;$vdpp3<e^L#{W!c%!d/Z>@H@V1|1^q;%l8VT88N' );
define( 'NONCE_SALT',        '[]6xL(c){at7s/Bh.H3qPX*B]HnFnBPuFJi`7Nn22ogr^EZ:0TXyn1xX)sOKw,)k' );
define( 'WP_CACHE_KEY_SALT', 'R<[ttYQfYd?^Y&Ky1&l5zyENetFC&}N||=El6A_/6{z=r8[he,nSEfe*4+?(>3;{' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
