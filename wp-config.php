<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'annoncesh3g2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AUNnV+>hzO.ks]RoGfo6F!~T=C0u]/1jLr 4L/ZK0djTAx-K|*,OQ8o50{R-3j43');
define('SECURE_AUTH_KEY',  '@PX([M7!(cH1sn3WU_QZii+pur2.(?AzHeH{?O7(,mvRhnfz@&Nx>1:q,#!~0-)?');
define('LOGGED_IN_KEY',    'R]|le$+Lg~UF2Ailt=:Oga.u(I*~HLc.W5ZIol#:~EWn<>F8 iLXtmw5vTi)`;Si');
define('NONCE_KEY',        'WUZ>9k&b#?8P-I=,Tlv$xI1j%:qUesuv`]@N%BM)G20_E7tG}%:q2KYeY7oR6wlV');
define('AUTH_SALT',        'ySCylwv$$)sR>cg>u/mhgiaq8pGZ_qd6rZ+=E@]J>dg<t?88K1Wc-[]E_5O$Z1&d');
define('SECURE_AUTH_SALT', '>JS%f_Akt:;AH|QmyGV7mR7/hkRo}|%q(kB!j?Z}?$hk+pq.m9C!-g,=Xa;O R/@');
define('LOGGED_IN_SALT',   'nWo{Rk]^Ax&vpGiGgeL<x:+F?@>y 4BLN,0FxsmgISycc=2t,+#FVH9cE#B8B[~#');
define('NONCE_SALT',       'Q:Pk,ZRVhUVloqb;~LhFV;7kNT`0=G(?K)#rkTT8*#-}MFI[SsW/}+j,2b*X>}#3');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpGphs_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');