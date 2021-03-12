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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'm2(r^&%{g3Z#UzyMPu}D rh*^Z5Ye,t2M1|ckoZF2av55FB~^{ =z|UW]P7;H!;*' );
define( 'SECURE_AUTH_KEY',  'YgCRgCrHC&,+9bm8GV/vMDw<<zPF4;]T(}2<8~4Zhl/MEn@<8Nvi~,wy4UyPqo8!' );
define( 'LOGGED_IN_KEY',    '|!}ubeodYS,UeK`gm]p.D^X:kb}+<%B;i9@iy:dwraTg`T/3@h)%l4n8OWL_[T|_' );
define( 'NONCE_KEY',        'AyQjBsOjZFh~u9{MkAA}/Kg:V#6r$9fA9c2W3yfe ~D mqrDW&`Edc+/j+..L(VW' );
define( 'AUTH_SALT',        'Y`p? e =b<{KFjgKWZvF3|fAa#6ZcsnBMj=yOKqZ9>L]eBW9j>rAeL;t8,xO4F]8' );
define( 'SECURE_AUTH_SALT', 'qWlw^~XN%H{6V,0C9~XVE; sRz1X;0K)pp;,.Ok/HIULVuU?0[n^B<CSAvM_X63g' );
define( 'LOGGED_IN_SALT',   'Ex(?by:3h@&!-;rde%ZnH+i-M`Hg|tNeOdbTU*]%-%jIA^u#vR#j.D@^q=UYo$Vj' );
define( 'NONCE_SALT',       'P:Fo@1,eg$}S I&MiM<^yu#jf9&~ @/&Z5[*dqc}a1JwZ2WXyv~Zh4y9@hC0y8fJ' );

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
