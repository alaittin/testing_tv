<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Cyril Ponce 2007 - 2010
 * @copyright  Patrick Lefèvre 2008 - 2009
 * @copyright  Sophie Bertholet 2009
 * @copyright  Marie Noëlle Augendre 2009
 * @copyright  Jean-Christophe Brebion 2009
 * @copyright  
 * @author     Cyril Ponce <cyril@contao.fr>
 * @author     Patrick Lefèvre <patrick.lefevre@gmail.com>
 * @author     Sophie Bertholet <sophie.typolight@gmail.com>
 * @author     Marie Noëlle Augendre <mnaugendre@gmail.com>
 * @author     Jean-Christophe Brebion <jean-christophe@fairytree.net>
 * @link       http://www.typolight.fr
 * @package    French
 * @license    GPL
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'] = array('Titre du site', 'Saisir le titre du site internet.');
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'] = array('Adresse e-mail de l\'administrateur', 'Les messages générés automatiquement (ex: les e-mails de confirmation d\'inscription) sont envoyés à cette adresse.');
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'] = array('Format de la date', 'Choisir un format de date utilisé par la fonction PHP date().');
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'] = array('Format de l\'heure', 'Choisir un format d\'heure utilisé par la fonction PHP date().');
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'] = array('Format de la date et de l\'heure', 'Choisir un format de date et d\'heure utilisé par la fonction PHP date().');
$GLOBALS['TL_LANG']['tl_settings']['timeZone'] = array('Zone horaire', 'Sélectionner une zone horaire.');
$GLOBALS['TL_LANG']['tl_settings']['websitePath'] = array('Chemin relatif vers le répertoire de Contao', 'Le chemin relatif vers le répertoire de Contao est normalement généré automatiquement par l\'outil d\'installation.');
$GLOBALS['TL_LANG']['tl_settings']['characterSet'] = array('Jeu de caractères', 'Il est recommandé d\'utiliser UTF-8 pour que les caractères spéciaux soient affichés correctement.');
$GLOBALS['TL_LANG']['tl_settings']['customSections'] = array('Zones personnalisées', 'Saisir une liste, séparée par des virgules, de zones personnalisées.');
$GLOBALS['TL_LANG']['tl_settings']['enableGZip'] = array('Utiliser la compression GZip', 'Compresser les pages avant qu\'elles soient envoyées vers le navigateur.');
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'] = array('Enregistrements par page', 'Définir le nombre d\'enregistrements par page à afficher dans le back office.');
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'] = array('Nombre maximum d\'éléments par page', 'Cette limite globale prend effet si un utilisateur choisit l\'option "Afficher tous les dossiers" option.');
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'] = array('Ne pas masquer les éléments', 'Ne pas masquer les éléments lors de la prévisualisation dans le back office.');
$GLOBALS['TL_LANG']['tl_settings']['pNewLine'] = array('Utiliser les paragraphes pour générer de nouvelles lignes', 'Dans l\'éditeur de texte riche, utiliser des paragraphes au lieu de sauts de ligne lors de la création de nouvelles lignes de texte.');
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'] = array('Suffixe d\'URL', 'Le suffixe d\'URL sera ajouté à la chaîne URI pour simuler des documents statiques.');
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'] = array('Mode du cache', 'Sélectionner le mode du cache');
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'] = array('Ré-écrire les URLs', 'Laisser Contao générer des URL statiques sans le fragment index.php. Cette fonctionnalité nécessite "mod_rewrite", en renommant le fichier ".htaccess.default" en ".htaccess" et en ajustant le paramètre RewriteBase si nécessaire.');
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'] = array('Annuler l\'usage des alias de page', 'Contao utilisera l\'ID numérique de la page à la place de l\'alias de la page.');
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'] = array('Balises HTML autorisées', 'Saisir une liste de balises HTML. Toutes les autres balises seront enlevées des saisies de l\'utilisateur.');
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'] = array('Temps d\'attente en cas de compte verrouillé', 'Saisir une durée d\'attente (en secondes). Un compte est verrouillé si le mot de passe a été entré 3 fois de suite de manière incorrecte.');
$GLOBALS['TL_LANG']['tl_settings']['encryptionKey'] = array('Clé de cryptage', 'Ne la changez pas si vos données sont déjà cryptées ! Les données cryptées peuvent seulement être décryptées avec la même clé.');
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'] = array('Afficher les messages d\'erreurs', 'Afficher les messages d\'erreur à l\'écran (déconseillé pour les sites en production).');
$GLOBALS['TL_LANG']['tl_settings']['debugMode'] = array('Mode debug', 'Afficher à l\'écran certaines informations d\'exécution comme par exemple les requêtes à la base de données (déconseillé pour les sites en production).');
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'] = array('Annuler le contrôle du référant', 'Ne pas vérifier l\'adresse référante quand un formulaire est soumis. Choisir cette option est un risque potentiel pour la sécurité !');
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'] = array('Désactiver le contrôle de l\'IP', 'Ne pas lier les sessions aux adresses IP. Choisir cette option est un risque potentiel pour la sécurité !');
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'] = array('Types de fichiers pouvant être envoyés', 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être envoyés sur le serveur.');
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'] = array('Types de fichiers pouvant être téléchargés', 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être téléchargés.');
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'] = array('Types de fichiers pouvant être édités', 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être édités en ligne.');
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'] = array('Types d\'image valides', 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être manipulés par la classe image.');
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'] = array('Largeur maximale dans le front office', 'Si la largeur d\'une image ou d\'un film dépasse cette valeur, elle sera ajustée automatiquement.');
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'] = array('Qualité des vignettes JPG', 'Choisir la qualité des vignettes JPG en pourcentage.');
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'] = array('Répertoire contenant les fichiers', 'Saisir le chemin relatif du répertoire contenant les fichiers (par défaut: <em>tl_files</em>).');
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'] = array('Nombre de fichiers envoyés simultanément', 'Saisir le nombre de fichiers pouvant être envoyés simultanément.');
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'] = array('Taille de fichier maximale lors de l\'envoi', 'Saisir la taille maximale en octets des fichiers envoyés (1 Mo = 1000 Ko = 1000000 octets).');
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'] = array('Largeur maximale des images', 'Saisir la largeur maximale pour l\'envoi des images en pixels.');
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'] = array('Hauteur maximale des images', 'Saisir la hauteur maximale pour l\'envoi des images en pixels.');
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'] = array('Activer le moteur de recherche', 'Indexer les pages du front office afin qu\'elles puissent être recherchées.');
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'] = array('Indexer les pages protégées', 'Utiliser cette option avec soin et toujours penser à exclure de l\'indexation les pages personnalisées !');
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'] = array('Utiliser le SMTP pour l\'envoi des mails', 'Utiliser un serveur SMTP à la place de PHP <em>mail()</em> pour envoyer les e-mails.');
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'] = array('Nom d\'hôte du serveur SMTP', 'Saisir le nom d\'hôte du serveur SMTP.');
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'] = array('Nom d\'utilisateur SMTP', 'Si votre serveur de SMTP exige l\'authentification, saisir le nom d\'utilisateur.');
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'] = array('Mot de passe SMTP', 'Si votre serveur de SMTP exige l\'authentification, saisir le mot de passe.');
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'] = array('Sécurisation SMTP', 'Choisir la méthode de sécurisation SMTP (SSL or TLS).');
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'] = array('Numéro de port SMTP', 'Saisir le numéro de port du serveur SMTP.');
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'] = array('Modules inactifs', 'Désactiver l\'administration des modules dont vous n\'avez pas besoin.');
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'] = array('Durée de stockage des états d\'annulation', 'Saisir la durée de stockage des états d\'annulation en secondes (24 heures = 86400 secondes).');
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'] = array('Durée de stockage des versions', 'Saisir la durée de stockage des différentes versions d\'un enregistrement en secondes (90 jours = 7776000 secondes).');
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'] = array('Durée de stockage des journaux', 'Saisir la durée de stockage des entrées du journal système en secondes (14 jours = 1209600 secondes).');
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'] = array('Durée d\'une session', 'Saisir la durée de vie d\'une session en secondes (60 minutes = 3600 secondes).');
$GLOBALS['TL_LANG']['tl_settings']['autologin'] = array('Durée de connexion automatique', 'Définir la durée de connexion automatique (90 jours = 7776000 secondes).');
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'] = array('Utilisateur propriétaire par défaut', 'Sélectionner un utilisateur comme propriétaire par défaut d\'une page.');
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'] = array('Groupe propriétaire par défaut', 'Sélectionner un groupe comme propriétaire par défaut d\'une page.');
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'] = array('Permissions par défaut', 'Assigner les permissions d\'accès par défaut des pages et articles.');
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'] = array('URL de la mise à jour automatique (Live Update)', 'Saisir l\'URL de la mise à jour automatique (Live Update).');
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Titre du site internet';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Date et heure';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Configuration globale';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Configuration du back office';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Configuration du front office';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Paramètres de sécurité';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Fichiers et images';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Paramètres d\'envoi des fichiers';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Paramètres du moteur de recherche';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Configuration SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Modules inactifs';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Valeurs du timeout';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Permissions par défaut';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Mise à jour automatique';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Éditer la configuration locale';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Utiliser le cache du serveur et du navigateur';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Utiliser seulement le cache du serveur';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Utiliser seulement le cache du navigateur';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Désactiver le cache';

?>