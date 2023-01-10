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
define( 'DB_NAME', 'Lutece' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'P,:2}k4a4~um+^a0yN81}B Xc2ej^1_z]SWv>c#3.`l_T)Z5|t#U,=shfY~r8=H(' );
define( 'SECURE_AUTH_KEY',  '8uP1]5XR[0k*)&JQXuIi81,g{K-yy_I|=Fb]t&~VL;~HF(U.6=#qONT5aV%3e=EJ' );
define( 'LOGGED_IN_KEY',    'Ycob6?$l|w,v72#m4))!/&r$ZZm6v%2+7KN-#;)nSkITJ$z%*947=f$I&9n=Ui?o' );
define( 'NONCE_KEY',        'rN!5GAkmzIE7a;8udO3@,1G_*r(JQ885L@JzQol`Jh1~eYi?3KFVh}V(i$nL-{^D' );
define( 'AUTH_SALT',        'vj 1Q)IY1sP}wH(^<PpcfwqR6YPJmsa^V4epH-itSlcRposx2ofM=]}srqU.K9[c' );
define( 'SECURE_AUTH_SALT', 's<b7~*Jg-0ol^6&b|N!gqftQ1#4e]OOqP?tI0/q[c}Q/8IaG5B8g/1b=[RIS7JoQ' );
define( 'LOGGED_IN_SALT',   '2IIE`S$Sp`8*(+?Uot XV$e2/|65LZe51Job^eo1.i^49HJ.2216Exy<[fp^Er$3' );
define( 'NONCE_SALT',       ':,iFJ~1eA7O*HV*f6](nOv^o`hVG*q-B_pnQm{5|oR%N9g {r7%(r}yyQ[b=r:>*' );

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
