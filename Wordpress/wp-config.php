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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '3t}Y0ERFG5T3Ku(vVe,?r+X+X8c60 aMo750q)8]$kD|[8kZT&Ov{De#rllv3~RK');
define('SECURE_AUTH_KEY',  'R|*p9c;FssnNm)6N[!2$`j69(-&w1{0e%~pV*K.LP;azDy+kiR>/1:?Y;z!xQB.g');
define('LOGGED_IN_KEY',    '9(xCvcBl~,nu-A^x$:N~dQY9t`:C}_Z#D|9bPe[UgVgEbEEz-@X~T+sCpf%^aeQE');
define('NONCE_KEY',        '-|OrN>D$6cPYzT*>nu 9@,3n^FV3eh2K$HY?s6|<9ldF|LTn[0gJ<wgBAB/~Y-6k');
define('AUTH_SALT',        'GmQ+,2[cpnG-+q}xmDSL?(h ~6GrbF2i|[$ g/;Szx:-FhL+-4@|-ut;FRk8m[)b');
define('SECURE_AUTH_SALT', 'X`?agJ%C/zszVS[SX9GQ0gcoqnyz_k+0-6V6k(@N?J7ynw1Acs3S94%h~^7U>+Q1');
define('LOGGED_IN_SALT',   'pF2Q.c (6gnqL]#6WYnE;>{LxqR.IlCY*1XZwR-:(@) k|2)|/i|%:bgJkm>p[{x');
define('NONCE_SALT',       '37GCcKx-5BGMRr*>_lC;w}b2G:jKO] ~pid7yc~n:g3g3jL$~Jws&/!*8,,pU3A>');

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
