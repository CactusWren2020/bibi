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
define( 'DB_NAME', 'wp867' );

/** MySQL database username */
define( 'DB_USER', 'wp867' );

/** MySQL database password */
define( 'DB_PASSWORD', '2(5p5FS9D-' );

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
define( 'AUTH_KEY',         'tsrgxjw1syh1lp7lumbl20ga9gfuralxgwfakcxzotuocadqhjbwstpnap1sqn5q' );
define( 'SECURE_AUTH_KEY',  'x0eisfev48bqlqwsflyo0lfinsijdbxs37nmcolqifxqmt3dtafbuymmfaxmfhsi' );
define( 'LOGGED_IN_KEY',    'lyijcahjo3exwufok8tzehlgxj5auza02ihry40doophz9mbkmcvzpmgvd3scgbt' );
define( 'NONCE_KEY',        'fksk1guedefn15oc8pmbz8xmzczxuelbizpdbkzmyzohcawvzvphndbrmjkqpky5' );
define( 'AUTH_SALT',        'asxupkzzj4qbhak9foxo2d1yj8axat232g9dovvejlpkf6sghlh5xbknjvk1fdqo' );
define( 'SECURE_AUTH_SALT', 'askwatdldwtnsycleptt9hpag4ys8kduatoygbir86o6qbdu54xndjvnqq3gpbdz' );
define( 'LOGGED_IN_SALT',   'ep3mwbbvlctqpvmd8k1x92crtkkfvkwm8vi1gkiffhgm1nckxkjkiseqsartxzuf' );
define( 'NONCE_SALT',       'rabmi1i5u0at26z4ihsi9qhv1hsyb9eegfgnb5gp2wjavmhcdllq0mboqwomubig' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpaq_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
