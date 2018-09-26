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
define('DB_NAME', 'jmscaffoldsoffloridaWP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tQ:inQ9WZ0#_*qKDLZq55wCAblVr<3]mEI{@?e@rkC*W#HLuE9pYjgm,+9#nJ639');
define('SECURE_AUTH_KEY',  '435l!ktfy4[AlXo=)Zm:O&Grb(9<m{0$.=xBtm;oXkW+BS~2iW*;wBN$e&T1p#U|');
define('LOGGED_IN_KEY',    '1LS(mws1dh]!%AQeNz}enm%GD6!9L4_c+z5*:B`0; dw,zFO8ajTO[l*ISTA!UCz');
define('NONCE_KEY',        'nP?,qozIkF|+w0<rbyrSSom@5,8Cp@Dr.|>u1B*JkeGgPZX[FYm(97TJP_EA(~Ks');
define('AUTH_SALT',        'XQ2F]OGmh}Y;0v^A8By0uIsXNb,U?iWyzYqWSw-0xc1!gh/OD$6g#b3cvTOg2<49');
define('SECURE_AUTH_SALT', '6&J%p&s!$w>}]1P1I0?w-u2@)h-hU~w7W-[Z6U49moR{}bha:h%02$  0.y|}a]3');
define('LOGGED_IN_SALT',   'd?%F3JWm*Cs$J]!&:774$t0hA<-Q.^O!pLNtVAV2k^t/|U]$?GQNA1>6uwXMN{hh');
define('NONCE_SALT',       'h,E0&Tn3~j4-*#sl<6,aIXLeSB}ilavvH8`+WjnDg[Mtt:]J4Q]Pc(ns&OViX[sW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
