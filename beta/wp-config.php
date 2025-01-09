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
define( 'DB_NAME', 'Amystar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'KN f7sql.)a]NrA!o &7^qEI^Y/9(UPCph]|iW^+#YNE{u]MD<Dj0GZR}&TGs=U}' );
define( 'SECURE_AUTH_KEY',  'p^$%,<(s`O8Ok#4@`g4X{g?*3GI5CV)8{.&%V;UANI2+ui9zM5W4[f-A3d]){9a5' );
define( 'LOGGED_IN_KEY',    'tpkYYn{ WgJ;hTZsS7Y<G9yUgN tFv3=8X(_+d^|P}&hZ C:xL{Y:VY;ggg3%ZE ' );
define( 'NONCE_KEY',        ' 3JGb%%yGHm=Z}O:Xs/_A]kysTG`a; -j}Dn=<oyM^nQ1Pz+=1zPF|q|Jjso5[l ' );
define( 'AUTH_SALT',        'fwIc*e}SU~DpBL zgkcppU$6$ _XGy$1}PoewvaXo?!Aoou(2:)h#L..``;TPhJz' );
define( 'SECURE_AUTH_SALT', 'IT$vLp(szZuZV]Lsu2]WO;#%sgy21&NvJ{@sR%~hW?|`U4L|hpYT+%glYZ%6l%}x' );
define( 'LOGGED_IN_SALT',   '2?v>brtq1xs l},>Ui(B(zd3&k1A0`OGvR7QSM{1u rd=`TXM3Un96NNV)tdRm8!' );
define( 'NONCE_SALT',       '+Nri{wi6[cFV,!k1&A_A?ycPDjU&2RpL506~[C*yX_,TNbQ#rz1lwgdH0Hj|7J.T' );

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
$table_prefix = 'wp_amystar_';

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
