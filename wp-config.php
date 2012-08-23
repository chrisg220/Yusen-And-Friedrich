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
define('DB_NAME', 'yusenand_wp');

/** MySQL database username */
define('DB_USER', 'yusenand_chris');

/** MySQL database password */
define('DB_PASSWORD', 'dsGUCdB{IS{6');

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
define('AUTH_KEY',         ';^T*G;:[2M;-KA(P~^ts^]U[C7W8OFrEV jTNbwh]^:gb`1q3rLk*i/qiLhR~C_;');
define('SECURE_AUTH_KEY',  '/Tc~uZcs+?_9;,Zju6iBsz[Zd=|F+VZU/_v94q;iaIrPVsz6+%;f;L;~cUGi;:/x');
define('LOGGED_IN_KEY',    'fr|gS<0Fz{`:PB[(kZHF+-UU^d9EHib]s;M5C|n(==||p`+95_EBWk!Rj@%*glG1');
define('NONCE_KEY',        '`Pt(|ZnQ@%/^6#J@2yCV~#:t2gf|<ool|EG~nF5#cRL Dqd ]5O5-0Xx/,;Fr5r ');
define('AUTH_SALT',        '~)ZRgt@>1,#bD3jPp?at1>LUpTQdH$>M4Q6i1z28u)vw1HNHKok!Nwv.9Ng^E{yr');
define('SECURE_AUTH_SALT', 'St}_jg<}W**vbw6d5kM-%d]H$/YqI8|RW*i #n+S+V[9TuBW)hp4-#?+LwQFAAVY');
define('LOGGED_IN_SALT',   '3|/~8oQO*?*@`La-JV?lFlj&8gRi|&Gd7F&v5i,9+jbpj|=e+GZ56Ic^fLC#/-S6');
define('NONCE_SALT',       ';EnW#A*K2jks`Z5al-`yWkTv*?|~F&L1@#`)T?A1n(y]y%Yd8*kyrh{~e<s|xvvq');

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
