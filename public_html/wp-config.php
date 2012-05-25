<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'a3699113_one');

/** MySQL database username */
define('DB_USER', 'a3699113_one');

/** MySQL database password */
define('DB_PASSWORD', 'Emptyset2012');

/** MySQL hostname */
define('DB_HOST', 'mysql14.000webhost.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}`@h6}ez:F+lYRTsl%;OE`NrqP2An` Yd?TvtB.DJ[nDm9T|- ug/LCTI5pRgP}1');
define('SECURE_AUTH_KEY',  'Us?xpXOg`:2_`{u9V(.4@c]Fr%:)|j+X=W+dV~c 4Ra<sP+WnhUKn)h*I|+ [z0B');
define('LOGGED_IN_KEY',    '{^?I1W5uynA_qA|%&@>Z/|w/cM}gh^A7{P!qRM-K)+asWKExdp,5jxiUHbFDy+<y');
define('NONCE_KEY',        'ZYVYOOV{,1gwFk)}A)I,TiVmYQA-@=+LgQ*$a^9p9BYbrMtT9Cg0G3xdjiO/9-iE');
define('AUTH_SALT',        'P-5cpP}> CKH62P][MkN`nKlxJB-lfn<Nx4Clf}&nKxnGou~]Xi1@b%p[5 n~Y2&');
define('SECURE_AUTH_SALT', 'Zq?ocF+CrXQ3,g#}-J-54M$[T<pZvKC+iV3A.&r:j[:W3d(1CF+d=))v0Qgf)W:*');
define('LOGGED_IN_SALT',   '~S{g_UJ}UFl6iVwy=O~?iA[R8_m$k;qvE@T`IudaWRy_-&>k>Z?f5kX&c;OPG:91');
define('NONCE_SALT',       'o(S oOQ+4t|hUXX1z- hw$MzkV7n5~@.sKo|E-)mSTO=b&XdUo)[^V<+J+2+A.H^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_emptyset';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
