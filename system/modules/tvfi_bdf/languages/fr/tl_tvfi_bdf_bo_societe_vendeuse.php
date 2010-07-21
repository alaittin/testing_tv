<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
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
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package			TVFI
 * @license			GPL 
 * @filesource
 */


/**
 * Fields
 */

// HEADER

$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['tstamp'] = array('Dernière mise à jour', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['tstamp_creation'] = array('Date de création', '');
 
// ESSENTIALS

$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['essentials_legend'] = 'Les coordonnées';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['options_affichage_legend'] = 'Les options d\'affichage';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['description_legend'] = 'Description';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['additional_info_legend'] = 'Informations additionnelles';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['type_legend'] = 'Type de la société';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['contacts_legend'] = 'Les contacts';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['catalog_legend'] = 'Le catalogue';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['utilisateurs_legend'] = 'Les utilisateurs';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['validations_legend'] = 'Les validations';
 


$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_nom'] = array('Nom', 'Veuillez saisir le nom de la société.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_logo'] = array('Logo', 'Télécharger une image du logo.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['type'] = array('Type(s) d\'activit&eacute;s', 'Selectionnez un ou plusieurs types.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_tel'] = array('Telephone', 'Saisissez ici le n° de t&eacute;l&eacute;phone avec indicatif (ex : +33 1 49 29 52 10) ');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_fax'] = array('Fax', 'Saisissez ici le n° de fax avec indicatif (ex : +33 1 49 29 52 10)');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_web'] = array('Site internet', 'Saisissez ici l\'adresse du site internet pr&eacute;c&eacute;d&eacute;e de http://');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_email'] = array('Adresse e-mail de la société', 'Saisissez ici l\'adresse e-mail');


$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_fiche'] = array('Afficher la société','Affichage de la société sur le front.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_catalogue'] = array('Afficher le catalogue','Affichage du catalogue sur le front.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_membre'] = array('Member', 'Le status de la société.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_soc_speciale'] = array('Société non membre participation', 'Le status de la société.'); 

$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published'] = array('Statut de publication', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published']['status']['0'] = 'Test';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published']['status']['1'] = 'Online';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published']['status']['2'] = 'Archivé';

$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_adresse'] = array('Adresse', 'Veuillez saisir l\'adresse de la société');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_code_postal'] = array('Code Postal / ZIP ', 'Saisissez ici le code postal sans espace');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_ville'] = array('Ville', 'Saisissez ici la ville');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_tel'] = array('Telephone', 'Saisissez ici le n° de téléphone avec indicatif (ex : +33 1 49 52 10)');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_fax'] = array('Fax', 'Saisissez ici le n° de fax avec indicatif (ex : +33 1 49 52 10)');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_email'] = array('Adresse e-mail de la société', 'Saisissez ici l\'adresse e-mail');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_web'] = array('Site internet', 'Saisissez ici l\'adresse du site internet précédée de http://');
#$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['etat'] = array('&Eacute;tat', 'Saisissez ici l\'&eacute;tat');


$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_commentaire_fr'] = array('Commentaires français', 'Veuillez saisir les commentaires concernant la société, affich&eacute;s sur sa fiche français.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_fr'] = array('Description français', 'Veuillez saisir les description en français.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_en'] = array('Description anglais', 'Veuillez saisir les description en anglais.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_es'] = array('Description espagnol', 'Veuillez saisir les description en espagnol.');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_rdv_fr'] = array('Description rendez-vous français', 'Veuillez saisir les descriptions rendez-vous français.');

$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['auteur'] = array('Auteur de la fiche', 'Veuillez choisir le nom de l\'auteur de cette fiche Artiste.');
 

$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_mail_demo'] = array('Demo email', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_presskit'] = array('Dossier de presse', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_adelete'] = array('Adelete', '');


$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['catalogue'] = array('Les programmes','');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['utilisateur'] = array('Les utilisateurs','');

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['new']    = array('Nouvelle société', 'Cr&eacute;er une nouvelle société');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['edit']   = array('Editer la société', 'Editer la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['copy']   = array('Copier la société', 'Copier la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['delete'] = array('Supprimer la société', 'Supprimer la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['show']   = array('D&eacute;tails de la société', 'Afficher les d&eacute;tails de la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['utilisateurs'] = 'Les utilisateurs';
?>