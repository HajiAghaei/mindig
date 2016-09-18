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
define('DB_NAME', 'launcher_mindig');

/** MySQL database username */
define('DB_USER', 'launcher_mindig');

/** MySQL database password */
define('DB_PASSWORD', 'Kklo4@48');

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
define('AUTH_KEY',         '*N[ISj&?4s`Gy8+iK7/s_lHsS6]Z2H/X.Cx/Nm&BtPb{bdQm{iJO}v>Qv~[+;!&t');
define('SECURE_AUTH_KEY',  '}/>AJC#^%`0Ea-O;eQ=ACJkf?Jo%/+#|s~HO6pwa!{^S:aQ1rX;IGG~SE3p;{aFx');
define('LOGGED_IN_KEY',    'zP~hujfTt)cPBMCZqCeKhZy=CoM1(xoOVBEZ*ra*.40+2?H[jFz3cTSPsWAEhawh');
define('NONCE_KEY',        '1P~gy?01N<DVEfZu{N{cu/F#iq4p3V=LXh9D`oU)WkgHes,j.k &Ibcnn#KKBOF5');
define('AUTH_SALT',        '46qR4JWCo[@,4@FdVnLMFnO3_0VtZQ$RJ#U=8cL37$M?Ge,2-QtM_Dz,Z!R=cTSC');
define('SECURE_AUTH_SALT', 'Xb]Nk%nm5}7)W|;<&rNz&9#[;]o)A}C*soq.&s^ y_Q)x(D_ZO*>Y,h8yLOQIqpP');
define('LOGGED_IN_SALT',   'bng7Ggbd`*AmT(gy0NYPI-Y0#^2LaH#3AAK nh:jsgF@~LEj>iK:A.;B2V#<iN+a');
define('NONCE_SALT',       '=%g>@!2wxD`>tq+iCPR&!M%R+k?vzH0[%nPkQtywrf5:,C|Rag*{^kD41`b,9Wm#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'd3f_';

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
