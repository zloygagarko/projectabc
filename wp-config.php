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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress-pass' );

/** Database hostname */
define( 'DB_HOST', 'rds-cluster-instance-1.chswaeeaatrr.us-east-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'e{VYgg:31|,Sch~54+dLjnD;&!(|l=hF>U14B1-YmSq@<:|tV>CRsEtzndk-@<hn' );
define( 'SECURE_AUTH_KEY',  '(#srcD3OBiGxEgM_ bm=0`4G.q:FG{4{0^DfFUO29}+MvH#^_09&,WM=9-0~-`od' );
define( 'LOGGED_IN_KEY',    'gTgRP#*-+t2EAex=4K9yUY@y6d@Gr^tW#n|/ZlI!vn@uz@Dj:g.g_L_xOeEhdK%n' );
define( 'NONCE_KEY',        'J}SO[Mg8pHd:]3-k/R+FAtTmTwsYNOZ(?uIsBuKzP6=kE7 |H?)aX-.q+bpSQB@:' );
define( 'AUTH_SALT',        'l`Tw9XO]GWRN`t:AxC2>jBp;kl-5`WGn}u$0TpWrSZ#`=EUJGX$MQ(sP7A8pdP2M' );
define( 'SECURE_AUTH_SALT', 'Yn$JSsFyGmQK5>q*l7|pSt3H7r{NWs;eTEhX/GJgKi=5rlsd_tg.5GP+o3yW1,tV' );
define( 'LOGGED_IN_SALT',   '*+t~0|4ytM58HYIqNm|tkDTo:l+wWOA:mJ+|)tb];?Q>56j*&jO5,|n6-oBt@fV6' );
define( 'NONCE_SALT',       'eeC/+U:Z``(dSo8[^lq9N^^#SF=d1|KreJ,G9B3nk1*0[-0+1/1#Y?rG,tL0k-bk' );

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
