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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kmakusdb' );

/** Database username */
define( 'DB_USER', 'kmakus-user' );

/** Database password */
define( 'DB_PASSWORD', 'cdijodio23' );

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
define( 'AUTH_KEY',         'UpwJ7L:3Z5H]K e8KMkiNs|VE-vN6T~I0&6tYUMF{n(Iq>X0gpDP1t+S<OD^I@NB' );
define( 'SECURE_AUTH_KEY',  '#~XikkeZFrlRS. t#}7h=i44(gwS P.enH]Inx7zClT!0Jh=OR@?nW`i7oFF0w,-' );
define( 'LOGGED_IN_KEY',    'zKZuA(M$fpuu#/<;{wIyH#BWQ_y8lolrQrJN$t*V_G3y{a[ijs`E$;(vKB N8;LR' );
define( 'NONCE_KEY',        'a+P08aU`J`_H.R9<`,Fj#xH_!s6!y i<|)w:ggjE0Xphr,2iXD<={LU7,fQ98qN$' );
define( 'AUTH_SALT',        ' h}3EMW|yEf|ERwqOa^i3oc7MBM/q]9Z;bP@.A2B&oY*$:bXsNC-+W5V#nKOX=KB' );
define( 'SECURE_AUTH_SALT', 'VZQ7V)lz2}K3>te%-d`5!MA>,*00j] zgXU:Cc6Vxv/=uOw4&9PAbSr!DGgzdW$)' );
define( 'LOGGED_IN_SALT',   'L3nXe8*k6ZJl)|xm,q{/E-sD<;]nHG?E)vsP)9ucicAtQA(0FBe+W+)dY 8om.Fv' );
define( 'NONCE_SALT',       'V8k`jAeYoRz7IWa}r4PUQ0K,4NiP#okI%;x^nj7%<]y.|?Oys}SApllbw{&CRz>.' );

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
