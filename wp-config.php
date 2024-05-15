<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'websit19_kyblc' );

/** Database username */
define( 'DB_USER', 'websit19_kyblc' );

/** Database password */
define( 'DB_PASSWORD', 'Ardata2023' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'cmcepc6gejoel7xati38ijnol1xiyyl2hc9sti4umbnbdsrhrf1ri2gnpusp1j1e' );
define( 'SECURE_AUTH_KEY',  'le1lqrwcvd4bzvcg19pqicmcce0fobgm5wgea64oq9fgbmkyvoysyhpzv2acsxqc' );
define( 'LOGGED_IN_KEY',    'rd6k5oixqgp5kwcmdbbvuhaimt8eginpblqaltcf8iu2nujwbuvq1jl2vgpgsndm' );
define( 'NONCE_KEY',        'd6njdnxzoyjnqom0vke2zk8io6osmhkksfbudaps9runvefubwtl6iot87zvrp7h' );
define( 'AUTH_SALT',        '7tcszv8g1leus0tywy6kzxsbq1quftzhg9gsjzfgpi7p5nxo96ogf47yf85ncv3b' );
define( 'SECURE_AUTH_SALT', 'yceahuykmvwau0pbd2tpz9rf4zzyzf99iwn0fgtg8xkthg3me6sk07jfmrmzvo6g' );
define( 'LOGGED_IN_SALT',   'crlcrgepjctlvhlgevkbwv7d0cfianr8ceaqf0nhw4akysrk1ozlr1xpqacqxj75' );
define( 'NONCE_SALT',       'gs36qvdrv3dqhk8nl5atza80zr4mx0j24deotpnoc511nxx6h32gi7sxrjtf46if' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnu_';

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
