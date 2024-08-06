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
define( 'DB_NAME', getenv('SQL_DATABASE'));

/** Database username */
define( 'DB_USER', getenv('SQL_USER'));

/** Database password */
define( 'DB_PASSWORD', getenv('SQL_USER_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST'));

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_bin' );

define('WP_SITEURL', 'https://' . getenv('DOMAIN_NAME'));
define('WP_HOME', 'https://' . getenv('DOMAIN_NAME'));

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
define('AUTH_KEY',         'S#!LKs@a%*d8v)x+H}5nZ9P/}~bR>&=6iJ>f((qX[TDKI3!;nfV77=.u^)weor4l');
define('SECURE_AUTH_KEY',  '2qJVi|J0dSiktIH$wLs/*6#k@[!V_|I^,Gs&s>k=/oi,?-`H-i{4eu*hxrhG7GTc');
define('LOGGED_IN_KEY',    'r6v5Yh `7Qi&Y53itkyI|+MSB<i3-M4#++vNqt2Co67`.ktn4x%2}%$NoKOqqwl<');
define('NONCE_KEY',        'R yk!uT-EC8z@(m0){t1Qx`w/|71Y-!o<a}6^1O_p5u(rr/$<gX?[{]h+bwM0v+|');
define('AUTH_SALT',        ')mKK=*1^,#{w(KPfi3UCdGB{ V_]D8<o4C<y{Kv7b{i]UdVLE$19/%Q$zRZ,5}`V');
define('SECURE_AUTH_SALT', 'EdP: Hop0-ms+N*9{~/ptGulSEXQi@.OIy^{L{yH]N(QOt1|!Kx50O?~NW}>J Ag');
define('LOGGED_IN_SALT',   'C`oN)xZsW7gu-H8|NC}@-n6}R*Uiya.e-+887QI3?_n2Hx|uRIdKIN}<}rTM34ba');
define('NONCE_SALT',       '>J2P~3/TFmvpo8B3E?bU.&h7Q%$pUl[qY@O.O*|sLz.ZR3ICLy $0$rOHgpYw-wT');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');