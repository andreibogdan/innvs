<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'innerwheel_wp');

/** MySQL database username */
define('DB_USER', 'innerwheel');

/** MySQL database password */
define('DB_PASSWORD', 'innerwheel');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b8MHSEOXP;+UPU[X*.|s$Sf4WR -@Y]Fm4nHJeR4`l1CWv{y+y/%kz?:DU{UN$r+');
define('SECURE_AUTH_KEY',  'MNh[5(NdANgd`w`qd,Jp-le>qcO/DQX>*.g&8Qw|^Wi[)9nLCQUwoFZts_V{HAc_');
define('LOGGED_IN_KEY',    '9q(y9rCsw!~GU@)W(XdlFhWZI<+xJI6baqyJ0e{L6%u.PQ|*H~YDJ+5;`$QTPL!g');
define('NONCE_KEY',        '6+?J[-fOhv|f$S:kMaZD|~.#f@kJWrhK}>9^n>)R%-~@=T8b>Uk/_A|Ielk[|LXy');
define('AUTH_SALT',        'H?)e gc+H.=zm<Gmunez+r=j/DgmoUkA7re]FSnrP[aTQ%O@(a0p<v4._|q-QJC.');
define('SECURE_AUTH_SALT', 'lI&|k@,zdwxl|41RFTa)~,K&TD}cGp^=9T/ <6cfq9<#EP/ Fu9xUwpYgYM*c)CL');
define('LOGGED_IN_SALT',   'm$AJ{;sIqrC4Qi[D{9415Qy5?HO*z~.u+^pb4?c-b(a/q9Uv:CKYoa+1o$TGY:0w');
define('NONCE_SALT',       'zCdz-lIMU${+5*}qKCWT|-v( #TI+g*@S7 .{:In)w7jt<Dv^~:8<8n#?|pd-_$_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ro_RO');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
