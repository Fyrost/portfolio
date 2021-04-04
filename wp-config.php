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
define( 'DB_NAME', 'portfoliDBmgarm');

/** MySQL database username */
define( 'DB_USER', 'portfoliDBmgarm');

/** MySQL database password */
define( 'DB_PASSWORD', 'duD8UOgar');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '!|rzco,}zckQYovcFN0BYgJ7^>BJ}z^jr>3$,nUbrzfnQ7FbjMXAI{3IQ3^<r$3A');
define( 'SECURE_AUTH_KEY', '@cw@gsVcGkrYBJ08NVC|}v@7F>v@jr!>vYgJUrzcjQ3BQYBN07^>>ryfnQjrUcFQ3');
define( 'LOGGED_IN_KEY', 'QBM7,AM7^nu,y^nQXy^mPXEMbIQ$.mTbqyfmPXEbiLXAH;EL2A.qy;A.]tai+');
define( 'NONCE_KEY', 'lCZhV8G[1GK:5~|-08![szdkw@godGN|}v@goNVZcFN08Ur3z^jYgrzckNBJcjMUI');
define( 'AUTH_SALT', '*-~hp~#+elOWpwahKSGWeHO19_]CK:5~s-[1-~hpSZw~hoRZOdlOS5C1NV8G[:w@:');
define( 'SECURE_AUTH_SALT', 'SdSZCKZhKS5C#:KR5C|:w~:5~|owZh@|owZgJRhoRZCK:4RZCJ}4@|4C|:w@ck!>r');
define( 'LOGGED_IN_SALT', '9-ah~#pwZhKShpSZCO19VdGO18![9G[1-_ls[1-!ksVds-dkNV8GckNV8G[0GN0:4');
define( 'NONCE_SALT', 'TEM7TbEM6*<6{3$.mu{;y*iqTbqybiLT6EaPXAH]2HP2A.{u+29.]txaix*iqeH');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
