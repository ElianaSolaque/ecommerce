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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '3mx{J{SXHRJ//YD|y-iH&Ad<Jm7me=,uhvmC#!*+[}A&V}Z^NY*ttBB=|M29NCF(' );
define( 'SECURE_AUTH_KEY',  '@m (86?oJ+gBzVjKqB8 >251Th t N>H:I@Xk-vai2(_HZYrvWS`~vN?{4[Hhz+7' );
define( 'LOGGED_IN_KEY',    '16,M.]VmQfd4e X4pLI9Oq+#KFswlDnE,g?{MYer/sCER{LvPi=SLB9O2ONhe5je' );
define( 'NONCE_KEY',        ':p_ ?XK<?Q2/]o|jkIVyD!z#vQ*FFYSukm Q0K,Us`S`k;`U!)np;Dp;CZ &esTr' );
define( 'AUTH_SALT',        'k&W}zbIq,pfkl(H12dU+evfY)?7lWh{Te5Z+%Gph133-v[;zI6/!+Ev<MzHrS0mP' );
define( 'SECURE_AUTH_SALT', '747OLENF$F<fO*5!egV=h[&yQ%G&-/`[aizQ6]a;es+;MR/Bh~OeqgiM]Lc2^EgV' );
define( 'LOGGED_IN_SALT',   '~Xg|?T,QsIQYlzFGg+|oaUS+6>fm/PD3p!i: s4>74VG%eX;oxH:APIJX2Hrk45h' );
define( 'NONCE_SALT',       '1_qdN>rs.jmJkz%p4.(mzcVRmah XvORq0,]p[UBe5D{|NpE)g4_[b+(M/B%J*=7' );

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
