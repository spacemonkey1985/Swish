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
define('DB_NAME', 'coulton.org');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'punkrock');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '!H<MC*<KGM&F6m^}F,o@|_h8W|On(Bc=sHk@u2{,?38P=g.7S1p.ynT^Hrh;r8W(');
define('SECURE_AUTH_KEY',  ':IxN[Cw%:CJ+g&MU~@0.5R+&&Ko o]4/K?b#F;lD5NqMv},?ta!sc5|vEO0o!E2&');
define('LOGGED_IN_KEY',    '(D~r *DIUfrt_[j9H&d!J&($u$R6vx@v[rZ/$7p1#@+:Z;dLExt{2EsC?47u@DB>');
define('NONCE_KEY',        'MC1M[B&:|Hx[p?=Dokq8!vlN_L[=Mk$ix!*)NS(ssnzu@r9lrr=dYY{Bvw{#_3_F');
define('AUTH_SALT',        'DHVQL4#0.fmCh0CN(3 (@Q5_nPqq4^ZGy<S*fAF,,UqEu(}Gy`UB]CGSy+mCG]N9');
define('SECURE_AUTH_SALT', '2p;C@IWv|x>S5]Fr@#7QePJSxcI3ui/NMe2/ELxt*`)UG=kjDRK lQ`mjY[b3G-~');
define('LOGGED_IN_SALT',   'Lv;Fl>rkn(?C3jhtJ gZ5Ut_}!BgRU:f2oe8%9`9XkcXyIy:j:=1v3,QV~Hs^Bj|');
define('NONCE_SALT',       '}}(u<v7;uTr h[dt$6Z?h3Xer.s]*<3*EF*2k(Ix[y=@MnA0qcH2]_xfDm(mwjDu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sa_test_blog_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
