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
define( 'DB_NAME', 'chicdressing' );

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
define( 'AUTH_KEY',         '(Z(-]yK Is)urEk!EE<+yRhsQ)|JFQ(`1a$dUT)rqp>.3n$`q7LMd-6WMNiFE}&z' );
define( 'SECURE_AUTH_KEY',  '~4y,r4vz|e1=bKo~VD]WD8}O#8`.b8>^/]8o@{m&LVWBtHC*(GHObrHFr&FkU nE' );
define( 'LOGGED_IN_KEY',    'D?YeC|?]9(j%ojM(:^9|aT[,;6wNQ9S5l;g2U1m|7=$6lA t!sZiv>k[.djb(91T' );
define( 'NONCE_KEY',        '3G)(%vK%oz34GPg!6gV*d%C|7w}cO,IFk! t}tx1V2-?]=nfZ!KPLj$0xs>8>H:{' );
define( 'AUTH_SALT',        'sfuj4p{PY7g~Tr*A[A_8)(4/T`sc*BO]S;Q$Jx$C%S}p?HJ/M{-f=+qai8U,nD/U' );
define( 'SECURE_AUTH_SALT', 'Lc<r>9sg:T6}dnXp#be;^oWuLdHdflP7y(p38Ufqs,=5q_g@h=|qdax4-@jUtU#+' );
define( 'LOGGED_IN_SALT',   'iGq}Dx7)~8Z(Q_!w+2ufrWZ|0c:YN|x;H5=-A!dnmNL#!XxbL5{;c7/u(K`Q#8e0' );
define( 'NONCE_SALT',       'E2HqeGfPj`PJSp`] 81o1qT5}Sk/=>kTsK:KEoD/SoE~J-D;UIg*/gQ%AJ6ryhlc' );

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
