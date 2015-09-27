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
define('DB_NAME', 'AriChezVous');

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
define('AUTH_KEY',         't3bv:0oVhnP.7|vni/W/,<{J:}.=-@U-r2wK.kDe._|L%l;JxfIOCUg~h6~_BfVf');
define('SECURE_AUTH_KEY',  'JW{pWxKN}[rd9L4F~}j0 #m?z_aUZ _3Psx(;q!x:39$-EgH]Wo3!gb-6YLD45U~');
define('LOGGED_IN_KEY',    'k?]]fMCi0p~-i|YUhZ%_*+C-uv1|#q]bN+YE1>KqX]7kiI]NY;MBX1as`Ee/ex)<');
define('NONCE_KEY',        '4LJU;E=`=ZO%4E}1F8GSYZ|$5JYV}Lq!)>@TvCIAJ6o4?tXFiBN*JI.:a|O*&f;F');
define('AUTH_SALT',        'O~b+aDI/H@3&BmF3hY@CB(%;BzXAe[i@Gu|fJYCE8U^[_xIAfX:IcH%Mhq<:b;HK');
define('SECURE_AUTH_SALT', 'FvX}M(0V~4s04p0#^Rixt yH8|pZO%RA?T{ -,.+c%l~/UVgj|GvQ|Fl.4FQXwRx');
define('LOGGED_IN_SALT',   'G3{Ac-S:yYwLL+r= +^{u-Lxd>S?C+Vr~-=u22LsRnM$#H{]nX<02/5g^0,;/xf;');
define('NONCE_SALT',       '>,S/|#>L8eVHgSJnRq3Xs:h%@3C)-s+g*.Ld:x}Rt-VER{1-=p?lo3|dcv;WJ]4|');

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
