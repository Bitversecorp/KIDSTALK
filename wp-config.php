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
define('DB_NAME', 'bitverse_kidtalks_com');

/** MySQL database username */
define('DB_USER', 'bitverse_kidtalks');

/** MySQL database password */
define('DB_PASSWORD', 'P@ssw0rd123');

/** MySQL hostname */
define('DB_HOST', 'https://c05.tmdcloud.asia/');

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
define('AUTH_KEY',         '2|k.k4n?%(#MKM8e[D=`u]ROsP99|[f}l.AMYa{CcX,)83Z,h0A5PCb(XCl+s!u}');
define('SECURE_AUTH_KEY',  'cR~]/|ivLcBhWxTVM4L5g2HuXvQD;>cyBEl9Qr0ab,u<+xO@}@XSjE<5R=)OvHgx');
define('LOGGED_IN_KEY',    'chbO3<>l^]%lF555e:OCa4fDhD+bltf9x+(50sARAscDA6A!90^.[t.G=1l.CB-1');
define('NONCE_KEY',        '=/K<l/0{j@!spSv}q~OyQY[s^p<{]Wh5[gr.DxIoT;$S^[a$nE>fh$hL8_khBdeR');
define('AUTH_SALT',        'K]bV*4CyCqj6j0[F13)2jKwWS>q7reG.!+xqD%=80gXSny$XhS2PJ>|/t*;IC~#,');
define('SECURE_AUTH_SALT', 'eU*JMN{{%t_tax59<Mi)oz}BawI=Jspm1o[+;/29[)lmKlx0//$F!oYV]$h<ibhX');
define('LOGGED_IN_SALT',   '|Njk?WSH6<,kEi=Vi#~Y2v5|!(.l^VVd0sxpR-D#Eb>~k:q);P3`$RQufl(D:dZ|');
define('NONCE_SALT',       'F,~@1p3p`,S+@:t~%0QZ>E6M`s>I-2j)WQ(7[$ 2EsC~O}2o2q7g:o$,w/Wy4+/r');

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
