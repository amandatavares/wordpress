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
// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'K_NAU:;M8{qK&2y.Tzr<jU{l+i ++kH2_$BP[d;]HEeU.T,98txI3:uCt|o|*GgU');
define('SECURE_AUTH_KEY',  'kX4e$3NWH-J&y-@J$+{V9p{ZZaRov+=bIR 1/)Irz/:wAnsqQFM.zB>&EUo2(fyE');
define('LOGGED_IN_KEY',    ',#rYUsrXlneb 7bLyodLtq|%YJ;7B@]U83x0ob+9UZzgGKrGGd>=,bT0A7MAsj9{');
define('NONCE_KEY',        '`$T/w20scp#(*~@{Rq&O!JHZYRayjJ~Lx<||oXzSP<&DEoZT&J@.paE]!p-N#|F$');
define('AUTH_SALT',        'nKeW3vr<lX.?LjdC)V> vw q4b<WB1iM3lhI`3h|e<]+Z7I#FR:D )ak){D;L%LA');
define('SECURE_AUTH_SALT', '1:>-,G *5Ft9xBRekF-/s1TlYX.ZXY-U2*3H4MHM}rG+g0qEo2;<fuq_ku7{ji2&');
define('LOGGED_IN_SALT',   'L0o&|SG-}*mTU</MDh+I>`hv`|$jl-m])u:+0R=?B+%6ZWR@[($n?bb_MX8-T8aC');
define('NONCE_SALT',       '$LL:*?}|K^PaQaZNK(W;RF+na(Bds#;g}*C/YR_L)gZ=Lu5{D>Wz,_:!^`%oTdV`');

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
