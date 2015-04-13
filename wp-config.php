<?php

/**
 * Define type of server
 *
 * Depending on the type other stuff can be configured
 * Note: Define them all, don't skip one if other is already defined
 */

define( 'DB_CREDENTIALS_PATH',  dirname( ABSPATH ) ); // cache it for multiple use
define( 'WP_LOCAL_SERVER', file_exists( DB_CREDENTIALS_PATH . '/local-config.php' ) );
define( 'WP_DEV_SERVER', file_exists( DB_CREDENTIALS_PATH . '/dev-config.php' ) );
define( 'WP_STAGING_SERVER', file_exists( DB_CREDENTIALS_PATH . '/staging-config.php' ) );

/**
 * Load DB credentials
 */

if ( WP_LOCAL_SERVER )
	require DB_CREDENTIALS_PATH . '/local-config.php';
elseif ( WP_DEV_SERVER )
	require DB_CREDENTIALS_PATH . '/dev-config.php';
elseif ( WP_STAGING_SERVER )
	require DB_CREDENTIALS_PATH . '/staging-config.php';
else
	require DB_CREDENTIALS_PATH . '/production-config.php';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r8]z +qXyFo 2}BIqY|-{#A5@8aPL.Hm7Vz`v+c9wx2WQ:V`3Ca-2OG`=7s{|9-c');
define('SECURE_AUTH_KEY',  'i/`8^Nma6)c.+QaO&8lvP1s:Z_r%1+80ec]0Qm9YfHV2KmGN^A8+Pmp-(0XzdH j');
define('LOGGED_IN_KEY',    'q9CV6_ ZQ`8`~LJOq+-M8)uG9|^1OC^_:Aff3^26Muk-+Z[01*A)?Lcbm[6+|,s0');
define('NONCE_KEY',        '|H!D}rB[fK7$BqFL vFJ%4[RKb-w v<2{{~*6dP )0]8~T>+[L&IT+MWq>Ba&fG*');
define('AUTH_SALT',        'R)|2z%mlkL^E+jW+2Kn@Tv+(9tQ;VVT@4l.:.-pYgxyV#R03U4qhQ6{>n=k279|[');
define('SECURE_AUTH_SALT', 'vB(m],UW$!|/v^&NtA(n|q#w`GOLB3RuMEmk`>5W7Ny&g#p(I!??B{`o8[|I={fl');
define('LOGGED_IN_SALT',   'v~GILfbg 6<zVDu&KE)QK*k]m<^G.I36p7+@#Luj.!j!rt99{V*TdFH:<?7w,MI#');
define('NONCE_SALT',       'E(T^<_osW{T?N^3G8KE*n1:&oL =!mhM CIH@7)@Xw(s*4ZWvL3+=P8Wa1jh2G-i');

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
if ( WP_LOCAL_SERVER || WP_DEV_SERVER ) {
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true ); // Stored in wp-content/debug.log
	define( 'WP_DEBUG_DISPLAY', true );

	define( 'SCRIPT_DEBUG', true );
	define( 'SAVEQUERIES', true );
} else if ( WP_STAGING_SERVER ) {
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true ); // Stored in wp-content/debug.log
	define( 'WP_DEBUG_DISPLAY', false );
} else {
	define( 'WP_DEBUG', false ); // only turn this ON if direct access to debug.log from the browser is disallowed
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

