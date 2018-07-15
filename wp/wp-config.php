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
define('DB_NAME', 'Dyplom_v1.1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&SBqX*eS8>0|@ki}uFSSAPqBI7-*1&75.2Cf[1Q-S8g$y=uMQ/]$MDsi;!,Mer+L');
define('SECURE_AUTH_KEY',  '++0]RAk`-[=_ziLK}N2x4`ek*e5zUOLnexJ#gV}we);yUY8NP93BgdV.PTr_i[46');
define('LOGGED_IN_KEY',    'G1y9Clrrl2nn`pumX8eudt&=|M1}d06hh{ c~pmHhU5ot|Q]o#1w@DJmTU89(bk_');
define('NONCE_KEY',        'AFFGwq}UOXav5uWXsn9&=az6Q+mnT[aKf}__/<z+F}s#3A*Q`mQrUoP%*P]Q?d3W');
define('AUTH_SALT',        'Vl2!0#:iwwI-M7DxPhVeK8?zf14m:P_=Zx@)RSX3IXBSK0NPy~uZQssA:TRd,WgD');
define('SECURE_AUTH_SALT', '~|5{-|N2g~HlEVL_KCm!G%F(WzymeTOH:hd&sMC]-p^UJJNZ8B;eB).u&5.RzBcf');
define('LOGGED_IN_SALT',   '6ekYQE?{XZ_=t5R%rI#H!al{?YPdJ8tYAIZ(/b0l4J;z<.oBy-=O*hn6,n=yN*MQ');
define('NONCE_SALT',       '1_xD?]*s-3l@-/Ufi0U=Zr}An|Mj-7nHX*(;6i3efjPV e}eE<|Q%XSawZOd^@$#');

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

define('RELOCATE', true);
define('WP_HOME','http://dyplom');
define('WP_SITEURL','http://dyplom');
