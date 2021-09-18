<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'neozink_' );

/** MySQL database username */
define( 'DB_USER', 'neozink' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Neozink2021*' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'GS/5tmzc-MH!A|WCn~n/!F^Qu~ZbQ|L.|`A=vJ.H;tDOfp!Pas+S|@ kVuMl3GM2' );
define( 'SECURE_AUTH_KEY',  'O)=o_cA!^FayN+7Uz@EIBEcUE%*LCj3oG-&3x,RYZ)TUg~VnXcH,Lk_E?!/>%KSi' );
define( 'LOGGED_IN_KEY',    'nM9d-DkE=_B/>Au8^!kEQ=wdoS/d/uY=/ZA.;d1#y7!H1]B:v^Ei_Z;1}6-D fq_' );
define( 'NONCE_KEY',        ' CJI?y2:nFEM1Dr[HJe+*Fu3^)nHd9|[|^z6lK%yP>@D6k{<DDB) k4aI:|;uVjs' );
define( 'AUTH_SALT',        'QGR[ $5#8prkJ/G<ZuDx+Cc01,0?+qQ`*R{x5W#wO4[SX QhiG1T-GkjTF@@rt{r' );
define( 'SECURE_AUTH_SALT', 'ID>A,UDMbo8WMZnGYF4^s?khgj)P?t=!w_BVh%[)Jg[|/Uaho]SF,np/jN;?bkSv' );
define( 'LOGGED_IN_SALT',   'wds-0I8MX nVF@q6P Ff5GZy:}q~tqN*>-,&IMgsnBW<*cPO[,TlZy1+2r5X3_Pc' );
define( 'NONCE_SALT',       '`J3x#r}%O6l6?oh=L.B;IT 6tI*w%-HC4v{kGcC6Bm?:vx.ZxX /0s9gPvGxbx3$' );

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
