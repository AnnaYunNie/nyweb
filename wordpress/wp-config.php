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
define('DB_PASSWORD', 'Abc900313');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<iJJI wH+hw)5M=(%}%k^>n.#C>t0GcvS/no%Y@U;r(7/h2Xj@QWnXmg!KBR%NO*');
define('SECURE_AUTH_KEY',  ';DQiB0mzet$Fl{8ax@wx!9=B`GzbBSk*Q^T$9tf`?/XDl~?fRJ++D2t:1)(*-:V*');
define('LOGGED_IN_KEY',    '!Wk{b{g2z_f9((2dbyUTOmGtSfSiTiwU:2A7d!=f;h/_?C(0 nj~OzLr)]3yvfbI');
define('NONCE_KEY',        'vYx,5oDI=nA`_kD0kU&o%y{}EIvQNLV~*{m;]9^dGNy0j*-iG23|su>eq{Wcgc9^');
define('AUTH_SALT',        '1u{M]UlkgLh88xPh,p[/a 6 0G#XUIo|4MbLXI{4T~xUY-l%~F!M[yR1`E+5+l`q');
define('SECURE_AUTH_SALT', 'B%@TBsWLvGgI@Un(Wbgucc-kv(o*yQ5WY^#N2{-HD.+XzUjv}O9G6:/{Y<}y(2*Z');
define('LOGGED_IN_SALT',   'TSS#x<O_M`WT`9-K>fZuHyG6pZ3)%KQ7P.!`YWWE+E0(&o4Wf,bGzdd[{V]tzvv0');
define('NONCE_SALT',       '`d{az9n|hvI=C.ADnkGQ9.w](HXZ9x;lX3V=L)De5k$Gu/Z|v0^rqoB`pS:8tKK!');
define('FS_METHOD', 'direct');
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

