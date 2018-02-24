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
define('DB_NAME', 'griffinVerept');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         '_tCs2W%<^W3SSU9Q@t<7@?*3H^<y784&xPD:KS-?~}iY;IJS>oqH@W)/6O=a-yF~');
define('SECURE_AUTH_KEY',  'jUv&q{L>-ulI)J`0c)Wv8IqT)3t6k8)up<SSnNbYG$Yli-~kN(-`N5GIu/~7thg7');
define('LOGGED_IN_KEY',    'Pkw6,}2yW$[t+{.D[`P!Ef:2io__8oX(hf[ZM-OFqF%aQ!rC#G=aVa.bSVE?0F&*');
define('NONCE_KEY',        ']/]UGAawvw/&cu;Qx~]_0AQ}7#HHsysnYUjfu%DM98(?ZmZ&O/7M]Sh5bxeP>!fZ');
define('AUTH_SALT',        'R9 7lZ_^2i{K$<%MEGHR+Y20[*e5BhZ%e##fh}N+o&z!? WZ[j%Gj]sd,_R?L$=Z');
define('SECURE_AUTH_SALT', '77$I3~3.)KHG1Y,+_C(Om7?1}%?pAw^cBU=S@ K]O;lXBh8@$O7=h[2Fm@.~Lpra');
define('LOGGED_IN_SALT',   'K}fD<$8f@Lb4U2v9|]YL?,5Hf/{w;.Esw>ON}R>80F!x8tM?>y&4=FDeh<aJ=g@c');
define('NONCE_SALT',       'Qv!azs}p|rOP&:Jh(}Vrs_-,:vQTpNk{U>N&>df?*MWD|;$wOgzZ&]5@;t|J4z+%');

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
