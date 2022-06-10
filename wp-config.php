<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epitech' );

/** Database username */
define( 'DB_USER', 'steph' );

/** Database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'SE @_l;y`*13l}W,*%N+AIHk)C[Qfmx6mQ~~6^HDv)Zs!Ng G9q7wXkNB?|Z4xx,' );
define( 'SECURE_AUTH_KEY',  '9g_EC&57e,4Md,P;+j_*xSB:B u$c}0Qoa)h BlI1<9q<t;uwO)]3eQsP1$F,E%;' );
define( 'LOGGED_IN_KEY',    '4 0bDrJ&XM*o#ZG~n+%e1#>Lu!.Q*}IJ{h^3IikyyGlF=w3zee:r;BxPSOacp{*-' );
define( 'NONCE_KEY',        '.9AM{@eckT}[DFOQqD%Zl1J#8Z&+<m%]),m/:%/b]FUy4~CBIxHpEo8VfI<(yqs2' );
define( 'AUTH_SALT',        '7^sWPrNUQC5`8n=H]nAMH1[igOsn;%#BJ/f3fAJx~}Wsh2?eQT~]B-nQ6zN_mZ?B' );
define( 'SECURE_AUTH_SALT', '~/_Mhm0S/Wl_Jst$i8Rd`z|,8Bo)T>vF&-xvvw3R-iQm58VtL$U-i66:)+{nLI6W' );
define( 'LOGGED_IN_SALT',   'O$;QR`X?Q|JRf1fNWD)|yl,TG/%pl{8Hhb 0*`^eyUAl:FN2TP/l7pt38OzJ;T@v' );
define( 'NONCE_SALT',       ']v.&=XzFN*GdX^vH>`m>[>tQ-SS;=L Rxc W:8z=zijV2{+Y#YitQj2Q]t6<IH>E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
