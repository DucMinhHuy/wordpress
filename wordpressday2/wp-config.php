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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4R&LhLVZJc1Z3u^pXr<E84mq=feeK;ji];hT==zAB4LCZE/_)h4ucIS]}C,Pije!' );
define( 'SECURE_AUTH_KEY',  'kTQldw]Z>E!1H=6CFUavG*Ad*Yrw1Zw@6>b=RCk>-!$1q#d0Z[[>:lP79FnnW;;V' );
define( 'LOGGED_IN_KEY',    'cx;s$69j#C}Mi1J9xqIlk:UC ZI]wdZk,[[#{7)EJUts7!(%Qy7=^zU05-wP@l!G' );
define( 'NONCE_KEY',        '($)<`;e+Qr`D[5gI0iEPH,*z6^a+~Lh.PK~OL)ecX=ks5E N^uT1gVvs{ROm IZh' );
define( 'AUTH_SALT',        'F5)uH__V8<5[F/`niWgvmvVqnmnq7)66xgj5Ms,*@3bgtr.6h-b2_qy(J,WZ+=Q#' );
define( 'SECURE_AUTH_SALT', 'zbbykA>BV*-&F*y:WF7(RfWhHK6} 6XGuFpgQE6wlLD;!Fkj#xzHi-PS0*a&R&mZ' );
define( 'LOGGED_IN_SALT',   'Ln!lHL=F0P#F5c5{5uzH9l)MyI[*R1Y(RG:xVwms-<+*VGih{m7u7_/@>0`Wsopn' );
define( 'NONCE_SALT',       '7mKnT;nQ!;k GeFfesr@feRGely6/;Dsd,{jzft9_/<FMZdDxa$<x/p(8Ars7Am~' );
define('FS_METHOD','direct');


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

