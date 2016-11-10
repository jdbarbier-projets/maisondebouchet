<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db577932072');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo577932072');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vaCB2eQG');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'db577932072.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '83|S{|_ e 1KNqn+>65$hQWn!RV2-C&D$IYc$rF#{byWW.PdG=7F9fe_e+vgX6[L');
define('SECURE_AUTH_KEY',  '!<{;5!|QJ1+=(- RB@5!]Ce(BzBY?zb&[HbIwq#:~_D4xg-]g ?-7Ipds$VvdMU ');
define('LOGGED_IN_KEY',    'lFC:5HyWoGVD-+u?$Hu!C(2UVS*i.[lqr6+Cw]*0#_SsUx1W#+MH0(eKN,17|Nq~');
define('NONCE_KEY',        'l=t?$Ep1bQ[Lyee}-S<>wFm8y#HqggyF|CUtlRtwC{+;`knm/u~c.w|#b{]|ANdG');
define('AUTH_SALT',        ')K=Ps,-VrRdWoRn{uFV=,!qFBO2&7-QJBZ1D>!D0K:371q>PB)r-K:&FZ-o,|-II');
define('SECURE_AUTH_SALT', 'z}58-$U5?SOesGG* })r4%z3pu]4T(f%KNHV=;:!u1(;{UuvPFiwe6-C<nw#3s+V');
define('LOGGED_IN_SALT',   'FTz>^bTI_t9!Y46-|bvj2<W9-YN!}X~_H-9Gsd6<@>v!OVuF@#!sg=72Oi}X~4(k');
define('NONCE_SALT',       'g ?(gm>hJV{4)2tv+5l-L}@UF?{kb&3N~:|_WlkaF;hmoT4w-$`/R?Tw2xl>o6/^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wpbouchet_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
