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
define('DB_NAME', 'word');

/** MySQL database username */
define('DB_USER', 'word');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '8w0h?,NiiPHB:&g!bhBKY1U|#BQATs`z64X$Z|Y~@(@U3-3p[s2As?qZ#U_(R~uR');
define('SECURE_AUTH_KEY',  'He9|Bv8=N7D8{}!1tgB[pFyOAe%3|0n|(dSGBL1yy@3.w>OPOaE!0>Zv3qU!zWnf');
define('LOGGED_IN_KEY',    ')Hu<Fo[=u|i^O386+Kr c|1_Az?7`b#|U}_z5CW?w$0cXfc>*f|^,B%n40mE#BI ');
define('NONCE_KEY',        'nfp;KsujhJ3?4|dl)bX@7Dg#D2VHpQ+lN*LS&+%K,]&<]B;&;-j$0L5QZ(I^,{++');
define('AUTH_SALT',        '|>=4:<+ijp|jrfHs:M{t2Ga6UMvyTjAZvgWcw+;Cn$YyMq%jg Cr?cJz*}_|WKP`');
define('SECURE_AUTH_SALT', 'i62Z$)`^4U[q3CCf2W.]voaJ6[A]6iw9|OYV gZ^+jfB}B-t@7rL8Ad@L?O]+g6W');
define('LOGGED_IN_SALT',   '_Wv)n<.5#sFPIyLK5KM== dF,/(JF|6@ZhT7UBnq> 1|i9t8U.4KP-ikv=?49&F-');
define('NONCE_SALT',       ']rj_=F@f+s{!a*jRmen2-,^ >*G?kouxZt-SftJKky#=~hy&O/|u36r<FGnO,2Tt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ko_KR');

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
?>
