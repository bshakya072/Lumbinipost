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
define('DB_NAME', 'lumbinipost');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'F;,1hxh&^(GwW~+b&lVUou#Yuvr,lW j1XkMcbT4:2m_PYn82CzU*SJE3zRbx`:7');
define('SECURE_AUTH_KEY',  'kdV:Rw~3/n#D-6cHes!0R4c[_R7}M`{|>U]FpQ4@P+O^&e5pq7 ~:};o{q=<E#H4');
define('LOGGED_IN_KEY',    '3ws401ZIP3D9mRV{* ;ulle`u<Fw9e/CUfTxp@B%o,B>y:2L({8#,ZlpLc7sqlux');
define('NONCE_KEY',        '%ji1t%?g~;(;c(w&n*Kz+5 Vd:[.h7Xa$G$VB]mEjk.$:Nr!wm!<;ZP1ww>(~pHy');
define('AUTH_SALT',        'cFB2Rb)]_eq;zrF7Cv|<^6C$ZX}`BcKC-R6jNE,WTV:a}|XpVUmJJ1b[r<{$4f@-');
define('SECURE_AUTH_SALT', '`Qx7G.3Yvog(8zPfr?lm,G=iUrJBu8B~&A+VXmrG$j__;E(.o?>=-83)FZ6cv%1O');
define('LOGGED_IN_SALT',   'F,6VqL5D:d#.CVCaUuLJU?bf4_v8v8VnHpL(}rBmX|Y)29B0*O43ol2p!z}z:!k+');
define('NONCE_SALT',       '{)2XScO-S[eG^atbIq]I&n1$S&Y634s<r27OX:ed{J*~bC-H:Jcu:Z;1X;>m:]Eo');

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
