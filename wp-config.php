<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lastgouda' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*HF+Le}#c{kOPz!iIP$z@8*s,I05|8&b*ZXyed/Wu;phH1_}n#|AtONMb~%=!c1#' );
define( 'SECURE_AUTH_KEY',  'kIg3>uX=bLSs0WF^(tcupKU+RnA1-pvzyY1fG<>N{IuV)^-X9hMvc4446x$Yv9Ou' );
define( 'LOGGED_IN_KEY',    '<wRlcGYC2~:em6 v#SNnQ(phxasHP:s(K_wcroTzU^/#v^_d8[Ge  v| -C8pWyJ' );
define( 'NONCE_KEY',        'N:BqThG[0tHW6*GTPG@8Bw?W/rJ_-A[*gY4r7|bD=zZ~pscc6@v3OA!M7W3st|,w' );
define( 'AUTH_SALT',        ',Ehgt58!2aQ]a/`Rq&fDj24RBK>XtKAnNN-*+l(/6$EadxZwm,>[tKFQ)Mv[=GQG' );
define( 'SECURE_AUTH_SALT', '5f>r|Z7KE2zM-4&vU}^V#3,%^7o>: 5x1xvqZ=R^.M+]f*tDE)BFHZrhKZ}wx.}L' );
define( 'LOGGED_IN_SALT',   '!<]Mn1Jw~6a(7v{[-IWU,v<0PN=B/F`JwVglT$m?f8uT;^-VVk4%jklV*F9k+2!n' );
define( 'NONCE_SALT',       'gJxQl9|~y-* &+:fl</wFvAE94UO/=W&jlZEa7EW>yw>@C0olgep{Ms4`X<mCUV;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
