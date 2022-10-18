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
define( 'DB_NAME', 'webnavigactionofficiel' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Saintetienne290+' );

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
define( 'AUTH_KEY',         'hf6hk>tC`/R%x%rfj(=VEw+E4a:%o<A~*?vf|SU=w!6kz[KMcKiNVAnYL[Q@X>[%' );
define( 'SECURE_AUTH_KEY',  '(EzeY[i`F[0O;-zOab8Lh=;=:.F=Z*};|g|Pn20piBH/K>.h4u?<;n zG3h63R!0' );
define( 'LOGGED_IN_KEY',    'ms30ANq+uDO,q~)dZ]0>}.tHCZ@naj S>PQW@Un2V:.FE1wr:p{|`Jf;X;~Nt /S' );
define( 'NONCE_KEY',        'IhUY<Fm.oz+?.&x0G@`FBs:&,& md|fJ8%Cq>h;-tnRKRWeaOOhx3._^C2-Hilw3' );
define( 'AUTH_SALT',        'y21IUY[bOn,5$2nv`.OvM35>S+cSlk`Mwbh:-t4`65=_},dD#T<ZJ.+)_:4Ax-]A' );
define( 'SECURE_AUTH_SALT', 'hvdigH1=%$}kVU~,K?A3`WUVR7==tkSN7Rhv%a(v^1k0ICcE}WCg4i6[~p#qmSK?' );
define( 'LOGGED_IN_SALT',   ':sfBd@%=RiAU 2>Vz[@-DYG=6KGMWrGwb%`h,g!F0i#!t)p41, GxTx03C1/7*G=' );
define( 'NONCE_SALT',       'e7H;At$@8tV;d8]eI~HBfntOe%cj/GxOI6aJ*_@iX*Og8_V.Gy5cb$S`-# D,&H&' );
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

define('WP_MEMORY_LIMIT', '256M');
