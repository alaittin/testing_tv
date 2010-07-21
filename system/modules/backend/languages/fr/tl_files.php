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

$GLOBALS['TL_LANG']['tl_files']['name'] = array('Nom', 'Contao ajoute automatiquement l\'extension de fichier.');
$GLOBALS['TL_LANG']['tl_files']['fileupload'] = array('Fichiers à envoyer', 'Parcourir votre ordinateur et sélectionner les fichiers à envoyer sur le serveur.');
$GLOBALS['TL_LANG']['tl_files']['editor'] = array('Editeur de code source', 'Pour modifier le code source.');
$GLOBALS['TL_LANG']['tl_files']['upload'] = 'Envoi des fichiers';
$GLOBALS['TL_LANG']['tl_files']['uploadNback'] = 'Envoi des fichiers et retour en arrière';
$GLOBALS['TL_LANG']['tl_files']['editFF'] = 'Editer un fichier ou un répertoire';
$GLOBALS['TL_LANG']['tl_files']['uploadFF'] = 'Envoyer un fichier dans le répertoire "%s"';
$GLOBALS['TL_LANG']['tl_files']['editFile'] = 'Editer le fichier "%s"';
$GLOBALS['TL_LANG']['tl_files']['browseFiles'] = 'Parcourir les fichiers';
$GLOBALS['TL_LANG']['tl_files']['clearList'] = 'Effacer la liste';
$GLOBALS['TL_LANG']['tl_files']['startUpload'] = 'Lancer le transfert';
$GLOBALS['TL_LANG']['tl_files']['fancy_progressOverall'] = 'Progression générale ({total})';
$GLOBALS['TL_LANG']['tl_files']['fancy_currentTitle'] = 'Progression';
$GLOBALS['TL_LANG']['tl_files']['fancy_currentFile'] = 'Envoi {name}';
$GLOBALS['TL_LANG']['tl_files']['fancy_currentProgress'] = 'Envoi : {bytesLoaded} à {rate}, {timeRemaining} restant.';
$GLOBALS['TL_LANG']['tl_files']['fancy_remove'] = 'Enlever';
$GLOBALS['TL_LANG']['tl_files']['fancy_removeTitle'] = 'Cliquez pour enlever cette entrée';
$GLOBALS['TL_LANG']['tl_files']['fancy_fileError'] = 'Échec de l’envoi';
$GLOBALS['TL_LANG']['tl_files']['fancy_duplicate'] = 'Le fichier <em>{name}</em> est déjà ajouté, les doublons sont pas autorisés.';
$GLOBALS['TL_LANG']['tl_files']['fancy_sizeLimitMin'] = 'Le fichier <em>{name}</em> (<em>{size}</em>) est trop petit, la taille minimale est {fileSizeMin}.';
$GLOBALS['TL_LANG']['tl_files']['fancy_sizeLimitMax'] = 'Le fichier <em>{name}</em> (<em>{size}</em>) est trop gros, la taille maximale est <em>{fileSizeMax}</em>.';
$GLOBALS['TL_LANG']['tl_files']['fancy_fileListMax'] = 'Le fichier <em>{name}</em> n’a pas pu être ajouté, le nombre de <em>{fileListMax} fichiers</em> est dépassé.';
$GLOBALS['TL_LANG']['tl_files']['fancy_fileListSizeMax'] = 'Le fichier <em>{name}</em> (<em>{size}</em>) est trop gros, la taille globale de <em>{fileListSizeMax}</em> est dépassée.';
$GLOBALS['TL_LANG']['tl_files']['fancy_httpStatus'] = 'Le serveur a renvoyé le statut HTTP <code>#{code}</code>';
$GLOBALS['TL_LANG']['tl_files']['fancy_securityError'] = 'Une erreur de sécurité s’est produite ({text})';
$GLOBALS['TL_LANG']['tl_files']['fancy_ioError'] = 'Une erreur d’envoi ou de chargement a empêché l’opération de se terminer correctement ({text})';
$GLOBALS['TL_LANG']['tl_files']['fancy_uploadCompleted'] = 'Transfert est terminé';
$GLOBALS['TL_LANG']['tl_files']['new'] = array('Nouveau répertoire', 'Créer un nouveau répertoire.');
$GLOBALS['TL_LANG']['tl_files']['cut'] = array('Déplacer un fichier ou un répertoire', 'Déplacer le fichier ou le répertoire "%s"');
$GLOBALS['TL_LANG']['tl_files']['copy'] = array('Dupliquer un fichier ou un répertoire', 'Dupliquer le fichier ou le répertoire "%s"');
$GLOBALS['TL_LANG']['tl_files']['edit'] = array('Renommer un fichier ou un répertoire', 'Renommer le fichier ou le répertoire "%s"');
$GLOBALS['TL_LANG']['tl_files']['delete'] = array('Supprimer un fichier ou un répertoire', 'Supprimer le fichier ou le répertoire "%s"');
$GLOBALS['TL_LANG']['tl_files']['source'] = array('Éditer le fichier', 'Éditer le fichier "%s"');
$GLOBALS['TL_LANG']['tl_files']['protect'] = array('Protéger le répertoire', 'Protéger le répertoire "%s"');
$GLOBALS['TL_LANG']['tl_files']['unlock'] = array('Retirer la protection', 'Retirer la protection du répertoire "%s"');
$GLOBALS['TL_LANG']['tl_files']['move'] = array('Envoi de fichier', 'Envoyer un ou plusieurs fichiers vers le serveur');
$GLOBALS['TL_LANG']['tl_files']['pasteinto'] = array('Coller dans', 'Coller dans ce répertoire');

?>