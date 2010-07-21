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

$GLOBALS['TL_LANG']['tl_install']['installTool'] = array('Outil d\'installation de Contao', 'Connexion à l\'outil d\'installation');
$GLOBALS['TL_LANG']['tl_install']['locked'] = array('L\'outil d\'installation a été verrouillé', 'Pour des raisons de sécurité, l\'outil d\'installation a été verrouillé. Ceci arrive si vous entrez un mauvais mot de passe plus de trois fois d\'affilée. Veuillez éditer le fichier de configuration locale et définissez em>installCount</em> à <em>0</em>.');
$GLOBALS['TL_LANG']['tl_install']['password'] = array('Mot de passe', 'Veuillez saisir le mot de passe de l\'outil d\'installation. Le mot de passe de l\'outil d\'installation n\'est pas le même que le mot de passe du back office de Contao.');
$GLOBALS['TL_LANG']['tl_install']['changePass'] = array('Mot de passe de l\'outil d\'installation', 'De plus, si vous voulez sécuriser ce script vous pouvez insérer la déclaration <strong>exit;</strong> dans le fichier <strong>/contao/install.php</strong> ou vous pouvez supprimer le fichier de votre serveur. Dans ce cas vous devez éditer les paramètres du système directement dans le fichier de configuration locale.');
$GLOBALS['TL_LANG']['tl_install']['encryption'] = array('Générer une clé de cryptage', 'Cette clé est utilisée pour stocker des données cryptées. Veuillez noter que les données cryptées peuvent être décryptées SEULEMENT avec cette clé ! Ne la changez pas s\'il existe déjà des données cryptées. Laisser vide pour générer une clé aléatoire.');
$GLOBALS['TL_LANG']['tl_install']['database'] = array('Vérifier la connection à la base de données', 'Saisissez vos paramètres de connexion à la base de données.');
$GLOBALS['TL_LANG']['tl_install']['collation'] = array('Classement', 'Pour de plus amples renseignements, consultez le <a href ="http://dev.mysql.com/doc/refman/5.1/en/charset-unicode- sets.html "onclick =" window.open (this.href); return false;">manuel MySQL</a>.');
$GLOBALS['TL_LANG']['tl_install']['update'] = array('Mettre à jour les tables de la base de données', 'Veuillez noter que cet assistant de mise à jour a uniquement été testé avec les bases de données MySQL et MySQLi. Si vous utilisez une autre base de données (Oracle par exemple), vous pourrait avoir à installer/mettre à jour votre base de données manuellement. Dans ce cas, allez dans le répertoire <strong>system/modules</strong> et cherchez dans tous ses sous-dossiers pour trouver les fichiers appelés <strong>dca/database.sql</strong>.');
$GLOBALS['TL_LANG']['tl_install']['template'] = array('Importer un modèle', 'Veuillez choisir un modèle dans le répertoire <em>/templates</em> pour l\'importer.');
$GLOBALS['TL_LANG']['tl_install']['admin'] = array('Créer un utilisateur administrateur', 'Si vous avez importé le site d\'exemple, l\'identifiant de l\'utilisateur administrateur sera <strong>k.jones</strong> et son mot de passe <strong>kevinjones</strong>. Consulter la page d\'accueil du site d\'exemple (front office) pour plus d\'information.');
$GLOBALS['TL_LANG']['tl_install']['completed'] = array('Félicitations !', 'Maintenant, veuillez vous connecter au back office de Contao et vérifiez tous les paramètres système. Puis, visitez votre site Web pour s\'assurer que Contao fonctionne correctement.');
$GLOBALS['TL_LANG']['tl_install']['ftp'] = array('Modifier les fichiers par FTP', 'Saisissez vos informations de connexion FTP afin que Contao puisse modifier les fichiers via FTP (Safe Mode Hack).');
$GLOBALS['TL_LANG']['tl_install']['accept'] = 'Accepter la licence';
$GLOBALS['TL_LANG']['tl_install']['beLogin'] = 'Connexion au back-office de Contao';
$GLOBALS['TL_LANG']['tl_install']['passError'] = 'Veuillez changer le mot de passe par défaut pour empêcher tout accès non autorisé !';
$GLOBALS['TL_LANG']['tl_install']['passConfirm'] = 'Le mot de passe par défaut a été changé.';
$GLOBALS['TL_LANG']['tl_install']['passSave'] = 'Enregistrer le mot de passe';
$GLOBALS['TL_LANG']['tl_install']['keyError'] = 'Veuillez créer une clé de cryptage !';
$GLOBALS['TL_LANG']['tl_install']['keyLength'] = 'Une clé de cryptage doit être au minimum de 12 caractères de long !';
$GLOBALS['TL_LANG']['tl_install']['keyConfirm'] = 'Une clé de cryptage a été créée.';
$GLOBALS['TL_LANG']['tl_install']['keyCreate'] = 'Générer la clé de cryptage';
$GLOBALS['TL_LANG']['tl_install']['keySave'] = 'Générer ou enregistrer la clé';
$GLOBALS['TL_LANG']['tl_install']['dbConfirm'] = 'Connexion à la base de données OK.';
$GLOBALS['TL_LANG']['tl_install']['dbError'] = 'Impossible de se connecter à la base de données !';
$GLOBALS['TL_LANG']['tl_install']['dbDriver'] = 'Pilote';
$GLOBALS['TL_LANG']['tl_install']['dbHost'] = 'Serveur';
$GLOBALS['TL_LANG']['tl_install']['dbUsername'] = 'Identifiant';
$GLOBALS['TL_LANG']['tl_install']['dbDatabase'] = 'Base de données';
$GLOBALS['TL_LANG']['tl_install']['dbPersistent'] = 'Connexion persistante';
$GLOBALS['TL_LANG']['tl_install']['dbCharset'] = 'Jeu de caractères';
$GLOBALS['TL_LANG']['tl_install']['dbCollation'] = 'Classement';
$GLOBALS['TL_LANG']['tl_install']['dbPort'] = 'Numéro de port';
$GLOBALS['TL_LANG']['tl_install']['dbSave'] = 'Enregistrer les paramètres de la base de données';
$GLOBALS['TL_LANG']['tl_install']['collationInfo'] = 'La modification du classement aura une incidence sur toutes les tables avec un préfixe <em>tl_</em>';
$GLOBALS['TL_LANG']['tl_install']['updateError'] = 'La base de données n\'est pas à jour !';
$GLOBALS['TL_LANG']['tl_install']['updateConfirm'] = 'La base de données est à jour.';
$GLOBALS['TL_LANG']['tl_install']['updateSave'] = 'Mise à jour de base de données';
$GLOBALS['TL_LANG']['tl_install']['update28'] = 'Il semble que vous mettez à jour depuis une version Contao antérieure à la version 2.8. Si tel est le cas, <strong>il vous faut \'exécuter la mise à jour vers la version 2.8</strong> afin de vérifier l\'intégrité de vos données !';
$GLOBALS['TL_LANG']['tl_install']['update28run'] = 'Exécuter la mise à jour vers la version 2.8';
$GLOBALS['TL_LANG']['tl_install']['update29'] = 'Il semble que vous mettez à jour depuis une version Contao antérieure à la version 2.9. Si tel est le cas, <strong>il vous faut \'exécuter la mise à jour vers la version 2.9</strong> afin de vérifier l\'intégrité de vos données !';
$GLOBALS['TL_LANG']['tl_install']['update29run'] = 'Exécuter la mise à jour vers la version 2.9';
$GLOBALS['TL_LANG']['tl_install']['importError'] = 'Veuilez choisir un fichier de modèle !';
$GLOBALS['TL_LANG']['tl_install']['importConfirm'] = 'Modèle importé le %s';
$GLOBALS['TL_LANG']['tl_install']['importWarn'] = 'Toutes les données existantes seront supprimées !';
$GLOBALS['TL_LANG']['tl_install']['templates'] = 'Modèles';
$GLOBALS['TL_LANG']['tl_install']['doNotTruncate'] = 'Ne pas vider les tables';
$GLOBALS['TL_LANG']['tl_install']['importSave'] = 'Importer un modèle';
$GLOBALS['TL_LANG']['tl_install']['importContinue'] = 'Toutes les données existantes seront supprimées ! Voulez-vous vraiment continuer ?';
$GLOBALS['TL_LANG']['tl_install']['adminError'] = 'Veuillez remplir tous les champs pour créer un utilisateur administrateur !';
$GLOBALS['TL_LANG']['tl_install']['adminConfirm'] = 'Un utilisateur administrateur a été créé.';
$GLOBALS['TL_LANG']['tl_install']['adminSave'] = 'Créer un compte administrateur';
$GLOBALS['TL_LANG']['tl_install']['installConfirm'] = 'Vous avez réussi à installer Contao.';
$GLOBALS['TL_LANG']['tl_install']['ftpHost'] = 'Serveur FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpPath'] = 'Chemin d\'accès relatif au répertoire Contao (ex. <em>httpdocs/</em>)';
$GLOBALS['TL_LANG']['tl_install']['ftpUser'] = 'Identifiant FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpPass'] = 'Mot de passe FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpSSLh4'] = 'Connexion sécurisée';
$GLOBALS['TL_LANG']['tl_install']['ftpSSL'] = 'Connexion via FTP-SSL';
$GLOBALS['TL_LANG']['tl_install']['ftpPort'] = 'Port FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpSave'] = 'Enregistrer les paramètres FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpHostError'] = 'Impossible de se connecter au serveur FTP %s';
$GLOBALS['TL_LANG']['tl_install']['ftpUserError'] = 'Impossible de se connecter en tant que "%s"';
$GLOBALS['TL_LANG']['tl_install']['ftpPathError'] = 'Impossible de localiser le répertoire de Contao %s';
$GLOBALS['TL_LANG']['tl_install']['CREATE'] = 'Créer de nouvelles tables';
$GLOBALS['TL_LANG']['tl_install']['ALTER_ADD'] = 'Ajouter de nouvelles colonnes';
$GLOBALS['TL_LANG']['tl_install']['ALTER_CHANGE'] = 'Changer les colonnes existantes';
$GLOBALS['TL_LANG']['tl_install']['ALTER_DROP'] = 'Supprimer les colonnes existantes';
$GLOBALS['TL_LANG']['tl_install']['DROP'] = 'Supprimer les tables existantes';

?>