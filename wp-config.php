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
define( 'DB_NAME', 'wp572' );

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
define( 'AUTH_KEY',         'Jm4Fp]WVskVG;(;-R6P/;e</kM[:yBesMp&@QY-R*^|e{5~EbTKP~`PJUVeM:SA*' );
define( 'SECURE_AUTH_KEY',  '1<]ImDz]VdP-`,$zml3JDE)5p.odM_2D D%2gaZ0haM7[rM(lAutjd9ZuYuKF]#K' );
define( 'LOGGED_IN_KEY',    '$C@Nj*srCK?SaChLz<ak2QUnqQ,;3ZN>/?Z+$3:t*PIr<4lj/T2*>F_~c=1ig@O/' );
define( 'NONCE_KEY',        '$=od/|T X)#?6qs;CBRMO6[DM;P.TH^n,Mj4BD-o.W <c!J+?>B<h?Q0z^*SQLn-' );
define( 'AUTH_SALT',        ')r#D1`=4%f>VG5MC|A]I+GTnXgOS4gfu&b|848(6LedsvQ6iMf;^)?F1M;2)o!sj' );
define( 'SECURE_AUTH_SALT', '`iDz5W[agTcr=DX0RZd;f+k:9{J#zL2^%gH*w]0/k0#y0N~K01{QQVm@Q0>$5#|}' );
define( 'LOGGED_IN_SALT',   'bIR!k&ME*jn <G,P*@8m+_UY%$R$Wa1?>q}7a:nlOViDDN:)@#J3i4UG11(:NU13' );
define( 'NONCE_SALT',       'VC~/.PHrhZ+,k Ej<uB%HY^(Wl~V*hNL3T/B-[kv%yVdA!b_R@JNCchbdrM=#*X*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ds_';

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
