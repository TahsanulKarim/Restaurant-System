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
define('DB_NAME', 'cse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+c7?^n:z5?dX6~PP$rW4_eS0]+W~y3H{D8L$ctJ$NUr^5slct._8O@dYk`bc}Z)L');
define('SECURE_AUTH_KEY',  '~,[T~Au~bYY{rQ~CgB_!Hu,bH:*->&[1webSbbK|=/t(nN3Cs[JJY:bU~uu}i]]y');
define('LOGGED_IN_KEY',    'zD:,jk(6bCr(qC/u~z wyE:fvp;9G8QPwN?f~R98QvX><IAN[_Ct%#K;c^mV?>Jk');
define('NONCE_KEY',        'Aq&xo<(K2i!%xfO_3v%79zp#H@pIUvmDx_p&g<rn;#t=RDRhUYBt`],ct3UTKW10');
define('AUTH_SALT',        '/Z==zQM;k6N!mr1-0ZGEehH]M41r)F{MU-h(xX?[3KqNoA@!8u=Ww[+Bug|#Nc|^');
define('SECURE_AUTH_SALT', 'W#j5mok^t)~$f&Uam1>*Q$ --/mx)Oe6AArOX (Kjs3[Yi}`sB:h$QD9E*SNM0^ ');
define('LOGGED_IN_SALT',   'lNWrLW`1O!,XyYuKPNXedG|&#V@$qasg?t(vP#C2E>*BNhIvCzr1m_Yb={0uXmpz');
define('NONCE_SALT',       '@(Zefwb|uV7yw{o<q?;A)v<Gma3E~M^x+Q#w;mnI:`L`rk)]zkYx&zP6xh*fG$pB');

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
