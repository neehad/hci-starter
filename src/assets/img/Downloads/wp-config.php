<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'novalic_wp_tkjb5' );

/** MySQL database username */
define( 'DB_USER', 'novalic_wp_ftwyv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm&*_oAz4x*OM6Qu0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Rkf2U6U6S&Q]5lwQV-F*]4t;&21s9@_Sf2Vzd9]7AJ#5ru9L5a-Lr_/7X1xvUK*u');
define('SECURE_AUTH_KEY', '#+1/2#Hgr(P+3(!2:3RpT5XB5:wbV%-:BC8uy03bOJ&8ogyMRu9H1UT12ikP@Tw8');
define('LOGGED_IN_KEY', '|n|c*%C)73J5!K5cMvZqcB12#N)K!tjPBoR~&sf-&2Ru95~g3%*sLw84[0f:6d0+');
define('NONCE_KEY', ']6Cmi:X0w*_5e7A5imblMy|0N1V)Xy0[b]v7WM44#Q]3H977Hia!abvIh!-;279C');
define('AUTH_SALT', 'q52-:HWy(:W:e~7XUY56mB2OB7e-Sb64T/;z-]#uKXF~j[1p&5E71D:xf1Frw(38');
define('SECURE_AUTH_SALT', 'S5q0d1:Upv2)Q|;0SA6DM%*~oR1~N[2tQ0SghLyq#07G)Oe-+i2-wb;a-B(%Fc0%');
define('LOGGED_IN_SALT', 'q7]6r|xLz3&Kd101zg|Wp+BD+&#j7cEssV-@a4Vqs-s25&P43GtB9o-uRK)UOclv');
define('NONCE_SALT', 'i;f4*|P%06!CG777TSz0999uXz)44878g1-@R*qk2Yf0l/_VFagEJ0]QwS_NEh|!');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cMTuzSh_';
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
