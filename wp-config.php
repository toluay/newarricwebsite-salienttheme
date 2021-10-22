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
define( 'DB_NAME', 'aaricnewsite' );

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
define( 'AUTH_KEY',         ';j#2XNd9LeCx2XzPXKi6fhwxJO.8y~>+%Gloq],TAdXLYADnzJtr!VK@_Jjpd!n3' );
define( 'SECURE_AUTH_KEY',  '| -5{]<apST;ZZ:vLE(t*%@Y}[Xstyca:ohjo9JM/Epn~gO=PR!*^-Ob%PQ,HOLJ' );
define( 'LOGGED_IN_KEY',    '5rVLI63O%2R=Z(_DxbAq3HRr&VZo^Qq5m/vE[UEv9sC_#K32^708.P+2i6zX.v,H' );
define( 'NONCE_KEY',        'de0*(E?~=-W1[Y!v TF:f $&NIlk2Pa*xPO,j_%F7R{2<n*gJ=R^0<w8@,D5yTBG' );
define( 'AUTH_SALT',        '%r Ufh}]v x]FT.m`OUs9%6#Ry!O>0}Q]C@aoav8o6:v=FPbajU0RCG [^zl_(,c' );
define( 'SECURE_AUTH_SALT', '?]n-CG=ubp_#}.Z`oo_a~vq(f.N1RURpf.fv7,wcwH1npR<!eF!~*$uR?~!&v&ZU' );
define( 'LOGGED_IN_SALT',   'j6-/sCM3z}nGgdcVTNfwukP*$2g*05w:Ds5%4]8`4K0Vv^wrn.brNadjOH&^Fe[K' );
define( 'NONCE_SALT',       'aDp~>VY&Lj5p 9M?|,k~%>~sQ23.z=1B7U/^1p[#[F#k~l7a;hdCz<E6>!=+7#K0' );

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
