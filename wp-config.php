<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rethired' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+/lqPZU-fJ|V}{qMh!bJTc7zN0TokYW%<9mJ/V9Sp,DXRy5eLSR9L_ajR|+>S. l' );
define( 'SECURE_AUTH_KEY',  'JPZwMCl0^Dkv-hgU<YWq64ZHdTj:n#k$>Fs]g0)XAOXVH^@(&?V;tKo#Qw-n[UE;' );
define( 'LOGGED_IN_KEY',    'J_G}C7OzK#{G]ZT,!3SU%p~4E-&[bqJ)[gN]g03Tkt8i#`zaBL^D/FE:kc_7|bjN' );
define( 'NONCE_KEY',        '#!7`?eQPo%WR,,&k7QpHnOOx>*0md#Bdt0!<Vjd{x-klZ3T=]-K4X@P)j|Z-r.fv' );
define( 'AUTH_SALT',        'QZ(,^6B0dVG$I6tPnSG!Vpj/Q]2;Hu}</Kw~^O4jq1:(a&z>_| D]VnNjwGUo!Es' );
define( 'SECURE_AUTH_SALT', 'PZsVOW#]&SLw}.X13=5w`u5P| IVX@z(#8*eYrbs_^eN`y_Aq]Ffcav!S[vw7s;#' );
define( 'LOGGED_IN_SALT',   'rBrNbwdvx*`X8ta8xXp;}6z^I4Dh$fsY#2(.Sh3csV6}+p=aT`.%`G3cE@L;ja!(' );
define( 'NONCE_SALT',       'HN rr))U+Si<%wBp_sX>PxF_hUEH*pp>YXSLVU]NWX{*|19T$BaB|A)aM=5aC-G$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
