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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Qbu.fh7T jbPTMZD8.t%@r?y`{0[:ntHFux9N.iQ^[I-zun[kaBF=@WkMMG52+-k' );
define( 'SECURE_AUTH_KEY',  'TR$m*D7~rnAx,^wq/k.R3hkSp+/dc(5iuvZvZ 8u%84C=6H=e.m9Uj_P-4d-8qgf' );
define( 'LOGGED_IN_KEY',    'tkt~o|=AK0Mt:a=G`I: ~H+mpjt[#o24=4E*j^d=w0@n=ZvIc2Nhu*N7H&c]-Vzq' );
define( 'NONCE_KEY',        'q80*MkQ`O-i.rrv>6uqj#B@j=8(0P/Jcz6sjwsq#)W3R^yt U@WB3848HbKxk +l' );
define( 'AUTH_SALT',        'JI|dX4 :7&ENIjx4TP8>.#WKG4KP]rtgmF[0n,s -/TgH>TD4zFh_7y+Q|V-P{>e' );
define( 'SECURE_AUTH_SALT', ')WO9PJ^YE,qRFj><p)6^KbA^e`r$U(DIuzcqoyP}Zi)N%{oTHxQ`T%|fD!4Y&l[g' );
define( 'LOGGED_IN_SALT',   '[d-vuM0/dKPCs!y1K75gg}OJm#wm.5<=nVl&|G?.e{-N=`^m2~D+#ZR^w SfoG/8' );
define( 'NONCE_SALT',       'Sr025=XjP|G9&i<[goo[ @tz(X`v{MKZWXw#/Gt#k[JD<{{2pjq~]Fh6KOfJP_w*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
