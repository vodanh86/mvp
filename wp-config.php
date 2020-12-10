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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mvp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V~qa NwR40hRD#dC $L:Fi`1eG<Qx66NQ#ws^2$DjWb5#R{uw:xVfiNnAzRx{T*c' );
define( 'SECURE_AUTH_KEY',  'Uslcw&9U>q#7R!CI{`r=KIv_p!shB.!;krN`lv[a2Xs7y2wS[ }fAQ{:KGB5Umbr' );
define( 'LOGGED_IN_KEY',    '{#7UOMYszw(4dkx^?)VHAhuec9f[4PP;pnnv>7nZ[6Mr15v*i*)y.$qPV]:RgQh@' );
define( 'NONCE_KEY',        '_maTDP,V_g}R1(7=,W<-Q<N00+f/:/&Gk`VbxPxuA@7jb&(dU8=;g/5TG[$~]}%%' );
define( 'AUTH_SALT',        'd#Ev;(VV=.wzMb/WGEcs99Fi*EDaorQ[;t|]7hT#j`gg3>[y__X(NZ(X(58Mo6hz' );
define( 'SECURE_AUTH_SALT', 'i]6,XKl{i-G>L`bfJ?OwQ9Y<nX)5b8e+|@0#aHFaPJ.Lt/qLSl?7=UJbeal4pYqB' );
define( 'LOGGED_IN_SALT',   '0C=2#N.+gJ6t9C2fRjW0doG8=gh<!WZKHMJOYiqTZR&=+1u]J=OFj$qNcC{_+xuu' );
define( 'NONCE_SALT',       's=_j`dx8!$FK~$-39c-CId7jdlj90-T#tOCpKgm?Sptw)xlpo~)l`n{I<[G<w908' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mvp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
