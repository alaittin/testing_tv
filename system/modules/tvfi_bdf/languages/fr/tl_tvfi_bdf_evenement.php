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

$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['tstamp'] = array('Dernière mise à jour', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['tstamp_creation'] = array('Date de création', '');

$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['essentials_legend'] = 'Informations essentielles';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['address_legend'] = 'Adresse et coordonnées';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['presentation_legend'] = 'Presentation';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['description_legend'] = 'Description';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['alerte_legend'] = 'Alerte';


// ESSENTIALS
#evt_nom,evt_date_debut,evt_date_fin;{address_legend:hide},evt_adr1,evt_adr2,evt_tel1,evt_tel2,evt_tel3,evt_fax,evt_num_stand,evt_contact1_nom,evt_contact1_mail,evt_contact2_nom,evt_contact2_mail,evt_url;{presentation_legend:hide},evt_pres_fr,evt_pres_en,evt_pres_es;{description_legend:hide},evt_film_air,evt_logo,evt_autre_logo,evt_initiale,evt_galerie,evt_galerie_date_creation,evt_guide_fr,evt_transport_fr,evt_transport_en,evt_detail_pays;{alerte_legend:hide},evt_alerte,evt_alerte_message,evt_alerte_date',


$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_nom'] = array('Nom de l\'événement', 'Veuillez saisir le nom de l\'événement');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_type'] = array('Type de l\'événement', 'Veuillez choisir le type de l\'événement');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_date_debut'] = array('Date de début de l\'événement', 'Veuillez saisir la date de début');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_date_fin'] = array('Date de fin de l\'événement', 'Veuillez saisir la date de fin');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_adr1'] = array('Adresse 1', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_adr2'] = array('Adresse 2', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_tel1'] = array('Téléphone 1', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_tel2'] = array('Téléphone 2', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_tel3'] = array('Téléphone 3', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_fax'] = array('Fax', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_num_stand'] = array('Numéro de stand', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact1_nom'] = array('Nom du premier contact', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact1_mail'] = array('Email du premier contact', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact2_nom'] = array('Nom du second contact', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact2_mail'] = array('Email du second contact', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_url'] = array('Site web de l\'événement', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_pres_fr'] = array('Présentation en français', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_pres_en'] = array('Présentation en anglais', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_pres_es'] = array('Présentation en espagnol', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_film_air'] = array('Film air service', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_logo'] = array('Fichier logo', 'Télécharger une image du logo');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_autre_logo'] = array('Autre fichier logo', 'Télécharger une second image du logo');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_initiale'] = array('Initiale de l\'événement', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_galerie'] = array('Galerie', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_galerie_date_creation'] = array('Date de creation de la galerie', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_guide_fr'] = array('Fichier guide en français', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_transport_fr'] = array('Transport en français', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_transport_en'] = array('Transport en anglais', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_detail_pays'] = array('', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_alerte'] = array('Alerte', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_alerte_message'] = array('Texte d\'alerte', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_alerte_date'] = array('Date de l\'alerte', '');
     

/**
 * Reference
 */
#$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement'][''] = '';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['new']    = array('Nouvel événement', 'Cr&eacute;er une nouvelle événement');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['edit']   = array('Editer l\'événement', 'Editer l\'événement ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['copy']   = array('Copier l\'événement', 'Copier l\'événement ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['delete'] = array('Supprimer l\'événement', 'Supprimer l\'événement ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['show']   = array('D&eacute;tails de l\'événement', 'Afficher les d&eacute;tails de l\'événement ID %s');

?>