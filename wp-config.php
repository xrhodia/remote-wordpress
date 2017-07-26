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
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         ']bCW|Xq3bhGRK5GO-2Wm?|02GlS9 -X3So0)lmp(0zZVE9% ;&L]/GaPi83M!3/|');
define('SECURE_AUTH_KEY',  'goMOi):}>IItv+*QJ83m#ftiEU7px`MYPeRFiRhv%1[XI}.it@uWso/T,X+515ny');
define('LOGGED_IN_KEY',    'fq<y^M`@@ m[*Tm`<!F/yNeN4&V(=%NG.uOJsuEQ-Rr(KboKEw?)G`)7WCj%^>mG');
define('NONCE_KEY',        '!73Zd9#hA*T<A#jGdT,Wkvdj~jLM_3BT6`f}Uu(2_Ql{ BS^n+P_?QaSCA{?[EWw');
define('AUTH_SALT',        '2Y}0_}DPhI(JKUL/4aU^[Kuulog4?ClWbO:fQ)DS%4aLWMCQj3-JN$F][Tf~s,Ni');
define('SECURE_AUTH_SALT', 'c]2^<~O+uW_cc*HJX15BTD!{.!+xb)?bZk]|9@RrZ{+tTtHl_4*k4OY)n`ahL)OU');
define('LOGGED_IN_SALT',   '5:Qxkf;S}}7@G#a!>Mo;U5Ci8h&ighu@YMVsgv0D,7cl@b?j}c$toX71_`A_Cv1m');
define('NONCE_SALT',       '|J}j,c&<~@:s`H+9hx d#+uLsj_6lIW5p@!%AY/vH]Zf5,<vibmumOvZcd+`)fy`');

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
