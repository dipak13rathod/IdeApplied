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
define('DB_NAME', 'IdeApplied');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pAT2hG5{7d +eu5mu`F|m:`v>OdR{V(2jtI2Q)~x5lQv{~QC[P4zZ,S=jDC8Ez<D');
define('SECURE_AUTH_KEY',  '{t5?x?t J43)bAKmj&Uzf67RB_A{ohiMjjc(7;$4>Wm5Y4M9E^dhgk{;tbn9!+U_');
define('LOGGED_IN_KEY',    '~~Jq%XXq4Tg$=G,}INjjJ~n79N$(lZ}-^.vfo%Tw!3YIK`kHls4w:)>o?%yMLt[O');
define('NONCE_KEY',        ';.a<_%V2bsh~dQ,V@(>-M,WB/E[5lp:T;y}YS(OJZgFV+J{$:EHCR&hc=^4E_FA8');
define('AUTH_SALT',        'n3Z2YA:%_#t8mF=v&~@/(._B{U-qsN;7<]J%kg^I+w,)#R32v,d.~Y;- 3xKabNv');
define('SECURE_AUTH_SALT', '!UVDDb]m_HW2xr- [sceoi]Txu^CJF+-.[?*gS Ai|sk# x#4h j@6Q.C1+/;0tX');
define('LOGGED_IN_SALT',   '8|a:HuuC+l!6xW-m7l1rhBG:)-V:vn*BPCkDLIq#8#Km&)^<n85e$u<hyh=M56zE');
define('NONCE_SALT',       'uZ9siT)Stg}_ol5k0kB]71YhJaqqBH&3vYS5Pj.Nvf=)2F#}noph,$ cC;X@F?,h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
