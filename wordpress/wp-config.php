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
define('DB_NAME', 'firstwp');

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
define('AUTH_KEY',         'A$Ne=2D#UTCE.25tRty0[+EjCqM@f#bfPW~r23Z?A468z0P1i`& g_GZ98cmDQ.V');
define('SECURE_AUTH_KEY',  'FTXvy+&hg1em=N-dTg{Ng#l~N{vX=rjLaY8;:82l5|~_7/l(.K.I`pC~U]EbGZ*u');
define('LOGGED_IN_KEY',    'F=kn:%u861+|-1)-{G>~$-n1ZK%nfhK8keA{Q8wV:`a..YxY (+Gu.:e+9g-i#*5');
define('NONCE_KEY',        '2qU10o()^ehN[Z*34%wv7$<U-Or7N04ee7;3WPsidI,0>:DG+5-)8MT3RW|4$J+F');
define('AUTH_SALT',        'k-5lC{`6!o-/$4 5ju|sh]q f|:L=^,p`VC%.FZFEoxK4FGxmJi5OUoUD4K?+]%+');
define('SECURE_AUTH_SALT', '$hMO.s7K%&od4(U.!g{/sj4R`O;yd^5theaAgM2!fPCuVxC*(/ p8y_g#ahW{Ff1');
define('LOGGED_IN_SALT',   'nc;;( d</sGnm^fI+$/80)o?2L+^w*BJ8<Bow8U[EE=tPRf<m>+,@g&[|TEq0z(2');
define('NONCE_SALT',       '5_u,OvPyb$5jjZQUu&lL!#z5B}U}Q8&%_P4X?A]]AR3A@}|).p%n:_o]pFdpNBz9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ps_';

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
