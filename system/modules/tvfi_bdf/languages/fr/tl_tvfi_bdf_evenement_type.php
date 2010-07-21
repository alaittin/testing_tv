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


# id, tstamp_creation,tstamp          ,evp_group_id    ,evp_initiale    ,evp_nom         ,evp_pres_fr     ,evp_pres_en     ,evp_pres_es     

$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['essentials_legend'] = 'Informations essentielles';
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['presentation_legend'] = 'Presentation';

$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['tstamp'] = array('Dernière mise à jour', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['tstamp_creation'] = array('Date de création', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_nom'] = array('Nom de l\'événement type', 'Veuillez saisir le nom de l\'événement type');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_group'] = array('Group Type de l\'événement type', 'Veuillez choisir le group type de l\'événement type');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_initiale'] = array('Initiale de l\'événement type', 'Veuillez saisir Initiale de l\'événement type');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_pres_fr'] = array('Présentation en français', 'Veuillez saisir présentation en français');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_pres_en'] = array('Présentation en anglais', 'Veuillez saisir présentation en anglais');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_pres_es'] = array('Présentation en espagnol', 'Veuillez saisir présentation en espagnol');
     

/**
 * Reference
 */
#$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement'][''] = '';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['new']    = array('Nouvel événement type', 'Cr&eacute;er une nouvelle événement type');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['edit']   = array('Editer l\'événement type', 'Editer l\'événement type ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['copy']   = array('Copier l\'événement type', 'Copier l\'événement type ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['delete'] = array('Supprimer l\'événement type', 'Supprimer l\'événement type ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['show']   = array('D&eacute;tails de l\'événement type', 'Afficher les d&eacute;tails de l\'événement  type ID %s');

?>