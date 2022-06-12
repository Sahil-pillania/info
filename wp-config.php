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
define( 'AUTH_KEY',         '&TR7|kLt,ul$m=yW7c:<JQ}1ojXc|s{s/28ZL?AnV7<%rRCon%;-g)+obR}uDmf=' );
define( 'SECURE_AUTH_KEY',  'y-7yPSe}]6wsqM|Vx>WPv$C>P?[HqT|iXi%~DoL#lY>16&2r6UL67z]*um9_%1sV' );
define( 'LOGGED_IN_KEY',    's,#R?7uRuR&p+jt6ho3/[Zyk~+mACy]hM A`T3q2g%?[q=U^>Qj43KyNGDqH~,**' );
define( 'NONCE_KEY',        '%25YfY ?/a;`i*l(@</n@:(G_6C=WJ_-`a0V@ jP rJwDGJ-;<}M;=3P /%u/TNe' );
define( 'AUTH_SALT',        'B8#ie6 %*#jRsz.9uUx8xtkUzyw)Qx)amWcMvs$/}Si$w0ylz1~ldcZQ._F.N*YM' );
define( 'SECURE_AUTH_SALT', 'W,H2O%tQ?}QT?{r-]DtN3dd:6A}0sqaIvH u3]}%s~4;-IeK&7ywjcKYTN#k}+O&' );
define( 'LOGGED_IN_SALT',   '2(|Yqqc[yX~8(+AzsT2Zt~{7Y}Lf?[x_ee,<A-(lA@]mvO8^y]^jt v@#]?]GRlB' );
define( 'NONCE_SALT',       '=D&_|?8MGv4sOmq{{7oj7aRX/i!G%]|LI]Ao3h&ZJ|GXitGJr+|q~1GfqHSJz`s$' );

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
