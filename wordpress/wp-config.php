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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          'KW!aq|RXU*d#Q(aGajd-ZTlhLv2C{J9%(}198ftDh=l~hw1K)Qj(NWR14n6LY3};' );
define( 'SECURE_AUTH_KEY',   'P&sAq-8<s*oF=F s]u<q6jS4i*r%p$xfKJCoC-5oM]l7(t*n/%KKj[jHoouE/3sA' );
define( 'LOGGED_IN_KEY',     'EZ8_F>fB%g?Jjh?qp>E|83v62)jI#xQ> Gb6qUNAlLD/,pF[,KBEc%i?Uz~R$FYL' );
define( 'NONCE_KEY',         'G(pgGfM.)M$&4T-x5jzyBTAN_Ip*}u-l2sZAZdI-OiF3cC{dQ[w6(G6}syZXr?^s' );
define( 'AUTH_SALT',         'i+2lwu4:UJ3cE0KSqP:W:w^dUPs6kR>zcXucgR~4(?qZ+$~G$~0>xm51V$$+xAef' );
define( 'SECURE_AUTH_SALT',  '8SRK/(h(4LVt;1U{,;5ei&B)lb{JcaP/RH68GpNPAwy>}&2C=nkE;tZq1VHcOYCL' );
define( 'LOGGED_IN_SALT',    '{);lfv{w+n#x;v=LP?=p4E>VXQ DRa^I;5YN^:4vIe[pclSH=EK#bsBaXfYjh:xk' );
define( 'NONCE_SALT',        'U,Hr9-=88]@<UV#:X>sZvA=2!DzBvGauS^7,AF<gZ_5A))~`1vo8(Cw$hB`+n<N@' );
define( 'WP_CACHE_KEY_SALT', 'D8{COB$j)q<-U,`8RfSmtVN<X0qFAz+$ ykV$7+DloXb{JSFp?Sb{+)zR%?9xv[I' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
