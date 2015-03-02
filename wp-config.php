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
define('DB_NAME', 'servicesite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'cSG0:9- --YWbI,5-jeE$+1|ItQod%A@vl}h}1-n.n;OVI)W) >:SMeGu{;${vOo');
define('SECURE_AUTH_KEY',  'SDqIwYc_>&hkfNXcv,F#$+e>v$.=d8]D{UB~Q?ul9O?se~T(}-*1|_UMQ)`OE0Q>');
define('LOGGED_IN_KEY',    'Z1cQ$p9_><.6?(1suyv)#h_w~|RXLoxsg2~{(<jfr)^_%!ct+#>th+!WG)$+ nS{');
define('NONCE_KEY',        '0UZ0KV,8v0omO.-q%$Jz#@7(!7X<>N{d#le++dA7t`GCYjVSwR@Ckf^)ZP0V6[P`');
define('AUTH_SALT',        '9gz<0c_Y`~(9+,w=+Nc[j&5g*%_Tg%TKSeL][#{,;<$W+B[vrH4l|6G%v:-6VuoL');
define('SECURE_AUTH_SALT', ':vt-o7`yw$Q}LzR_JE(N+ 0^X=Orxx#EN9q!x:kDPiQcP2H?_)JR(W+XylU:q:Ln');
define('LOGGED_IN_SALT',   'jDRb%^:t5 +x4Rf:6+4(%mGz#5Yx*>`}cq?^e-Nk2rp@A3)/bDD*_su@)T*O`o{;');
define('NONCE_SALT',       'diW+)E#v3r6-(|#=l=a1>F^?u_5w6fGRg[tn@,jwLvc5a9#a52REd(KqdT%.3L,6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '1013_';

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
