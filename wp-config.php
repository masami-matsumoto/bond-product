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
define( 'DB_NAME', 'xs465347_wp1' );

/** Database username */
define( 'DB_USER', 'xs465347_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'ouzs5baslx' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ')x!>?aml5A;{=@W0Uq7p?cyZ`y%9r,Q9cg,B;w?mVDL!_)@Yy,!Xini{N<V02tO|' );
define( 'SECURE_AUTH_KEY',  '6S(Kw1m>dw_!3P,/$uO/~s*NB8F{asVZoj+Xo{@MN%g@Csa.89c#M@l(k/LXJ-7r' );
define( 'LOGGED_IN_KEY',    '6Zw|Z2u#mwl8v#8n[v*aMN$9Di|1ggl]xuj1nVq*BQog*u~q-Yj@,*yxYYlfqs}&' );
define( 'NONCE_KEY',        '1y8U!h}Av,u}P)J)1CF%wb$X|@0h|bb=&p@xHrH3C!--d4B1rnMSJ,U9av$Tr)J^' );
define( 'AUTH_SALT',        'Ue:4YOSB+NDvTbCI;vIV?5Bq-;JC]*Knl^Vqmm|)jl*i9t8MQn7jWOa}+,sJX8|]' );
define( 'SECURE_AUTH_SALT', '~n-[S-I|kt]9P%Eo-pLP{,3|bv?sX,mAfb#+2F55*&*g%{>V)^Gu/X=cFv+}/A0c' );
define( 'LOGGED_IN_SALT',   '{?1Ef^+6,Hlr!cFTS(S+3^<E0gR7.[yVz#O`5Z$px$:KQc%f Z19=kRXM EDd2.V' );
define( 'NONCE_SALT',       ' 0P&62Kn8r2V/`dCE~v3FJWAP{|)3kLY|qzy~~1ssC8OHgsUeUM6gXkRtrZo12@F' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
