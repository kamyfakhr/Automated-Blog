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
define( 'DB_NAME', 'addvegrec_wp520' );

/** MySQL database username */
define( 'DB_USER', 'addvegrec_wp520' );

/** MySQL database password */
define( 'DB_PASSWORD', '0![f35O2pS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eareuayom92jt8k815siit6uzolkjo8jwgqzlamc1lexdsvbgpycdqe3oz4gsawx' );
define( 'SECURE_AUTH_KEY',  't9jgzc6egxc5ez62dxdudrlim1umva7saekdgnya1felrzo4hhct5peafnxnpxpe' );
define( 'LOGGED_IN_KEY',    '9rmhy52jexs4tux2kse58bsl8urefbyval16wpxz5kv09hc6bpu6pkomfe39pruo' );
define( 'NONCE_KEY',        'faomd4mww2pqpho6iykvgk02tijvozoe2duz6anelfzj8mmdz7gdklha5zd1tlsd' );
define( 'AUTH_SALT',        'zzr1qtiwrf8ylzqwu1qlju4vsrjrku82qxt0ztkfotqf2hkniam117eqh2hrvlqv' );
define( 'SECURE_AUTH_SALT', '2h7hfmmiws67jq6szb4lhjmeificde3cqoh8qixdu3rqjazipzlkvyifdekfmkcg' );
define( 'LOGGED_IN_SALT',   'ldwl4jya3lzyhpvgv7ymvn8k7ywx2qpfsb6ukqjelyfpq29n2pj3qf0lj5d7d4h1' );
define( 'NONCE_SALT',       'rvkgfafsdpkninufdq4tjuxgsakfxghde1s7j4vwgeewtavqwo3fdsv3sr8zgzlk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp5b_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
