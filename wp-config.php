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
define('DB_NAME', 'bombshell');

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
define('AUTH_KEY',         'U+FIk2FP;GC>-zNH0]8>OxXm2G;w#d^r(=n2T!W,-{80=$U<`c;MSLC&[% @dqb<');
define('SECURE_AUTH_KEY',  'On}}1#wEMMV6^kLH{v&a+%]J.Hct=75Flq!T#]5Ha|2jVv+!b+x_Uop$CI_x]Bv;');
define('LOGGED_IN_KEY',    '8CahJ6tA}G;eZKxe&-,we8>]Kw`I5z+q=E`=,vO4!|]-P9{Vy.Y*60J`U9*o6>%p');
define('NONCE_KEY',        ',-nmA,fK$MRT:_n^t6#++.!E>ms`;[;i[M~{s_&9/y?6;vP/yW4qnY,4:{,|4TwH');
define('AUTH_SALT',        'AZ(kx:sdo`K>7SMTEy)tW65e4 hX-M c Bf2>@Iu vhh+?)VA{Wcw!6u$r}kPj&<');
define('SECURE_AUTH_SALT', '/emv%n{5cP[3+_MIdMGL{9FeYhc[>28+(D5r5jj)!;?H0<rMPFEMOC,_Y.2Xl)%0');
define('LOGGED_IN_SALT',   'tB^.1KE^K+Qq/J?`?nIJvA+1c&QJYig^](vt;phwJNg/~2JL&f^CR?y!T!|(BG5>');
define('NONCE_SALT',       'l)w/e[@3dYW>yCP81Z PhLeucVdz.E0XJ0I}RVp63M.0>f=2TzVAN,}SkD(|$CFE');

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
