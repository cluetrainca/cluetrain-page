<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'oPX6J0q`p/oEOhE~~YhcbS_d]AX0Cf.c!,_|f=+AH]w7Oh]6)iqwA.?XTBZ.tR.l' );
define( 'SECURE_AUTH_KEY',   '0F2g_=1iB8whh?$<,_46p1), ?Ka(* Oj-F%yj(9GMM:,MxQ!!&Wq`m?Nd$R}DxZ' );
define( 'LOGGED_IN_KEY',     '0t,?TwSnSO*(LE6%0#2g>1yqgV:uE:)1OG3[W[5/rQx0aQLq)m:*#m7u@@)PgIlj' );
define( 'NONCE_KEY',         'pUE>}Cn!$K+gyP<1Q~$AMh:cD`&kux*#niy1R?UCRY0MFGPe`l%Wm,eGPasa(@+#' );
define( 'AUTH_SALT',         '5-1/q9v{@^MRKjYP3><BqZ-?N~2VAKsE6=,gOv*g*zB;`USQZD`g#fBp[:zMdj8K' );
define( 'SECURE_AUTH_SALT',  '6/)a48$^YwRGj1CqC@IAqA}LK8s:&hV59l+WeMq#G%?e|UWH{Dm5VVcOB1T3UqV$' );
define( 'LOGGED_IN_SALT',    'L!!b/9/1~ Abx)A/S:^7@nTT;de]<lq*e{:ohomiFH<KL]/beb6f~!W@P;N/]h4F' );
define( 'NONCE_SALT',        '$q9t?>quCamm?(s8>HchHW6W]WiLQ#bgJQk,D:#R3kzL,_-U-b.5#cO0Eu9j,CtV' );
define( 'WP_CACHE_KEY_SALT', '%Yr:hPc$/41a/vhUX~~hMUg!h4Rph#;IZMc#$>BjQ#LS;/^u8pp8x2{+VBDiI1$7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
