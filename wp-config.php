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
define( 'DB_NAME', 'git_testing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']Jgl;Ec#u(meCwMhyz#i$ak(1(gB5F?DNNBYRLSBMc):*#$-eW{X+!?BA]Uhs<@w' );
define( 'SECURE_AUTH_KEY',  '>c&<B(`4cNPg1k,iaOKTIR7S{k5|^Zx={~IQ}+!xF6Q$>@zISy3(49%)Z(!2yvep' );
define( 'LOGGED_IN_KEY',    '}F0u23gYMi]0kNp(dZ._6$S:Qh-LSM^&^cj@y7_Nivj#jYYP(?-rprh4O(JT~%[&' );
define( 'NONCE_KEY',        ',~hurs ((;HjW;|)PD8mTM($H.ir1LH,3:=zMh$e?gIg%>Jn=]U6huX0@W_{i QY' );
define( 'AUTH_SALT',        'lD~SqRall@7cm96<h<H[i}wh;*:9{Eovcjno!?M:fFBq>gPL,gW{e|HIY*g%H0e,' );
define( 'SECURE_AUTH_SALT', 's/4(0?tdDs_UB[,/;!IbKaC#UT!>_4ArOv4ONyW#LZwC>oBsrz&2dwu;n7Z6W(u@' );
define( 'LOGGED_IN_SALT',   'P]b^+y%@t7~hsh}[9X^`7H1}5T`C$f-t*^$JFwYd[lFWhK>(GWXF#]/mVwzIECfg' );
define( 'NONCE_SALT',       'ViUiZj*&LH<{P$>`pUl]1YrCSPrloK_!C?k&PGS[3Noll`F{, ^gCUaI6F)]^Z)Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
