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
define('DB_NAME', 'protfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1i.`ad{3n}?^EFZiH{$8aP[:V^(DgW(k4A-VHd,fKo/5#8nN>]r1{r6^8S ;oZoW');
define('SECURE_AUTH_KEY',  '=XM[s1K|D(7CfOW%j]#J=BGUD==A9iJDd$e73(rz#NK&=%MfWZbE=u1mMA<z01YU');
define('LOGGED_IN_KEY',    '>n-hZ_j={KYKwV6n63[=&.J{R0:?8TrOZBeHhq9s!=z)@(0:|tDIz>}C(shI5W:>');
define('NONCE_KEY',        'b1Al|>e].y^ci$`j>o0ZN0^`H2 :ab*FD??wfm.S]x/&_FPs(GNd* GAcg2|3*/f');
define('AUTH_SALT',        'v `.9,,%eY5ijKe7l}[v-lXbW`!/5lXQ;NCr9W=gW6;O6P:q1@S]cXT!mDx[?s#/');
define('SECURE_AUTH_SALT', '3^CZ_[e@[3ir|lu*.Q7s/U4gsC^_fdxuD!!hrZ^XL/6$`L5?eX*34}[@mx:XOzD;');
define('LOGGED_IN_SALT',   '9Vc18cD1=Yh.~_,Y!/gasXkVZt/>X}FGgM^7K8`u=/2B-c-ov}iyQh_&!Pk?),Oc');
define('NONCE_SALT',       '7#K1^C[j8$I|y%-(#q8l~?M$*[uL.<n(a`_%tR[.gr1keZ^2DOWp`xCa7zB4vKZF');

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
