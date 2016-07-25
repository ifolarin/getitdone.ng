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
define('DB_NAME', 'getitdone');

/** MySQL database username */
define('DB_USER', 'giddbuser');

/** MySQL database password */
define('DB_PASSWORD', 'najaHE4Re3uWuduDGRANT');

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
define('AUTH_KEY',         'UQzsswUECJxLqhI147U`8$;(#,CGq`g?3N$xQ2et&|`t/-X&+3[b{ Q9|:pji<?|');
define('SECURE_AUTH_KEY',  '&dj2vLT;s~]+&wQaCA|Ha4+@ SqA+9[vOFX>J_R1?3!*[_JLVboKqZ25-vH/d8CI');
define('LOGGED_IN_KEY',    'Dq:_EQf`Kzo.cmh-/i>ay<l;=A,Y+*}PiI xyZ`wmYlYAkE+#.+9~J|0bwI]$Xpi');
define('NONCE_KEY',        'no(|~nWdbKd9sdl03jy~DzE7%W|:u?;h&?Gck3k8.RFCo3]cH]^t47+7<x_Ci@pl');
define('AUTH_SALT',        '`Ky1R#;wuU3UF,56:R~uyc-GS|z^xJP`82IdCgH%99F+M>5yD))gp|y%dh*<#hpH');
define('SECURE_AUTH_SALT', 'mx.-92^K@{UhTII+8f@d_YO|w2{B]_G6)?uIfo^X-gM4TvQ:H#%R_Xf3L8a|2Vd@');
define('LOGGED_IN_SALT',   '0Q%zB6Ll{t-4]N@$+>soh&u{Bg:fr}y<+Q; -4EI* BHwbty$Z|bE6t&;hC=3$/>');
define('NONCE_SALT',       'DXNW|#v=2hPDp+`We-a)[O-/{t1Wv-n~m;/A:*fq-GlqjX=Ud&-7d(k:SR1O^9d|');
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
