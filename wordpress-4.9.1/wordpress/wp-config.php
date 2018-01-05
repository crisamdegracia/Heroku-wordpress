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
define('DB_NAME', 'd8kp45ed8vg48n');

/** MySQL database username */
define('DB_USER', 'huegndmskguhui');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-227-250-33.compute-1.amazonaws.com:5432');

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

define('AUTH_KEY',         '@a]H3PuU*x!:nX]?/^yN,J.4[NX-?a{X%@!+){Cbem=X?PJ[>o8W?N>|;%-t`NYR');
define('SECURE_AUTH_KEY',  '7d|4Bb.No nqXyA5xN9K~N+>CK&awRFD(iJE:v+`b2}nAsz3rnbq/?yb.fTuY8N2');
define('LOGGED_IN_KEY',    '],=.h/.=7$|<I9ts_d.oWJQ?jbGhDVB%.:]^_#-QO!@h Hh>R^7?:~D_R$W28jT?');
define('NONCE_KEY',        'zNkLb0)Ztex5cXi-^fvc3|N#wt4(7aW4$sPFoN|e7^V=|a+tc&]LGe[,JF)IN<}=');
define('AUTH_SALT',        '@j[m3|#9JSK>uP$FgTusN}&W%kVv`Svgypq#IFV:Rx8z`e>5M-wWruo+X$}X4HE-');
define('SECURE_AUTH_SALT', 'hL-Cux[dL_4D%70sNkBIe$vZ}7|+(>Kf[j;So6N*Yb#bt&WJe_e$.8vIVb`kxi]$');
define('LOGGED_IN_SALT',   'nK/b5-mKhoDRZ a[o|KV0M$!~.rlvaR(%oH_fy{0efZ-MD%S`DP-(e|$rs-`+osj');
define('NONCE_SALT',       '|A+}Q+Tj)-GfWxynruGWZ5(^6Pn]zo+~(h)R4d9v]|,T^T.LBy2a/5RP?VPwyUB[');
 

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
