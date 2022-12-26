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
define('DB_NAME', 'unicoll_main_db');

/** MySQL database username */
define('DB_USER', 'unicoll');

/** MySQL database password */
define('DB_PASSWORD', 'unicoll#321@456');

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
define('AUTH_KEY',         '#N3Kz2hVuBiM3vdQMM$`a<8K4sP+3%L,Imdg2)IfNQ3,4ORpli?{($,.+lafDaM<');
define('SECURE_AUTH_KEY',  ':T0>+V{1d9[Z2dkG-15OuWc:A}-L#$MOESjt:}p(+&HOW& pl[FAlXyS//:3q8,I');
define('LOGGED_IN_KEY',    '2Pq /S7CTN7mV8T(9+jN|$^FAmCsGhR^@[i^9TH>FkORf<] 1Av,}(5(rPiU v)2');
define('NONCE_KEY',        'Q!sJ-__VN@oNAK:qig3WVDB&lROTvM|G:R3O^iZYnd!_# 9@79(ANzCHs*}M3oyo');
define('AUTH_SALT',        '^zuPN95Gfc{d^:`_#]s?`kpL!v*DqX,Z.aNU}jEI8pQAnQ*1<j2cNP2X%:Ew2`n>');
define('SECURE_AUTH_SALT', 'u:;h3.0%>#-zry^)f{zm$R-w0 3%CS4tQlLm)F$UL>B5s@76HKLatnGp[oI^,1y~');
define('LOGGED_IN_SALT',   '5:{iXdja{8w.^Xabr|O_;|OLRV^tSAcZvJSxcDJ1osW!o~p}6q~-|f|}vAH*w==f');
define('NONCE_SALT',       'o8ds#.-2%<Ip?+#=a.%FgDV0g[ v:]>S5b^yx)5WS7}se{4;a;>w_@4%+z-zNzM=');

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
