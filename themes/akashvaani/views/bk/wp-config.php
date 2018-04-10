<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'sdinfosy_aashrawebsol');

/** MySQL database username */
define('DB_USER', 'sdinfosy_aashraw');

/** MySQL database password */
define('DB_PASSWORD', 'Dharmendra1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7348ixwfibneont3r5lvgryrs347ogq0hiqm4otpcoslqnr64rqsmyxxu976fanm');
define('SECURE_AUTH_KEY',  'd1lgsalywpystuuwpwcigemrivzpk95jo8ckchhtr9k2rcqy12zphvqeefpqav8x');
define('LOGGED_IN_KEY',    'fdffg2994qjtggvwlwnnfx0yludnefdpcbnumvdbux6mqjnxsn5bpdk9lipknb2x');
define('NONCE_KEY',        'cp4pxt5jwkhjnvafbqnci5mtlowqt296k7n8abin7pdqlkxzy8oiq1s7xkjauwfe');
define('AUTH_SALT',        'nqvgrqepebkk8terd18cyrg5ueejd9tdzuwaagja0ntm8ylqboko7n8uuq9idtfg');
define('SECURE_AUTH_SALT', 'lduxmx6j3dodiixhglx0qvnl9yth6jwlb6lx5inmopsyh17pov0nzoyrpytwpevw');
define('LOGGED_IN_SALT',   '0zfconcmud6q6ndqkwvhxerar25cndmyoevc8jmt30ync5rn5pg3tmfs0ayawtyu');
define('NONCE_SALT',       'ztizkuuq2horzt4gwdlld4zvf2qafdhbtoxdvpeqk2x9pkamintvw0ewzddfpdyj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uxom_';

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
