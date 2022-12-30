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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '80BvuiQH0ag3p W/68ByRYRVFaS SP)xp,q.>F~%XX6:yalT:ztxnLUBe|CgH(x{' );
define( 'SECURE_AUTH_KEY',  'l^m7Psb;T}xFu2xZfIE /=k?8l,c9,>s}-hO#5mG|%^|G?9pa]}zF]B(KtD~kK5w' );
define( 'LOGGED_IN_KEY',    '5kAIQS6WEW-eQD9->__!1N]%T01*W$+ x.;:^G?B#j+5LNhtJ *jIEwh.;gpe_3(' );
define( 'NONCE_KEY',        'jZp@>3=/a+^jg|~pg$ODp?<r#jR%5P}Y<2rFH,M2.<zv:>u@9Eg%O]<%Q%k6JZv2' );
define( 'AUTH_SALT',        'sQ2PKpL7*PrR&dXmc#i0;x~@6LdQ(u:<Iy0DuP#%j3A<Z&HMM3-IO R$:}+-Z#?b' );
define( 'SECURE_AUTH_SALT', '&bZG4RN6Y*nY5?r &)lJBR* 1(8s=2Dj+%Gj?Xp+Ug1K/+~JXTdR^vJq$FS#p*RF' );
define( 'LOGGED_IN_SALT',   'h0vRy8m)x[:^yU=NNS;DTOL*TW^Oc=h67WC/;2L|!Pe)RZ,)^^q+(Z@W`1lOW A]' );
define( 'NONCE_SALT',       ' eKH[Hi}DLu}Qc#a-*hx}-U7.4Rog&CK`f:],71tgeQx-A})Zug3sZ#sigL6[#~q' );

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
