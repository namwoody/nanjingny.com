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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nanjingny' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fOlv}}Dp(WF^Q&XnU#HyA!=FEkK4fXJ$w7a.FLuJYe0H}RRC(Y8^7$[>fTSz3!>+');
define('SECURE_AUTH_KEY',  '8!%;5./0?@L;vZwb)$:o3nB?CY4->Q*{;B7Db5H[|8gw0d}+wN-k~?d+DP2+W#ag');
define('LOGGED_IN_KEY',    's4@0(^T)b-nMzz,C61*r>YB$|K~NMk{?)30OmVg 5$-d)k?qFNZ2^F{i3bQo?}R6');
define('NONCE_KEY',        '%*c^#B>MLBy|dFBf39)dc.~|*,7r`&)Q6.yu_rIW/=Q&%~-he>-{hGBEe1I)jooY');
define('AUTH_SALT',        '+Wck+nlS1gMnSK/!]X+v^[.$&-?/nkd>Q-0+*2-.6-mQX1j0a7C+w~eg3$K9d;V}');
define('SECURE_AUTH_SALT', 'yTH|*XA;w3I;A5nLm+0%A9mu7-.;)Dc{kKmg`{.<80uO~!ls|T#.`^+e+A [g`Az');
define('LOGGED_IN_SALT',   'yZp,-(XjU`F&oz-eor7A|Px|VxeNr*VADye(SwCb*C8%h}x-5^^rpBR{i9PR5)R-');
define('NONCE_SALT',       'pS*w#J{2a[cl`,k[2|Q4nmsqN6q`@@pE3V+QnxWz>,;RzsyW&R>+R,`;VQN^BNW9');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
