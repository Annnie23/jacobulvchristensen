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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\norde\Local Sites\jacobulvchristensen\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          't5W8aNZc+BoGyysRLq?noLG:ns0l#+vVqJ%tSsTn2_BS?9:r*T0*iPfF}GoL.[!i' );
define( 'SECURE_AUTH_KEY',   'XU4v-L3f8nKZ#4Wb[YOoN-vdv%Uh.(*:*PK6O<)M)o:pC2zDYT8Adj&N<P9::u>q' );
define( 'LOGGED_IN_KEY',     'N^-eKtva6FSvWZFIkySL>4A3@d_5*hel?Cv<Z5){%s9SROkQJ7Hr0g( 6Vp|lJO,' );
define( 'NONCE_KEY',         '&U,+]e_U-WxF`2N>6S?]T5,8-KG0<EGc] H35@t/bR_ 8|dVp}C+&t6i2fgN&0pl' );
define( 'AUTH_SALT',         'V2q|W30|Rzg8&+ %DGD(Y|r08|4jl:$j=o.lz6zxi5Xy98dm2kuDYosDn/+<a`,+' );
define( 'SECURE_AUTH_SALT',  'vN>|%JGz0`dd,i`/Gdz>X<iv-?tw)dx)^xzq1TaXZC_#-f`DPI56F@;&,dm>XI`n' );
define( 'LOGGED_IN_SALT',    'jqXoj6F0y0%3VRmb?ll53SYcnMp3,{5hukP:Po,_1:G8pTh/`]3zeVj|rU~Lm^B{' );
define( 'NONCE_SALT',        ',j;05MA$rKb{Xh>!m^e9ib:4(Xh%W7e$C6S$^1};`)f.8NXylDct_*77GY?aycaV' );
define( 'WP_CACHE_KEY_SALT', 'BXLWPJtHRdnXz1tv0!<!!IsUF/uGgeQgdE$m?/qmiTY-4TcTydf6`HBJ07%,C-U!' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
