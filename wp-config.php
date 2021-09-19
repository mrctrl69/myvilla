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

define( 'DB_NAME', "myvilla" );


/** MySQL database username */

define( 'DB_USER', "admin" );


/** MySQL database password */

define( 'DB_PASSWORD', "123456" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '>eY>uKPR|q^W)M=uI,)n?w{sY;SJ>sa0d yoE[93a=8R;f07]*GX6n(2@|am6.T4' );

define( 'SECURE_AUTH_KEY',  'o*fo*aF!+rUre/OJ-n#lE^K>>s,}HmKQ%)5L)LS.Y vYOrzy6]kKl%,G5a-ClX*J' );

define( 'LOGGED_IN_KEY',    '2rXx|D9X,B0L/nd~U;E]2cy0yPRZlZqJz,[{vqaThn_`~2LQKp3GNBZU ;Z+Ao@*' );

define( 'NONCE_KEY',        '4P$qwXJQKcx1K9Z=pGh6@:o0lDP~(;r%h7]{o(lqur-6(4:&6U}0S}u}vd-(=7q`' );

define( 'AUTH_SALT',        '>dtBLb7Hk-]kCS[*DFZ1ma@LmFRqk7fo?-0&46pJ$(:RzD?xq4jd;.JBk48-)&ru' );

define( 'SECURE_AUTH_SALT', 'JiNf*._{%oJi7-T$W5pIBv YgJl|x{#SkK8;hz8A>]hNi1Hr;;QLgq4c^J^^Nvml' );

define( 'LOGGED_IN_SALT',   '(!u%5H$fc~?e1?(X4Y(@g$T2E<XXCwpsmtE*KIO{[>ttSiS,%,W,f4q]ziC>1p$w' );

define( 'NONCE_SALT',       'o+T1s5;5TA:I(~1O$R:a1=fxPtxB3xzTB7)WJ:Fjp2qRb^%_t{wMXj)vF(M8soW,' );


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

