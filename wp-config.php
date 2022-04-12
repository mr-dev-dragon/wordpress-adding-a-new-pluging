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
define( 'DB_NAME', 'wordpress_' );

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
define( 'AUTH_KEY',         '=CUHBt5p4Lr)bJ*kluSs_j{wf&o5Xp)Lcft.>,#+h@ivCv#ZfJ5p*{Dw[k`n{(Wc' );
define( 'SECURE_AUTH_KEY',  '?L|1i0? !)|k5CAd(g,mj9!j(o4VM3dE#X}$FE$Q.u.Y{!t/HeECJ-RlFsphJC`]' );
define( 'LOGGED_IN_KEY',    '$I0vy0IrK2&yBXkkY#Uwx%SI:s,S8>|^_;Rsn~U.aq@uzm,+>ti,CgDHKDk}p:^]' );
define( 'NONCE_KEY',        'E .lgtzhD{D(u_A@Wz?<u&AjySDdU+C~^/F_ZKZQp},CVjKpd->=vk3/,1tg5j4S' );
define( 'AUTH_SALT',        '7KZP8N{`atv/`?|:,)y<k7AzGn7:gAOlT4`[b{Oryx#,sGQfqkZt[ z%VB5S^o+D' );
define( 'SECURE_AUTH_SALT', '%QhaA=a;i@Jj<cYwSOl}f[!G9fpJ5GO)kt=1lI%=y1u8A;9P0M?HD5_:;$H<oYV3' );
define( 'LOGGED_IN_SALT',   '@>9cgVG;&-;g,W`G.V#oN%fv%8V moe4utb;>AxrEl[cLlu}SbpQlAoqq8s9RU[G' );
define( 'NONCE_SALT',       '!0SzhBCn7xo(7)1FtBZkIOFmk?lUgAtKvIUw>M&zT|%Z%n5Agw~j2Ku`2,]hoL,p' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
