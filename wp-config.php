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
define('DB_NAME', 'atest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'RDZZPT$(+d:SVHcX_9uU4n*hr0o|a>!-qE45HDKi7`e>K>Zw!!PoidDyyxV:$uv;');
define('SECURE_AUTH_KEY',  '(u3qU%I:K5JndEH]ZPz&|5bvO~Sp&.jLW?}?/9wjprZvI-~}N?%G,$.^HQ~bkbbU');
define('LOGGED_IN_KEY',    'YN}KzV5;(J@?kD&FYDw@HMni{Zy&X`I77LjVZ,R2$%kfhb;q<G!C-R-.j.T@sQ.Y');
define('NONCE_KEY',        'X{_&Yb)%lmHHIbJZ&1 me;4^KtYB{|Z|gTa&P%-}lk],T$pBoOj)Y<gq2{3Bjf=p');
define('AUTH_SALT',        'pS7@m&CweVPud0=hdJB YS4%e9(kO8[X&uz7lSe=GOo<xj.SOp)zKDa3K`mY,jPA');
define('SECURE_AUTH_SALT', '#ijEbR2Lx,znIw,+vgKk@x@p@QV}e*2:2;4%j_-RC#lF-fl=g]i2<vv!4?H}Kf4@');
define('LOGGED_IN_SALT',   'zLT7kB~Fj6P`[.h U6V?Ql1hx+=WHtf.7UaWHna4r_L{()Y]Nsq9Qf;?f]kHQ=!/');
define('NONCE_SALT',       'RXgB_inDD_dh`<TI!&{7u0{Lg3q!N:+8kw|w= _vMeBT=kRX(fwu(,c$G+WnAY,6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
