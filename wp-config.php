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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'samahatescontent_db' );

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
define( 'AUTH_KEY',         'p{$a@M5 vM~<7}n2q0acb8$=|mMao3<=@J#o%{[>hBuS%V)8^~>0F%LNMB->.:]q' );
define( 'SECURE_AUTH_KEY',  'c*j)(cnZewO$I$<`Ew2hbk&j^>+^.GtKs*RNIs08,av1h(bV5ep%/cyMMn6Y6#ln' );
define( 'LOGGED_IN_KEY',    'T07>A>M,_C?KKJl*~^zMnmfb:KbQtg?;[)BJ??#P0tu)9f~mK99%G&CCI.}Z&l/.' );
define( 'NONCE_KEY',        '#Zk/>N|b[]%Y-tbeqYl(QPoi3=XE{v/407X+~T=6pxbe:ichzdGwZfl UQm&7v7W' );
define( 'AUTH_SALT',        'n7s}O9WKKNuh#Y_/}/9i<hbjBdoLd75yS#[ti&EZ[:Z*1%O4E$zSOw]lL+9+w]<+' );
define( 'SECURE_AUTH_SALT', 'VKsk%R=t;Y^vZn$6~-x_~;>SE^RA.d`K1 smUV%g2R(5d3YX;yCIfg5]1O#lW0zQ' );
define( 'LOGGED_IN_SALT',   'H5<vYWu/^A;h`~tR3rI-hl/x*Bh O$a#}.m7Yhi__b#RaZNq4B~T8n%Qm.LBx%dr' );
define( 'NONCE_SALT',       'T_y};J]pONjbXXqRe@7IR&| L%{P(uoi[l*(BAo=*8/S#E}dHiPNDs6~:HrkA)^Z' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
