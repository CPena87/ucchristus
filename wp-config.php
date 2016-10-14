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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'uc');

/** MySQL database username */
define('DB_USER', 'upmedia');

/** MySQL database password */
define('DB_PASSWORD', 'upmedia8039876.,');

/** MySQL hostname */
define('DB_HOST', 'upmedia.crcq0jopmo84.us-west-2.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6Vo7|;e*tr?{b VO? >Wc8!`+5BxZ$}+xA@rBU!8QEO.po6iVNH-Di=rKE4C%`3K');
define('SECURE_AUTH_KEY',  'h .%UTnAzXRf@+UU0s|**gy|<9`vk@Lz<dnu{>#fYL^jA]12qb;Pe=g9W&H./DY!');
define('LOGGED_IN_KEY',    '~J-T}vmr7uhlN8bHnhza>l!ED+Mr Jh~;sSHS3#82y`wGOy~,b)/-LszNz,%hwI[');
define('NONCE_KEY',        'v;~B!zXcR^`iuqz~r<6akXftzkyM]O69|<bHILJ+6R+>0xVN#dTb>Kmjo|4r|)-+');
define('AUTH_SALT',        '!3=7@Q,e]A(R|xd&HY9=_ODT0M?+|<Km-M}$n4WJ{7T8+f)<wK.whz-]y;:2y9pv');
define('SECURE_AUTH_SALT', 'V^?V2_e,&J8K[7+8?F.r~zGnhg2X7)G_=Y&;+aRNSp~+Es]iH2vskarSPdctYkrH');
define('LOGGED_IN_SALT',   'D|3;4]+N-JS%Dm+^+|!:aX5bh|AsXtv<jvRofh0f+:UpGG4b=|#e&iN${$pPk@Tq');
define('NONCE_SALT',       '3SPs-6Nr{[5OBrhKz;SxkS?lSFlJ-MbN6t7c8i+vt`K?=/Y>A_r+k%im!0q}Mnb ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

