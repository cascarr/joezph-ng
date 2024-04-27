<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joezph-ng' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9RB(Ft^FIpdQk_-<X5Cm3A`&>43Rf0zu<(?I|NUb-Zt`&:!^oM`i05WOI.(lkkvd' );
define( 'SECURE_AUTH_KEY',  '&y{.F,2H!I+T2SJ5_@PPG9s+9if,`u)m[f9@]jS]^7r:AV__{eV#+PI7(I:ggI<R' );
define( 'LOGGED_IN_KEY',    '9;K#@Pm=,dtv`ltlOsS5/%fIK;`ZhPO*|lL}qdzZ:KP4`d<See7n1B^n9{&r//gj' );
define( 'NONCE_KEY',        'T%D!&]w4r{!bk9Z>/uU-+tE 7KAeQP6p^>.L.a|Pkzmf,rW2!)CYJ_0`sEXJC{u,' );
define( 'AUTH_SALT',        '>PFd9y[(Q}$E&^G#Kb@)CK`Hkogkiq@;5jKy?s#c@&/&LL1bxwmO&@Ch+`GwI_ V' );
define( 'SECURE_AUTH_SALT', 'uV/;el/,&Ob.uH)l2<=v?9/{Z65+z0Z1?VNW)YeqAZc@YE1hA-.uQ]NHePGB[S{c' );
define( 'LOGGED_IN_SALT',   '+4aa.J(/AvOXO+}hU_su=*0p0(EFn|a56g3XVMx<&Y*LrLd2+jd.f%1&aEN~^<DI' );
define( 'NONCE_SALT',       'IY9VKLpF*,7xZx~/7o{79bL@cUQ/-R8QA,n!]6meP[^rozlY/0k@}E@?D{)HEN^:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
