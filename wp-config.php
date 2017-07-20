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
define('DB_NAME', 'joannecodes');

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
define('AUTH_KEY',         'H9)mi3M%PQY]9mN[e]kRHII%,W^d|XqA1DQh4X<t9^Dc{V0[| N.jey7I<@CJd-%');
define('SECURE_AUTH_KEY',  ')]:{Q8^hP@~]3lAU9|eEnRZ(LFs3zIf9}UHwhGRuwH/[b0~^&~40{UVehwLNQKMM');
define('LOGGED_IN_KEY',    '>NF,ka2n<L`LrB|+eV<l}qF[ ->6A;fq*-$*.AzE>t1t`*{}LUrQQa#wFM4*o&%W');
define('NONCE_KEY',        'y@p|y0TD.|Hl4!MPD5J&mUa[yy>mS/T+ktvBhkTZ|_gH_*^ r0+WxX6$`EawR8jN');
define('AUTH_SALT',        '{Ckl:BYc!Ny~|t~.S.Di7e/%4xxWN(pP;Z+:=vbS6I^i )7</n8hS`IdJ<qF4}Vn');
define('SECURE_AUTH_SALT', '$v>#[sy>7s]wtf<[Ga[.VPB8Eh#w6o6oaE*Lz!3ZW8=P~(o2s+9GS|A6f<B|iu0Q');
define('LOGGED_IN_SALT',   'T+AXa3nP>~(HBfTB(}rnj~`ZBRuF;7}Vv O/z.x Y(@*=VYipH?xN@Ht8sD!i7>^');
define('NONCE_SALT',       ')&pXwXxk}do-XD=!@#Q<eT`yJ*I8inU$Kg[F=UF}.uIV=Lz#;:B1$x/,%dUzjx4R');

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
