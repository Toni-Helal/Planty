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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '2^]ocxi*lJj0WxO/:U.u(+fLcU3mi+9 ?+R(fa]{zAXXS,`eq9=NJ>6HMV[S80WH' );
define( 'SECURE_AUTH_KEY',   'G?c[<YNcAkdomOoRgXoL p:kqH$,>yTf(Nj^zWuY2lLAq5}wu3<GnH6F_Q$P4E!_' );
define( 'LOGGED_IN_KEY',     'T(ni5W/|8[licuqM&|YdK22TN7Er_5^@?@W_[7eu(@%~c_Md4Y-U[2mozIRyY?&;' );
define( 'NONCE_KEY',         '<}>w6VP*uG1e%szIl_/!%M}S|B7@N> upl)Eq5=x5&%sidIU):nFszxO,nKK&!ht' );
define( 'AUTH_SALT',         '25[P7UtNG=9I`&PFQZ<9M9<g?zk%nD1A,!2%up,9B!h:3<773%#oE:0 Y^?;9%3)' );
define( 'SECURE_AUTH_SALT',  'dGud>Ulv2V5OP(cy&02x0q6^_Oz^;G*rKMDD(y?|TMLGo<_ky M3@2[jol=[vZpE' );
define( 'LOGGED_IN_SALT',    'pv?E!bT)Xgek:^fBeN>>B|%.Faa|0Sr~#IRfX=4RwuC G*@(}oBIZ>4svgIBt2_4' );
define( 'NONCE_SALT',        'qgToHgm~Dg7-&l$,nRDLTQTpYM@04yK`E;1gKy*k ,zd!`gs@,C0_-&F,FE}}sgt' );
define( 'WP_CACHE_KEY_SALT', '2KOm~AT{c!o/iJLGf!ea}>Oq7gSugM4ls8?H; _3|q6>&tu]!v0]F_YhRbuwsRUp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true);
	define( 'WP_DEBUG_DISPLAY', false);
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
