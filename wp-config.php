<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_0smzi' );

/** MySQL database username */
define( 'DB_USER', 'wp_e8q8i' );

/** MySQL database password */
define('DB_PASSWORD', 'FJWsm729!z');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'H[q67x-2_wL3/i!1g_!C5|6dD9l8@XR4*0#u;(WF9Gbg1XX119whh5)2tA0Uz&0h');
define('SECURE_AUTH_KEY', '-5cp5]3[vR5hj*D(y!s/7iM(B;7x9I1WD_NThAf8980qp997U+~5_|!C2|eOwJ9g');
define('LOGGED_IN_KEY', '*Ui%rUJluW&|p#7o+0qx86944ayUHrn!00nXZfc*gLo~LYj12HeI;493_[L45f4!');
define('NONCE_KEY', '5J8*)|_lh;[kihJ8nGfFP7-CD[kZK5tl6&w2F44#*-1i3s4-ZZ1M61KF/!67|x|6');
define('AUTH_SALT', '4!N|3q4REBf+w3yYN@0[P;wq%uPUZEUCF93/39/SWp0Lo2A4J_(H-53)91kEy&2K');
define('SECURE_AUTH_SALT', 'gUTYnlTALUrK]40(N)/pr+6s2+(n4v/197H7MF(hXXAgBYg([00*5~cz;7Eq91u(');
define('LOGGED_IN_SALT', '+3wRp/]B#8Q*9;O]aM+_0GoBd&F/ZKz1S!Hk6%|Ll@16YO@Ka]q-n@PlQ;Fb:xLV');
define('NONCE_SALT', ']_nx5+%I3hH5/39yQpI3F1gv~yUSx/K%F]+CKp7ba%rz;7z5]MtC|R8@a;6%4Nf7');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'EoZPnv2A1_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
