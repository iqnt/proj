<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'saad' );

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
define( 'AUTH_KEY',         'o$Bek^cZr 1Qw%FN{sXZLL]OQz|TEJGoH,B:fmQTXo7u&h>^$ ]`TSjWSP#ur.vs' );
define( 'SECURE_AUTH_KEY',  'Ipn3/R|#;[a}|B*J33IX-ZqQHgv_rXI9wXOP87y^ U?YY9aVKL<GGnh,BH<%%L7r' );
define( 'LOGGED_IN_KEY',    '^/$92ImE+ `ykXq.A_nTytT/.im2ge0a^1V[)H /4Xy~Ne@sYun2exFu^yQaJ4[?' );
define( 'NONCE_KEY',        'rSly*+q1NUl7!yCkdrCKW.0f~eoHZU6N8@>>Rb(uL:u~$nEA4oK&}Di-bueysA^y' );
define( 'AUTH_SALT',        '({wFta@8 s#i9|c3Z]eb3Oe{4G|cisPPuQ+st<o[,;/d-Dz9FJXM1FjO!dTU_3[R' );
define( 'SECURE_AUTH_SALT', 'gr3_7 8M~eekTZF-VS%SR=2E_lZ<A@wC0.<MV:04:iY{T^SSvI#v62`]X9vZA22f' );
define( 'LOGGED_IN_SALT',   '2OL#oH2d#m8(Y.J}fO bhR-QEn {`#ug{sN,#_{y5Z{A*}y?.Is#A,p12(xo}s`(' );
define( 'NONCE_SALT',       '%gEX[NPIbqi&:Y@/ia%SG^)mb2q9},m[DO2Y@$Urqb]Q=B2|k1$bFd($]sWK*nb/' );

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
