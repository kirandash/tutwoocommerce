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
define('DB_NAME', 'tutwoocommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         'IIPn~^;ZVARsxXT,8XPZZOt=-S=s,*cXtsx)!9|/x4nkJf&[}bnii|`6tKsi~+XM');
define('SECURE_AUTH_KEY',  '0o}LGkZC5PD{L kYH//B8U|$vuvL{6h`*|-W.+/OTQ9E+|xeM7~46>|!AD%._0Bg');
define('LOGGED_IN_KEY',    'eU(2*eAztW4vc[[2U?Xa[H(-m|63e4mJ$/;lI+I*~fxN| pAoKS,osa_0<=oD?|U');
define('NONCE_KEY',        '~z`$9kWaUcjn]Q-Xzy%+rL4Oq!cb8WqwImanh^jJUfxV[G;@=I[t- Y{.ADe*+eC');
define('AUTH_SALT',        'X8QK@g-R/UQ^TJRb 91*| nxAg/,)hUgE_D%-,?qRYKi1`b^.-<^5OL9&90U -8 ');
define('SECURE_AUTH_SALT', 'D,P?Q`0<|;r[4N, MW o`N S}_+J]ODCR-IV]8q KL1A|!{Zpe}H4wLc;-iv3GLz');
define('LOGGED_IN_SALT',   'Xu`o^.#+!{ E! m!)<e]~W5FG/dn.+5|5eYx*r>+HE&3O1PW0Q9)T)y3-K8c^bcg');
define('NONCE_SALT',       '|>]<tu#:4-ozxaiUC.lyq8sJT}zXU[z%_Q^4mvhr[Bo&6ek~nF0>KX) Wl6vV) |');

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
