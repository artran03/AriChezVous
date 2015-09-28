<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'arichezvous');

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
define('AUTH_KEY',         'cGt.=_|)p<CE3l/!c<|.=#6FA)9c^5^}7+mF qn5%49b}dfjr+DB+X-?|xt2)},+');
define('SECURE_AUTH_KEY',  '+}/AwQgIh@+SboM3?xQ{Q[-3_n2W.!I<n/j^dvYI G9x-!TZ5iws^x~)dG$FO]=)');
define('LOGGED_IN_KEY',    'd|>EJ6MVJnJj:/#tTyEmC(JINQ4Hx1}Y6^;F:(eB2>;TYy{ndCkTW? ;uO|].-TI');
define('NONCE_KEY',        'i(O[H8+{PL]Ds>Hpc@5@!`&X_h>i8=d,9CEf2OMND9hg]iR1 +|[f^;z.&DL&[V,');
define('AUTH_SALT',        'G]OnqCq@:etsfY+O3K=Yf;94|Cs[EA]JSaxm.-td,0=@h>|_-$J~1W^wuC|s@T?G');
define('SECURE_AUTH_SALT', ' +?bAc+0YC)s!Tpqd,&2dVVRS5:@$N/[Q7f+!TD$viU-To%C]!*:+1 lRkCbMbOM');
define('LOGGED_IN_SALT',   '{*#X^-0RD8 qpue;!c34%w}bt&ca2dy6O^_85gyN2#J}Y/3em-S4RR;3#U^-s)p;');
define('NONCE_SALT',       'Qh|RnK3${_{r#@7G~7w7 .:l,-u-/Ka8L.9iq^jF,WxiZ7~O,wiZQ8|(}%S!*P=Z');

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
