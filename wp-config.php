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
define( 'DB_NAME', 'carhome_wp912' );

/** Database username */
define( 'DB_USER', 'carhome_wp912' );

/** Database password */
define( 'DB_PASSWORD', 'p0F1[.S3uH' );

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
define( 'AUTH_KEY',         'yvnvospfkxuudihvhaoopwwrluunze1npjnk6qcdwmbyqigmqegrg8iockkspd3x' );
define( 'SECURE_AUTH_KEY',  'is7qqtx8mpuhd0f7vsu4isi6atuv414hsknmn65pfwydtoq6hgv4mrxs2kjlhrpn' );
define( 'LOGGED_IN_KEY',    'v9x1vkxtbkq17s068gs3adklvcl90mp2nsf0w8wksazcgrfxfabpgh3cwtq2lmcg' );
define( 'NONCE_KEY',        's95kaoqbwkcakzsqolpxv88xn2texa44bvonjypggsqlrg2j1sohbnyymbjrmnt3' );
define( 'AUTH_SALT',        'i2ezq0qpbdybuupjduuekulixjvncrk6szabavxtrh62evvehxowq6efapfdpewp' );
define( 'SECURE_AUTH_SALT', 'd5frpoa9yn4zou7mdpngh0l6jmexcylm0hrtifjjnbjiulsfeufzlqfgnahzrt36' );
define( 'LOGGED_IN_SALT',   '0u5twzateqvkfbz5o5v8zvabdpvswzglvwmvorgbexdjeonoctwudnu7zgys265h' );
define( 'NONCE_SALT',       'n4gkjqqdoecxbadtltt1oxf8qndprjvoyyuo6fprc9gusqp7y73afkyh7fbaiaz7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppp_';

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
