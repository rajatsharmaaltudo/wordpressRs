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
define( 'DB_NAME', 'database1' );

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
define( 'AUTH_KEY',         'Sg_&n{?0tC#7=PbM$aCqQ<0L6gh.Be|vH%qV}K)vZo63;G(}~T.>`;b6t&mEx.+m' );
define( 'SECURE_AUTH_KEY',  's+}G{T6s;blC],&b,BP>[UIM9>=[dG_{( 38DWvZ9M7Zg}dVs~/^i{<{7<H.]]Nc' );
define( 'LOGGED_IN_KEY',    'M]k0*YqsDNhTg9@k(0TxgoTe`)*h,Nec#+b&EP!u<_xhr0:4JIG$t5[}TMlB3C<1' );
define( 'NONCE_KEY',        'fWq$o8A+QQ9 a2wF,;>;#YAN%1[2r/o%{mnEm1Lj,W_u^KYVAEzxY@YOp(#F>uiQ' );
define( 'AUTH_SALT',        '!S_Tk%~^=XWzO?!g=OaN/R~|9q-*Nu@,zrkj~)6bpMy?S C2#{L|2on:lecmhD:t' );
define( 'SECURE_AUTH_SALT', 'nq*?dRX=],,zXo)/~Zd7gF5zh^8p?6XOf!)KYfNAY=LTg Ftdp#+>+t<= t/u2TN' );
define( 'LOGGED_IN_SALT',   'p,/=(R %woF4/JhAc^Vgi/%52PIu}7A,vKc1a]OpUVNkfaq#<5dEak`DpYL8(5SH' );
define( 'NONCE_SALT',       '_Hv}t*YD0CE2sX<YO/cU:#~{oL8fKof8Ro)fR,7,&HzS{({B(RaJZr(X0phI`wZ^' );

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
