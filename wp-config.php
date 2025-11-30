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
define( 'DB_NAME', 'makeupstorebd' );

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
define( 'AUTH_KEY',         'J&bw*!a25&OcT29IO0gT(ojxv=5_pd.ullcN;hF]X R}l$l$3b3:y>8 H1QJIFVB' );
define( 'SECURE_AUTH_KEY',  '/)~?^q 1y>Z^@L.<YnXVu=BizJx~y<8@[f8@GD6FL~$FB(:3CGeX%V<kh$mn,5-M' );
define( 'LOGGED_IN_KEY',    'K*3/zXs}Vty/7mHn;at4_0AgmY6~o@ aD:8obpgH=`f[[EZ@0LPeFV6| z-//@Wg' );
define( 'NONCE_KEY',        'rUb4O9bn#0>Lmw`Ii`^=xqn;K=W0AuV|:BSW(yw^~>&@AnW=2-RAz.0t=$Epw)b6' );
define( 'AUTH_SALT',        'W.[sKDTE0+ow={IRxCYOucRFQ=L2gIBTdg*$gz<yJi2gFu~Y<uw+[aw:5) 7R SE' );
define( 'SECURE_AUTH_SALT', '?U)O=HQ*]B1UmOM%(^pB>4Px3+2?.A[lgf[k?gL_Tzy=GkkKk47g2Ya;y@zARMft' );
define( 'LOGGED_IN_SALT',   '6N#m}H+Lw76xZ3du`<Gt1ZqVi_;?vd{K4FW]l!dGY7jWDf>i]P.Ewa:b,Ak1IcE7' );
define( 'NONCE_SALT',       'eo8e2a#T^&Gh_WP+?2X;`HWa%p~g0).T8>HR>q|+/*x;JL3!W14)vsng9pspslj.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'makbd_';

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
