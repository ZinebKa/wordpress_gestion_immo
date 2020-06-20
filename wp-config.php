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
define( 'DB_NAME', 'logement_bdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$3`n{<d!^Hq:v1]o)s9o;e5SdhM1LbLO+XkRGgR#QR#2t@L y5d0MsW,+?C4jurP' );
define( 'SECURE_AUTH_KEY',  'g6k~wue8W;C.7m(D3}A8.*YxpLp~s7?GRk>&c[b)%jca/)ObTm[L46Vn.06ZVk47' );
define( 'LOGGED_IN_KEY',    '^Ugh{pv9oT{C#NlI3jLXfnmj)Qh4Q,2K;~>(fqqCkRm>o>Z^?0Qdp=]z4IV?M(!W' );
define( 'NONCE_KEY',        '1yWIQMtJ~a*Dfm:c0r9Rss(0djbKf >:.U@9r]!Y=oKQ)*a]/DB:I7Y]$MrM9s. ' );
define( 'AUTH_SALT',        ';;Q^V8xD><vU|ABaI1Z3#LK9GN3xd?eu|1wuXK%WL.2S=vX(Z_hr,+I#oc$D4omo' );
define( 'SECURE_AUTH_SALT', 'k :(AVd0?NDk]@rNZRTSvu#maGmt->WN(ppXBUopUo#}^HL>loTxl+@zqNZB>}%[' );
define( 'LOGGED_IN_SALT',   '}3OvtqU4 l#WCWEq*;v,88W}l8}{AajTj6ukKNmg,D#f*Py~S]Oq*cO}LVglD4YX' );
define( 'NONCE_SALT',       '()]FQK}yv/6NXNR:g%3]Q~]OyFW3q#-d1XjpGs<Fbe5p8U!>UW|gx7sGLWd!Wbdd' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
