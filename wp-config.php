<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Pappu@8757' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DCYf|G?%t<n26%iV=_/P&+/2>Cr?UVP)Pp/TF4MA8EAt<;c6%_G|IsvhAQwX3~)3' );
define( 'SECURE_AUTH_KEY',  '~[%? LH5)ldQ3Rklh`.|,XK5@t0RxR=d$>4~N)QG~[=e:}@}z 2-iY$`W,9Ba3xm' );
define( 'LOGGED_IN_KEY',    '9h/eOqP]Xtz0_D.YVQ`sN}#j]y/}!%S:Cmng0_ZG^>EAD5i<C;(+y),,27ye7XYH' );
define( 'NONCE_KEY',        's}L=d|rv:]%@B5$+,19a)_sXKc=1M0=&z$z{F1a[!4;PzWY> {WUej=^jQLYDcT;' );
define( 'AUTH_SALT',        '%LX3Eph6Wz64HZnRkmULnrh6xCbB(K4Z]2XW^oT#i3#Lg8@tU68Ingc1Y{L@*HsK' );
define( 'SECURE_AUTH_SALT', 'CEkIvrH;s%.^rWk[<^@7az!y.y+P14J<KG1q9RI$&S kmDF^d9v1{v6E}|;Ox#  ' );
define( 'LOGGED_IN_SALT',   'FZ6Ti=^AOCP,=~8ue$:?|N`FmU1Z6:=q}f.&mt3vo+ZQW9e{ul<~<KsgmzD[9:Ms' );
define( 'NONCE_SALT',       'V&-sf[n;^8<,uX|c@/1qZD2!j<DMHN5hlj~{q&;^;-o=aYu?TB!i3?3`VT3ySLqF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ec_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
