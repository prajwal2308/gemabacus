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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '^dCLUy#rgwl#0)@A8-[6rhm~o<xQ$bu<Q KoYmu7!9{E V!FT7Lbwh<48wis|]Z)' );
define( 'SECURE_AUTH_KEY',  'RM#&+``dkI)9E ,*^(._4(HIMQ~qoF{gkMVn6Z+i>rLruc&sPaJAqXd M|o<CrQ(' );
define( 'LOGGED_IN_KEY',    'T<B<i( ?}^`[h%J`^4aR$;{/`KeTz4%G 8&booaxD*4z.#js5r]xhaRO*h1~qJiv' );
define( 'NONCE_KEY',        ',{].5@~ef&&0|8mS=[%498;D(etXLV`:lmZ1I1514k&MZBH$8`{C}(@ ]N4fb`{O' );
define( 'AUTH_SALT',        '-T|Ur:7_hgc?3+llbgM?mfP_nY*SAMrg3:WS&wFgpD%v`dsmJ&SKX(Yj=uwzP(|p' );
define( 'SECURE_AUTH_SALT', 'WPQdYx`UH-c=kYFgU(auDsXuYTX3ft]EpJlC k/7#Du~rvX$r6GF{7YiNpUf n@8' );
define( 'LOGGED_IN_SALT',   '16d]5BcLRG`,?T^E5H(yl;ePxwtg5XiK_`LuduPS{O~^m_`0JR_p_jTWBV54)VfR' );
define( 'NONCE_SALT',       '*?153rHGDDzmd:~xfs~wQb?):9&R@,(hWR|TD|2Ll<tC?p+:({$`%@f2gE3U;cb8' );

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
