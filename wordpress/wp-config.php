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
define('DB_NAME', 'inhertWP');

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
define('AUTH_KEY',         'eD~et6_jYURvRR5FAA#bHZ&Mqc*09#OQA@|Q=tH-/GQk+:q}Q`wY$yPE0DaV~}3]');
define('SECURE_AUTH_KEY',  'qd(~=tpG4t<11y2~]3X4Yl^&NO?pRLgY`Yz|/|QCk_pkl.#Z.xx,!U/~.[Q[:aQ3');
define('LOGGED_IN_KEY',    '3PW6[t-q#*c5(}RJmE*ZjbeGCG*4XUL_SN8CChDA7>doRA?}f!]yHSoqh!BSL,jy');
define('NONCE_KEY',        'JmnU`u~W>tP|L*-u)wJ<go&nd~Y1pT(fJ8_UGq^d)lA~_Gl:} yq?D=*0zNx|K5g');
define('AUTH_SALT',        '4%:K&8P1SzVe]u6]a}XKnH?cp{(._b+li2kF[kJ#KZr`~3_nC)4Rh])OD~,K5916');
define('SECURE_AUTH_SALT', '#$):^p/VYWX:FzhO@@C!UUfyi,q%:US0+<On-EpGe-rQ>AD<#]Y.bF5c3L02W~s_');
define('LOGGED_IN_SALT',   'Xkx3n_9N/d;g/#yy][[XtITobSlMffec|3_3V1,437^T~rBhTVQ@qPi}+{`hVuXM');
define('NONCE_SALT',       'z,zRLR]jD{Rv&_uY<9s36%q*nM2CN%_{*ufj{B*+z`J?&A*D/XUk%ySj*-eximL ');

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
