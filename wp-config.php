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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'leetech' );

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
define( 'AUTH_KEY',         'ZOdYvj_WUm?fTBg(Z:Z)6*r[Y&0&7.IvlCuN T^qiFW*d@)~&Pk*K^8;&*BS%>?S' );
define( 'SECURE_AUTH_KEY',  '@NDF=8r_>SIWjRY}6p]/+47]`4e7inaX?[*ma|=@}#bc2y[bVn(HeW~yLSoyqH1-' );
define( 'LOGGED_IN_KEY',    'q(?|Qjj5E*~Ktk4H_}%b!oWn|#FzNp)w8+2h,TYR$})qH7#mg o~(j..(oRV#wv3' );
define( 'NONCE_KEY',        'V!L|trn6sZ];*v=iD4P_VdU.cb1.Ge3&;=_Q+*OI>8e8Upqddw|)[yzcsd~i@`3=' );
define( 'AUTH_SALT',        'bC-fgtS1b}v^NtO1Z$P%h-^6[*o EKTC_e:sC,g}N .!>ulY`R2{;P)p>5!e9Qt3' );
define( 'SECURE_AUTH_SALT', '[l!YgeGTGSc7%f)y}zC+w]NktV$~Fade=~yz):7W}v9)}<)n&(QQF*HTTTp<kg!|' );
define( 'LOGGED_IN_SALT',   'v[rzGD9l_<5Yu27d:*(c24a@WKPhqaOmb>)<MB*MSs.7;W0FehR+?52V D/_pEOt' );
define( 'NONCE_SALT',       'h@.F2?>(@f_:@UBDycUH,dSl&z=d|4[+R?7x3r.m wr_[3Y4%(mM9m:NS@2OV^A^' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
