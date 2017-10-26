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
define('DB_NAME', 'chefb');

/** MySQL database username */
define('DB_USER', 'chefb');

/** MySQL database password */
define('DB_PASSWORD', 'chefb');

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
define('AUTH_KEY',         'pV^~YHz.{jPd]Q}f/|Za4H9MQ1pLn$&z~*)Kk6W/NxP~7uM||0bHdc$/tdI|rW/z');
define('SECURE_AUTH_KEY',  'F+&GNC8Wjk62xFm7/NA<=1AZZKA(hrNS!t^^~zWZC/t6p9d4+r D>nJ3?{3uTe*G');
define('LOGGED_IN_KEY',    'bvEC:M;<HH;T3j/L`N7]KYT>o-{o/6uM6O}7nI@:isf[5iy468sT[z07~HRJ;$~j');
define('NONCE_KEY',        'b)pMS(UHY{SS0V`,Oskv*FtF,%[`JRGeV {:feJDU` V4yE6JjaswO7U/,Jk2:_t');
define('AUTH_SALT',        '#K_GhB)!OIm_DKp}j}d9kTie/.`e/KmWNc7P?Cl1[7>x8p=Y*_&8*>$&[4Qi!tG=');
define('SECURE_AUTH_SALT', '[Ad0i(|X.RM(R8;l/0>GGS^K3y~oQ**<voe%ncI37>)#,DZ[r[=w2BY}U?CX5d*p');
define('LOGGED_IN_SALT',   '2f9*<NZqnjH7lb.uOW#)kYYHOuoBB*e>*_xi-!`vB#4Is%oDRRVFP~Eu[8(NWl<4');
define('NONCE_SALT',       'I~qsJ2d%5h_>bY.c}!tI/HRlkx^pnaePc~SaD+^_?J4lR1Qs9Y8~xE1Xez)6@@n#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ck2_';

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
