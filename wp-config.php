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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '46wNqR?mS1+oGj5ss6M@#KxaGZzW-r.H_M7&Xm[lI5-i-1qX2[JLiH0A u4.Zze!');
define('SECURE_AUTH_KEY',  'jhN,xtVT|c=j6`{=;#DB/k/hv#j9-FopP]}#j#E9-u yRRK{nTo*g/H5?|EpnB,)');
define('LOGGED_IN_KEY',    'z*+6nPp+@LCsy1i~Cm&3!$}obRrVJ-v4!l}R>iPhV&V^wt!37DmCT$5969H_:*J.');
define('NONCE_KEY',        'm1*sdjbx8R}P+vY{i}Td!:zTm4^.mxNRl-WaC+--T=+Qnffoz&gZOPHw/pz=kPHO');
define('AUTH_SALT',        'LBxErG+.;#$.WuJ-,W=yPDZ_=gYYl3g7z&/i`Pp1w|rJN,V2{=~7/^VG@L1y*Q+|');
define('SECURE_AUTH_SALT', 'lEjN1k7i;.}]U|LF {SrcWOktx?,08PZjfEwAhSj*< |?X23LK2Pt~ Cm+y1C@ ^');
define('LOGGED_IN_SALT',   'YI>N2SQi|55m@&`juPgZL!h5M-Jf4MiJT2PJ49T}_X$-i(9enNx8$):B{moldADl');
define('NONCE_SALT',       'XSF+)-cv4IX|C_h(t,&3VT%)n]7*l*)3:oWnX0SbycM}JD++(+Mi%gZU;<}]&A=o');
/**#@-*/
define('WP_HOME','https://john.squareops.xyz');
define('WP_SITEURL','https://john.squareops.xyz');
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';

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
