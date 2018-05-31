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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'danc' );

/** MySQL database username */
define( 'DB_USER', 'dylan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'olorin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TQ2S$+b^wHI!bTt(|Mb0<gz$Y}@IibPZ+W*NOB9H[j}?NxgvhWaY#MG> iHk6!>U' );
define( 'SECURE_AUTH_KEY',  'Ljx.9_W3xo*YW(F^6XYFh2S,PoaFw/g-Xe#G`6ED!m.=Q+R6RNi(/.Hv}AB`OG..' );
define( 'LOGGED_IN_KEY',    'DLz&9&]|gIIy6@xxfe;#.6.Lv8uUtmE)`<mSq=)^?!omIc?8q~V|k4}jz&$Yo)0{' );
define( 'NONCE_KEY',        'E0e>Qkgcd60d>KXI+31EixUu&UM_wO!8Rz[vpV$98~VAK!X`4(zvg&~n6r*_mIjN' );
define( 'AUTH_SALT',        'faGq)oqru|B 6`h$r/QJ/B2=kn|2$(/sn ~#jeZ7Bz$p2p!oo;Q{~g5B(h(`FF S' );
define( 'SECURE_AUTH_SALT', '|Et|Z$7G]ynJ(p3J-Ynq06HsVuk=$DXdjDn3<Gyp)Qi:$U(Y[u02G@Y!;1. YW#6' );
define( 'LOGGED_IN_SALT',   '-sBPK%R8ai#|#9P8#Hp`;9k)  Yc<b){agaW[ySEuy37:W,dgn9PI,bO_}fBb<$~' );
define( 'NONCE_SALT',       'Sug_;P*A.A{xQodz;PK<%%>/uEkaEbRk3hgbcw3R11/Bm`%n>!**br+ZX7J-$<y5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
