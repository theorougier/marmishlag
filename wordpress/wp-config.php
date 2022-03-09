<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'data' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.J%5XPbMHksM[sb>Lfh^Y&e9:n*{t#T<$%c^]#O;}R]KERQr;MQ6^4IWOkLi#e~j' );
define( 'SECURE_AUTH_KEY',  ':1t>*{bdR!|t7Db*gZ(&H_YW>%EEmI;v&T<O:*vZ @$q%avJM`?tEWaCz_^(Jf4c' );
define( 'LOGGED_IN_KEY',    'MH%BbF#l}d^S3P~Y=q:}b{Y?T##,ZIIB7HKXL$|.95)Qg>j0|$}jyn1OE|9_H)}[' );
define( 'NONCE_KEY',        'Ieou9!S6BJ55*N>Q+.=VnY.WA-/HM3},=Styb&z9V;U;)k}t0?(j oNI-8x7*d^n' );
define( 'AUTH_SALT',        'vmR,q{j*K[Q01+(I|`JbW]uV!gF*(@)~JpCInlWnZ`@jH,3!-0m y8w_P~S6e5t8' );
define( 'SECURE_AUTH_SALT', '!*CNmVlQQ!V);({V=N1Z^k+*wK9LP(O5%1?O+NeL3v%{~n|;08-KC^8=e>:dr+x!' );
define( 'LOGGED_IN_SALT',   '9+L9M?==!fK-QOx{WUAWf @Uxop}>$Dok;HhXouYs>lLez4V x/]TLW#*ON=~cm@' );
define( 'NONCE_SALT',       'OH)9-EwO0G(|Y-:iQ&x*-334J,RRO(~!DA%Lj,]FDrp3P.Mv%~O6QL*6(TQYv_&w' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
