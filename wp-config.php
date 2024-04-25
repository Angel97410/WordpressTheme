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
define( 'AUTH_KEY',          ')BK4hd,xI)lZ$d&(J0`WN.o~f)Eu&w=+Zj_@ W21VNeCG.Fw $dT743k}`]#UD+7' );
define( 'SECURE_AUTH_KEY',   'U?W<gH2o&w335u+NEJYERRH0(4)uH59-NWTpqx5eB_lrdtO=X,/m5kU67Tixd+Pq' );
define( 'LOGGED_IN_KEY',     'awdY]|*yBo`^Sq?IeX#C~Y&qeBn,~N6:$Gb9 X;:U L{C?/z)E=UbAX&Eh7bddWe' );
define( 'NONCE_KEY',         'S$ns2fRN05e1c4i.ZIfM[T^Axs&c_lts2WOL] W!-8 faN7oicER8zZ~NNlWy>*f' );
define( 'AUTH_SALT',         'M3_d`WET[.8M[oCF{cxY+iE{<3;;Cp[G[vl(Z03 Zd5Bxi0Q0x6k~{^)Ph)jYj7Z' );
define( 'SECURE_AUTH_SALT',  '=7<fs;bu=(^Ws5:TGa^!xy;qtIrCQ%*d2p3pws[:nENlx5}bb0;gjoCqWif bS l' );
define( 'LOGGED_IN_SALT',    'T  iK4e%`@~Ik#&i/?KrG!=vrJ]P v_1-u*45ct{8@kaw~mBj|u~Z*V.-k!|~LYq' );
define( 'NONCE_SALT',        'f>E#6<EUz[4Jl|&{Sb o!skldyZ6Z)*>_3!>$377rmWYDstjS>c#8 i4:E^^r<U?' );
define( 'WP_CACHE_KEY_SALT', '&kG^f}>A>pF[bp>)Q{Pgo0KB*[Lf==}/(exWuj]`O;Tkw8^F2[J8fQ,X8Q/64+As' );


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
