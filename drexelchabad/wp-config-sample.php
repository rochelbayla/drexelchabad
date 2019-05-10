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
define( 'DB_NAME', 'drexelch_website' );
/** MySQL database username */
define( 'DB_USER', 'drexelch_rochelb' );
/** MySQL database password */
define( 'DB_PASSWORD', 'k8ejbh7b' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
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
define( 'AUTH_KEY',         'c,LT#<.)1;V6W;,HW8Epuj3,7O]ztI2c{Z(#&H(I@6 J/pldI/{l|`M0)2x{NQee' );

define( 'SECURE_AUTH_KEY',  'AQrAy{]V({k (BD|n2Rv *kYA#W-a>u(ITv,yW~j_e.2ByTeA8*|D)A9G4RVi4u8' );

define( 'LOGGED_IN_KEY',    'e!l6G.iG=<<)?4;H?^u`cUsAYy7HuQMbjP2E(HwW 03[P(?Ju%4cA5FI}TD-DMN?' );

define( 'NONCE_KEY',        '+ISb7f}@3+ HoOlKq_Z<~g=D#[=1j_,oLvJdk0)JSPw~HIfh2#|Z!x)=b%xxiOUX' );

define( 'AUTH_SALT',        'xszP&v2jxy[45,M,*] H?3P)ddZPpuhkee0ejqOO(= F`2i|V, B~/08cK^bwMY0' );

define( 'SECURE_AUTH_SALT', 'bga1v~!G^vTEcM`8lN{e&%DZ!f1<Vq^BQPZz^wGR*J$yrdIv/[m0&D/!u&ipS9)f' );

define( 'LOGGED_IN_SALT',   'soI5P<VmV`L@N!5oLX`_F?{hiFVdh|FP>$~,0*KG H` Pd_#`5Y1QqUViswttKOp' );

define( 'NONCE_SALT',       '{<!#cp6M6LJ`,wR.Q}n,%,k7tXRnz&aX0s>E!UX3a7N29_fK!Cn|oi5w#[l!JO4s' );

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