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
define( 'DB_NAME', 'mlkaweut' );

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
define( 'AUTH_KEY',         ' dRl Os&I7JS;8bO#q`]I6$]K!8>?%ML.J1&G?HNqYo2~LAh%Tn}MyZ|HUL26s&q' );
define( 'SECURE_AUTH_KEY',  'ntz8982,g4+u5^o+<Ba+h+,Ch304X~6H7W3]TJST]:e>DCG^qf4HrvB%Hml9M`3D' );
define( 'LOGGED_IN_KEY',    'f`SLMuL1dwEHC>:e~/nPtBos@oND|eL1P&*c! n>NfAm9:@Xm}S%Q<WLe&m&e8k~' );
define( 'NONCE_KEY',        '(Hiyx .h-NjmfWm6VugPY^b6M`xF mZ[xU-sn@a Mt^ Pt-]YjPZlg-.sT9ZcWi9' );
define( 'AUTH_SALT',        'o77+uk#6R48?f.{9 Qs%b2V4.S|jDOGSd)~r:yq3KcXeo:k@(.5+;7cZnR%uh>wC' );
define( 'SECURE_AUTH_SALT', ')3xMY}3NhLn~$o#L4G.eCb-1A`rPp,8OJ9X97|U#de^q2z{ftz&_dwlpISy`!0Zy' );
define( 'LOGGED_IN_SALT',   ';?CoaKerBOR8#@>;Hhs.#VKphXB`urcR}%*>[7VRarU4&2xBwK/F1|IMF4wO|*$P' );
define( 'NONCE_SALT',       ':B{tBN7F1HudQ;jFC2AA=P8]sqQ+eaP8y `BQuOPIfqK_(mK9h+0D589|=C av})' );

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
