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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Jatin@123' );

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
define( 'AUTH_KEY',         '<r<5_;bpM;.3{,E_bW##3;:  J-nSS3YfbLt*hYuR)<c0Q;d|.Nunkn?Y6Wm<hOK' );
define( 'SECURE_AUTH_KEY',  'DbB[DRW7)rOQ82CRR7Q@G)/C;[<|@_n&(RJ]Cd>#**_Hm{.bq<,9;BT&ruz9s:~e' );
define( 'LOGGED_IN_KEY',    'QyyXORN<m}V1Z*U>+d2O>q}07uKx,^[6<%fRyqwNSz0ZR@Er+2%32|JI$wAE5yg?' );
define( 'NONCE_KEY',        'Om^2($E)^Tl)Q&jieJ3+}o$-) 9+f7=joZ@BY 2wU(xj@mUU%~gI/j9Sl7PT~ Sv' );
define( 'AUTH_SALT',        's+B$uDf/I0H/(r80JlQ9) j5k]uc};-rBhLXfWxBKG%&J#DQfg!C,JP&&RYV9<G:' );
define( 'SECURE_AUTH_SALT', ';cNy,BY#8njw;yfBwEObw9UXsqP![{]PyV=nn>$AW+z0WLNG,3m$)US>wir0uV#R' );
define( 'LOGGED_IN_SALT',   'c0>1b|R#kERa|Z`A6K!~q#e]4/tSGV[]w@K8VPgahBpT5y$5-_|w#ku3gbnsstpw' );
define( 'NONCE_SALT',       'uUx=BNqbI(Zr5u>(@AW@>sQDV}z_h54^D%4D5_?7O:V(s7&*?@j=P6Zy-qc`LC.*' );

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
