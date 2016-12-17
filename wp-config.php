<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db661116133' );

/** MySQL database username */
define( 'DB_USER', 'dbo661116133' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iHtRsLhOiPDLXdOvCjhE' );

/** MySQL hostname */
define( 'DB_HOST', 'db661116133.db.1and1.com' );

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
define('AUTH_KEY',         ')2h#8MYPe!oHS&.0ibSv, ^NzP)IT|w|J6h3{-u~q$|ws>n-t+.#Z,4p*2oh#UJ`');
define('SECURE_AUTH_KEY',  'f^aWJT8ezU#Am=l+$]B(d-EH`B,}`vVNuN(~TwVa~Fa`kVGweOFoMLeykb^d$ _G');
define('LOGGED_IN_KEY',    '&S oGx|9Huxe;Z=)to@Z9lh|>2UB$|DY$m,@]ee0y5Wu#{C!kJO{gz|Swe=B-Tw)');
define('NONCE_KEY',        '?~Lyh?Q{S:G|=#Uqp5wpN<h.bJ_z&>+9YTB OBXml%!Fvp)Mf1^,t-n[E2J,Ylo/');
define('AUTH_SALT',        'S;t<D#UTx*h_~0#=QYC6=HO*_i:v+MZ,|MPsgxdE=B5NLBzKP(u3@cE(G3&Om=Fx');
define('SECURE_AUTH_SALT', 'UrHrSJj]`VRBx0ljlX=|le*!x1_YDnQI&i~MFg*[;*-#AVGly;*WKI2ItL)w0:x]');
define('LOGGED_IN_SALT',   '-j4w*Sm7sD9-i|Wl3+Bv.< T|b^pKN1:q+W/`Ba`AQ9aekJk6[8osI8uLi%Pn/Gu');
define('NONCE_SALT',       'c<E#3l`:E#=(E`?bH, &wC-!||5{ZwNxE=gq-h),6@QR kR_tvT `QaCclT>=V#c');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dmeWjnEg';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
