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
define('DB_NAME', 'embroidery');

/** MySQL database username */
define('DB_USER', 'embroidery');

/** MySQL database password */
define('DB_PASSWORD', 'godislove0206');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cb3~u7%~ rv6ms,nv_]Cpar37(<5PWl>_/9(_Ql2n/^ J+.=>HGt]_bD4K_2x5#7');
define('SECURE_AUTH_KEY',  'V))XgG>K=q|g=eMRb @2zxd(r,r+CwG>*O8.:4mgf%3i7rZF.L+$Nor8[bGHS{%i');
define('LOGGED_IN_KEY',    'Rh^S$A6$AlE) 6qF;7Mm/?%O2{LKij|KbncPPys2_[LIev33U<+=nW,!UX|RxJ1f');
define('NONCE_KEY',        '6p[sH{{KHr>o*7-q+yj[g8z},Ku?,x&?D1:!*,nG]Q5c U&=c)c`}&Z+BVHHNZ9<');
define('AUTH_SALT',        '^1^aOHU$wt;EY2,is`F~Q~6T(F``zWE@_pMdIG73Lsa9kzLb---,gZb>I+q;MC!j');
define('SECURE_AUTH_SALT', '^0pr^FKql9tN.LVs(Wbl5$JTkl<.w0XOp9|XdMt(9$g&Vi#/(+}%5+=a$R:,7D{J');
define('LOGGED_IN_SALT',   'u>qtDc0$MLXho|LM+7Ci;%+qTd8LB<gddjQ6/6Wi@^t!W|H?yb+[^f|KIjuPC>`p');
define('NONCE_SALT',       '9a{nYa)5zF}{K-:|+>-?R|>V~(O_y{AcTxy6rI-r>BBD8|Zz[4t^21v{%L`y>(38');

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
