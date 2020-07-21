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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'ZtV6JoX/U6/m9dCnxb9TKjGCyF4+VuT9LtK+8kY8BA5rY/CnE0Zg/J1vqSJ15T1y0lGdK1CNuEMP+DdgKJ4TZQ==');
define('SECURE_AUTH_KEY',  'sVH1B5XyzHcsqxNXgIZ6rwVPtTUpjvNStuxvTUGANY4EhhqB6lEeryxW3kQPzDVRimnCnhMuSCjPgjViqVRqfA==');
define('LOGGED_IN_KEY',    'ZbH7r52H1FPP1f/Mu4LlUqGj5BQFu9QgAnggqk0e4GQ6dt/8vB8/hjFo7efq3s2j5IPlFySyuhOl7wNkAQp2nw==');
define('NONCE_KEY',        'm9XB/9jhgFZGXJBtEJpNO4sIyBcM2idAHZde961tiwHgSphaVT1aPNQ8bsZl7WwBPTGHkOrg4RSw88Io3jjBaA==');
define('AUTH_SALT',        '+PrkZJtNrGQw4/pTNroNHd+YeBhb6xp42W2eIUfMYTqRiNHp24PSx5TkQJSKHG5ERDplI5M6c5NcKrctS3zWgA==');
define('SECURE_AUTH_SALT', 'vH69DvTKMoQv2PjXbl6K/A1s+nwgcPYe5TApdbLibaiFhBA2gR0brxVVGCrPmpwSSjIFqmwjZkZi0IUaBqnz/Q==');
define('LOGGED_IN_SALT',   '6UoSZj9QkNybjaqIBTn0H0vd3Omnx/KB39LZGOwRGn9sF0UELYAEPvJFcLRxIrS6M2h907/oUrLmhFjK1K7+qQ==');
define('NONCE_SALT',       'NKfqRZ5lIQg0wAlqx3LUQJffcf1mFgNtTJQNcaYeq2XJR98J3oghCJuVybpuEUEmteBqi4P8VnJFqng/8ie+7w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
