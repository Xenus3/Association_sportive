<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site-metis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/site-metis' );

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
define( 'AUTH_KEY',         ':gY+<gfE$+W+W71I$)g?1tg|k<RMJ*^a}Uy5/z%REova5(t|nt6XUQq8x}U(z`]1' );
define( 'SECURE_AUTH_KEY',  'P;^m(2yISNGtE<Kw6x-Ml@6%s6z;},Z?GU:=OkUs<qF0TfJ)cGT#@aUs/my(%B.r' );
define( 'LOGGED_IN_KEY',    'R~gU}GCh}=Xa(jh/HkuVmI^Q87cLFU&nt.69;5*=!!SS<-r<Sd]~MP5]qhn5@6[Q' );
define( 'NONCE_KEY',        'vKv%+X;pUUnf;kM_8lgCps3=y!H-A~es,F3ko@Sh_:|0oelp)Q*+)* `rqCpBL`<' );
define( 'AUTH_SALT',        ',)~uU]2q^wdJ&CU.Soi:$ymv}[G+xp9)vEz>EIo7dC-CpvD*mdR9 u+0;h8`V4WZ' );
define( 'SECURE_AUTH_SALT', '6WR5Pc-9q`b()lOz vc?ddnmN/py{:c`G.U*_pv3nqq@35e>pOtwqW`.+/ Lr?Ui' );
define( 'LOGGED_IN_SALT',   'TSp{C^?MtfsD$ZTFi6BPv4jqbXYm{zOAKnYbM2$I/#[A=5+?Q;[GdfDOU+Qvi!_r' );
define( 'NONCE_SALT',       '1O8f4:)Wp1pLVB0g;[:7S|jut+_()8V;LO)(s6`^(]sQr9Jy75I(:_=QYPi&I,/t' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
