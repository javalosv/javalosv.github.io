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
define( 'DB_NAME', 'new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0fft^<sd[Ju*?vJ1Jw9puQ}n?KSbu~}MeJW11d@W<U]HFiL_r-me!5FHE_. ^KhA' );
define( 'SECURE_AUTH_KEY',  'riA:ZZXQ,{m-><d{s*zIz0mDR`]9%kD{_WXa:F.<ew7r*]Y|JpOv/cYsui-vn3,l' );
define( 'LOGGED_IN_KEY',    ' P+uuh9{pG|P&u2En8)32n1hkx.r>f/l(;jvZ8+6kNALA&5Q?]D-kw~@h79C#Vz-' );
define( 'NONCE_KEY',        'o5hdH<h|Q0%[cf#]M?krs30u5r9Q)+ j4CbiG>vx&6*)X82Zw31f(!82q3d%MApA' );
define( 'AUTH_SALT',        'VlYh<e`)6PiA}Xu<m,?1lD%:ZanN=rHrX^Np|l$]^P31d}{$X#j|0VBbh3eY=}iw' );
define( 'SECURE_AUTH_SALT', '*COLAwP^eBE1<>.c)r|GK2le>d#cK>$SWT>O-Ur>r{ TLwRj~AQDKO:g/G:/0Sq$' );
define( 'LOGGED_IN_SALT',   '{eXsDU-E.MF B@Y]XUBICm8zyd#*7os28x:x^V1y ,5CO7kCVUBA!n@1Cm#%4+U3' );
define( 'NONCE_SALT',       'qNA&+KU.8`_)a`TDB``sJ&06%i]$lhL<K/n01u$|92-8l0JH%3aPp(sIu`GbD*BT' );

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
