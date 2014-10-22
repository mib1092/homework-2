<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hw2');

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
define('AUTH_KEY',         'eKVL*v(K}z{8-1o(cvtt#_L GK2u >{6^`RI-jCY&pbvdAK4[!Bi@-n+N/)$Y7zL');
define('SECURE_AUTH_KEY',  '=tp9kY/-@5ji,FWONO9j<bI#jL5u_+GJJm.v%4#D{Pk0@CUSnJ[q}>-1mSSpY|P]');
define('LOGGED_IN_KEY',    '}He,a]%iP4 *8}l,m>J|`k: W#9V-i+j>+I>o1%+1QY5*3i=RCM9af{F<TpkZD=-');
define('NONCE_KEY',        '!nPJnyiblXeIjohHmi9[`y:[Pg^k.i.Qp-Be-.nW(#+;9p8=]_@2<&J=E$iI3W!!');
define('AUTH_SALT',        'GVw82%zX-q+}!u9Mv-ul72X9u}n%c9%9j,(-I!@ GI_$5+P/}T4<B{Imj=9pu{CY');
define('SECURE_AUTH_SALT', 'U?eHZu}H5,AP!H(-DHa_Le2wK7h9DIR^>K8-,]SRhrcI# Zi(5ef&^=.aEP67j-4');
define('LOGGED_IN_SALT',   'SXl&?p+pHxZ3+k2REsX-eQ(K7$IN)W=}tRJ#Jb;hA6u$O<qvi8CV.Wt[nC|m7c5q');
define('NONCE_SALT',       '(,974rw/#Ob+)`{+0yCe+^:7%V%#:)ue0BhpjtPP)-<;*-cJMyMl8#!CY{{Vu*0}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
