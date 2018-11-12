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
define('DB_NAME', 'i3901137_wp2');

/** MySQL database username */
define('DB_USER', 'i3901137_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'N.8nTAaQ6RljAhQfWXN43');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ChuU1oRlNX0qbz9rzS4hQbfOPtb1pPtJxX1oRlJq2YGQVwsFVip6abnDBhvVbPCk');
define('SECURE_AUTH_KEY',  'bGVTUL0BvENt1oAWfY4TSG9VSM5FFG0tlN6gjdrD23R5qjgxyiFH5XGM35RyqqyP');
define('LOGGED_IN_KEY',    'UtsypA2kiaM9gU801Orzuqi1tHT0SQr76SwLyu53WEC7TMC8oA5H2LuBpGU9LKfj');
define('NONCE_KEY',        '1q0VO0wqtVo30mWnZaGjT7IRLf3J8XYPku7WymHgx9qE2GiXLUVN6aVC47Efmxfg');
define('AUTH_SALT',        'ra8qNC1EmCHbjXL4qnvUPaJONH3yIPt0kDfWWHaBsvoVM9NfHiIohL79tsBGqtjI');
define('SECURE_AUTH_SALT', 'WSNxlLIcYghGqZ9koFkBORZvvGzf6T8eJMgwS6UZuF57Nj2WNNH3HOamvI1NAMvN');
define('LOGGED_IN_SALT',   'ExxofdFTGG9SCc6hkZdFQuyZXFmAZeuR01edwQaFJNU1JuEbP5eiHMTa0uORFHqJ');
define('NONCE_SALT',       'zsXJd8dn34MmInY5vea8c1t000npUmMITErHP1x3Q8D5YdBpuSxuFM2ZvP5DTzK2');

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
$table_prefix  = 'wp_';

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
