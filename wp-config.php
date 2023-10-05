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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portify' );

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
define( 'AUTH_KEY',         '.OpL3H8gM6!p 4gTK$s}+US|54{^F)ivn$Gd%pT5s`B1S(Qz44C=#AlD(uNdI]K_' );
define( 'SECURE_AUTH_KEY',  'um%CsnWt9oQLZEXBC)FPE:PkcH;rsFz,WXb(}n1yVEY_/K8WqP-6c#3JRPa(f*r9' );
define( 'LOGGED_IN_KEY',    'B]:WYCOzN>OLk$Q=inCgR`DJ2xLph+UHW_Fpmbhd?D5ws|*/R[P .F2XOpgKCh3$' );
define( 'NONCE_KEY',        'xtTir?E>{J}*g|<A.XiZ4zv8x9gQ6x$o(uZ<f<biCgCt1l`h9q-BR yfDfo1 l`*' );
define( 'AUTH_SALT',        'v9GMq?7@,F*~|hMK[TQ1a^]Y;13sEH&?(lasWOVkeQKufxpeb*PEaG/GA,0S-0/w' );
define( 'SECURE_AUTH_SALT', '-]%|~K1p<dshp^.l%$<#)o0:EGG`Emu>p&f?q[-?KJ^BZUE9/n*$)-i.{.^SHJ,K' );
define( 'LOGGED_IN_SALT',   'eZ<>hGnv~l|YzikwK?9|r}*{c?!6|}ET11nV-oc$0FATcK&oOr8rC?jZ?t,@ET:[' );
define( 'NONCE_SALT',       'DB*ir#]yiFPIdvNaAsmeY[*a=*1EvMm6ZAvC0sIbkj7 c{/I6:LP%klRa4:pq-~#' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
