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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/gregmont/happysundayslbc.com/staging/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'gregmont_staging');
/** MySQL database username */
define('DB_USER', 'gregmont_wp993');
/** MySQL database password */
define('DB_PASSWORD', '][ApS8BP64');
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
define('AUTH_KEY',         '0syswjkbked0ssdakm7xzdkifdmusgxo17ef8zxxax872x5gogluikxrb7ngygfc');
define('SECURE_AUTH_KEY',  'vi1syyqabdzh6o2okmcvi90skp4dkbjudfexjh7hythfgase5lypqwtn7wofiywj');
define('LOGGED_IN_KEY',    '755bwk9yqnsbiaypkbiuhbwlftcp4plfgh9tgxqdonhxkocjm13lzchnvshmojph');
define('NONCE_KEY',        '8lgzm75ktdhszmadiudnltojmmmufxsteravkwvvnpnjj6ccumdw4cyvbot5ipgm');
define('AUTH_SALT',        'n7fah9akaw7kluubdfooj66sl6d2bl0xdgktocnowqsi5rw7vawhhkqynsf2eako');
define('SECURE_AUTH_SALT', 'rl0znoj2x9fxr8immyxxmjemmxmenngumkzemayzimqkcgeod2ywzmzxjsoxoeku');
define('LOGGED_IN_SALT',   'apm8mlkvlagy5efjz7g2fitz4psuagdgx3lvnvoberhwhnkaatkewoem2puynbub');
define('NONCE_SALT',       'kpmwbm8kyhr6aum64wg0bdlfxmdjbveuwdu6u2u3y38brqukqcnkix4twz84b5vi');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppx_';
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
