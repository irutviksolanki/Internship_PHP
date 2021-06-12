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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abc' );

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
define( 'AUTH_KEY',         'S@`yu<)3YmcS`j.**13u*6 xvV![0:8yU.EyU[L&iQngqb1uHL EbO31&Wt~BU f' );
define( 'SECURE_AUTH_KEY',  '/.K[z|]JT_n;#w[bp+,T?g0TwerrRJQa[366<Qf*U9l(yq`l;WinY-P/q-9GvPM~' );
define( 'LOGGED_IN_KEY',    'i,F;M<!Hm`^b58$j|rvZi_s[qUe2TR8>0D0`oEOtCKh8^M4e[wT=VPo/g*L{HamE' );
define( 'NONCE_KEY',        ':+Kb,yb!,a[iL,VjH9nG:&z>^;9Nsdsbw:TbnXY#SmZdRA2Ng3t+]Qs@_*S;5)MK' );
define( 'AUTH_SALT',        '4-.r4(N7(ble8{(PY9dqi!=>Na,OzHy&(h-:mkyY3#)j69qmb=kLco98fY{zLe<U' );
define( 'SECURE_AUTH_SALT', '<$u@}tl5SKE4PPqofxeQQm0h<I?!jT{P)A rG:.?>%:[!D;%=`u@XMJK-S,PqHl{' );
define( 'LOGGED_IN_SALT',   ')Iaw{w&}VcSO67oo6CK@oMTqOi|tl1t,1q*6Ld} (q0:lM?_WA_rR;uQ9(M`dQ_-' );
define( 'NONCE_SALT',       '%[5uFk!T~mg!.CK]zK_2.)F+x{vh=z@wTIV6<FxR9:3+mYi&d,wV<&$I{hVffrqz' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
