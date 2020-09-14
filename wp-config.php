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
define( 'DB_NAME', 'demo1' );

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
define( 'AUTH_KEY',         '>Azx%rbcd44E%0k}v*(RLH_n1y3_SoNC5]zT6mO`uLE)l`wxn<dn(aMbH}S$ly^2' );
define( 'SECURE_AUTH_KEY',  'zwYF9*d#r5UQNVwo/*LF4{sZ]md/R:F*D#tPARf]W>,:r/`r.C|[fTIAg*A+zH#C' );
define( 'LOGGED_IN_KEY',    'b~5_yd!!ENcasM=Vg , MfOrmJmnFDd5$=LW^MN4p{#tF#!1pGKyq,G#x3&QhQQU' );
define( 'NONCE_KEY',        'o^ qC$w1f#%4/,9*Kl;PttL_b-%wloj*~:?%]`asPb:;tn5s$!-REoidF{G)G@~o' );
define( 'AUTH_SALT',        '/pi^{c~MXqk ;I{M9ULdB3A,?F9p!:I&Wu_;]V[*4^P0<Y9vhrS%RDaP7H>l,H_H' );
define( 'SECURE_AUTH_SALT', 'Jt5`7ksQj=)]2nY@$Zmi?z#Y-%UpJN|#peC-DKbqR}nua`5bG$bA7=VFm>)yN`VD' );
define( 'LOGGED_IN_SALT',   '_qC<tZz4uVQ0T0i; k&g6vPj*(F5:Q.F#<@o!ans3hG;dj`+w>k/JVT:>rsjV#DB' );
define( 'NONCE_SALT',       '7FGNVc<Mr+(/Y%6@hL{@7_>Og2nDWCCdoO;}%?>.<:pcvo]_baH~LJNa(N-4jw}Z' );

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
