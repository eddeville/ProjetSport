<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'sportizingme');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'sportizingme');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'sportizingme');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'instance43494.db.xeround.com:8909');

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
define('AUTH_KEY',         '`ZH2d$nf?tTry8QpEo_z `Rd%?]DPMb-74I4(j+ +}0#l*){PR+5(4dk!y05nps;');
define('SECURE_AUTH_KEY',  'R@W(VwkT7BaDKDA`$D?L<m@`~.Tp$0S*KzikKY-e[8E.6k #SYT:/?cbD{yuJ]tl');
define('LOGGED_IN_KEY',    '|t&_LQW&O^=0/MLy5ZCdt+1,]?T@&u4d-})_zI_K_)XOIBe^/oGk{}029 ??7dx]');
define('NONCE_KEY',        '0Z?hk}<jw,[ =n~tEy.7aXkFxfu8>mKi3_4gum)[g-VLcgLV:[X=-%f*LHGb`mWg');
define('AUTH_SALT',        'ZduLvW1lxMQ@RK8.]ae<rl5rx-{t]E.Q}Z@(zq|1cX+b=/rf[o}V>,h0SY|Kb~p6');
define('SECURE_AUTH_SALT', '{[1s#R/2Qmi1&&*B^b* 7mHlgiGKEtP%.:0s?)6TZ;3gZ!:!CjzoFb3HdR=Mw4sw');
define('LOGGED_IN_SALT',   '/[EoAE9~P6Q$uCxz4TK7)updm5}da 7:vUEKGsBk`Bn[.p^ZH-M)nG;hZ!|B<l|O');
define('NONCE_SALT',       'Ue@6)gGTjWs:[&YB!Q<iA= v&lik/>$_A$!+,}4=TOyK2# VgJSjarvm~>@(?>[i');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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