<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressdev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6/bYX_WghB0)C:|US&d(D=JRiE_bx4(Y-,|-y#b(c8:cmAF_)T*Y<pHFt,v.pDV`');
define('SECURE_AUTH_KEY',  'Q^=K~}7NwM{S>W?V`?jZ1sdE^YHB&e8sbREB,LEQ{2Cuc-g[one _b(ohq51!=Mj');
define('LOGGED_IN_KEY',    '!;WCpAA|&|QQ?4=0hfFeSG,#w9wLe)[N^YZ(}F|^fSh3+4>)]I27/fYsE/=uPR@U');
define('NONCE_KEY',        'nlm>EqSfR^7*B=+{5L+d!e+&CY-@]7jo4c^(.QFv|dbltx~*x|-aT *Fe7gVW_V@');
define('AUTH_SALT',        'VxBI-i[b%!?L}*#p<9)BhWo1brNIw)/G*#A[j-;fu G0;KcZBllk)P2K_c{0_VTy');
define('SECURE_AUTH_SALT', 'Y:|)6uysOu01/m_(QE>d!-upwb:V7<~Nh.-[u+us.wO-sGyD_UQO[U,nPS)Z^-<+');
define('LOGGED_IN_SALT',   'GSL )T8)O+j4vd tq=TT~9-FYksiMw9q7{c|S(hc.%nu+A{wAN??EY~0lw+R-[),');
define('NONCE_SALT',       'wf@<=[F[?]_V]iSh5Y7B,6+oeJy/H>MV I$a[*$}H#*|IH:3BI#T7S|$;j?|%W*j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

