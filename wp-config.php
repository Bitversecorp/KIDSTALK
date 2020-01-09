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
define( 'DB_NAME', 'bitverse_kidtalks_com' );

/** MySQL database username */
define( 'DB_USER', 'bitverse_kidtalks' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@ssw0rd123' );

/** MySQL hostname */
define( 'DB_HOST', 'c05.tmdcloud.asia' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}ar7vahn!8fx~vYg&1.s=x&|s&__tIjl(As?YV_ilu3{^S1&U`xj-bADS#bGM:c(' );
define( 'SECURE_AUTH_KEY',  '$eltZUvg4CA:`<7,0@d.&.7.6Hm4VE%!0JZG>dh@jKWp65RX@ilpsDk^s3d?W5b-' );
define( 'LOGGED_IN_KEY',    'm7 /n>Ah#1eSn^5A%:NsUe$ ,d!xY1OBi_al#+x#r4 ]m)#Tn{o`DUQtLesse3R=' );
define( 'NONCE_KEY',        'PXbAbN9,09A!v,ARPrZ#+2)d4G(r@A9d0K@phMV6hA$;KPm/i1LFIz{U1,/dJ)iv' );
define( 'AUTH_SALT',        'b1Q;P 8(hvADT2jq27hRx~39Ukxwd$lcxPyz6eIpo6[%GrlrVBb7=QZ(c{!h#&Cs' );
define( 'SECURE_AUTH_SALT', 'Um/L`rGBMS[]L1A`R?uA=%U{{fF-ivmJK-Mj&V5w&S+qQ=%HV>T`r;m[t(1myO|e' );
define( 'LOGGED_IN_SALT',   '/,b:&ExgD}*4gUh?mZqQ<O`zE*9 ME+g7=v-%zIxxl>;g{V|c8hOsl9uXOP01<42' );
define( 'NONCE_SALT',       'dp^-k5,gFw s?wGnHWD#C3M76k:|BpP^q$Ichi+t|$lp?HRX[gJe_Gh&~[M:h/#+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
