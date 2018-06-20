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
define('DB_NAME', 'd73766sd241043');

/** MySQL database username */
define('DB_USER', 'd73766sa204750');

/** MySQL database password */
define('DB_PASSWORD', '5QstxcP636C6F29PE');

/** MySQL hostname */
define('DB_HOST', 'd73766.mysql.zonevs.eu');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3PNIG8qj3A1CnEIlsTvFQXaJjQFaFIm4c22RKR61RxZmZePJKM2nVM30YUUwJiwY');
define('SECURE_AUTH_KEY',  'aMQ7TZ7mJiMpZKVqC0FPguABmB603PRPIIXQvfckUpiYSP0t69FTD4nSXKYYVj5s');
define('LOGGED_IN_KEY',    'w7mHt0Qfn2XaZ6btFTwBvkjYPwbjjhjD6WWQCf6X8v88F8xvNQvWCgECd2DzxDES');
define('NONCE_KEY',        'tMljAKvpXfcKoOopBufxTI5aEKHXj70TuTYJwtmepMQn1nBvzwPKTF7l5viPSX4V');
define('AUTH_SALT',        'CVg0vyltFDZUY8rAJGzHBXCJHMGFLooM9nUxuzDxhrWnd3g2HpJ0a67dHUOblArS');
define('SECURE_AUTH_SALT', 'OQ7TnwroiSyjcTb633WzOyj84LwT75wQAjhJLfVhhD4bX8AubSK7gLncmCVqpqjo');
define('LOGGED_IN_SALT',   'iLNEJR4pkcttkkrKFXnYG7OCLVY3O7vHeueZX0gGn3iPsGh68mWigqV69AiHpWAN');
define('NONCE_SALT',       '5WlaYPpVPwDBwV9nXjFqZeVw5M1pEvcdjaNnqUBfKpjV4T5mNDqGIUJIJyto8b6Q');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yjbt_';

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