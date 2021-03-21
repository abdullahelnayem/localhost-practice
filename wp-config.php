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
define( 'DB_NAME', 'abdullah' );

/** MySQL database username */
define( 'DB_USER', 'nayem_tech' );

/** MySQL database password */
define( 'DB_PASSWORD', '8LCrro6CfDWEXN8J' );

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
define( 'AUTH_KEY',         'JT-+6hQP|Gr4=F?c.>cE>bXbbXMl;SahH]SjF{L%z9oTGaQ1+=J1]j;w4v;Zs7&!' );
define( 'SECURE_AUTH_KEY',  'L6J?16E%zlHoIQgv71i8d/7?JIoqnw.dr~)_%|/~[TvFt$jVv`q,n]Q=t$Q(Bok`' );
define( 'LOGGED_IN_KEY',    'vLz2JL_(trP7slj;/AL&MS~}h>Sz8Qk/_D|.V8o|!pO1<]BxQoM0q*NzdYF/X9(:' );
define( 'NONCE_KEY',        ':D{}>OJT>oz9h~~*! 2/k;>sfuA>@5GGPKhA7;}Hi]>4 4r//n5n$3|gFd+RXf:D' );
define( 'AUTH_SALT',        'V{<]o5`CNT:P;MZX}tibG*5g7%<aRy6W8Vc|gd,-*H/CrNlE$F-)`<HscPZcw?]`' );
define( 'SECURE_AUTH_SALT', 'ZX(Mg}h#p|fNk4Kn^SgLpyw/T+$pNABM]G]mH[Q0OD$e/;pm~NltnwV!HBCsloQN' );
define( 'LOGGED_IN_SALT',   'du?P&aqt@)^=F&X-%x6U7TCJ8n2W*H6`MIOM!AH#G$ti6`[: @8Tstd|ziLHu_-1' );
define( 'NONCE_SALT',       'Oo&24~TO#AR*iDp(oSn#EPz_~aT&2Z<vl+/W~z5nynpZWa9W6v*lxA=TNW=<G|t9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nayem';

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

define( 'FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

