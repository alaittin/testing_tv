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
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 *
 */


array_insert($GLOBALS['BE_MOD'], 0, array
(
	'bdf' => array
	(
		'societe_vendeuse' => array
		(
			'tables' => array('tl_tvfi_bdf_bo_societe_vendeuse','tl_member'),
			'icon'   => 'system/modules/tvfi_bdf/html/imgs/societe.png',
		),
		'evenement' => array
		(
			'tables' => array('tl_tvfi_bdf_evenement'),
			'icon'   => 'system/modules/tvfi_bdf/html/imgs/event-icon.png',
		),	
		'evenement_type' => array
		(
			'tables' => array('tl_tvfi_bdf_evenement_type'),
			'icon'   => 'system/modules/tvfi_bdf/html/imgs/event-icon.png',
		),			
	)
));	

/* Callback because we dont use dca for data version, no manual entry*/
$GLOBALS['BE_MOD']['bdf']['data_version'] = array 
(
		'callback' => 'DataVersion',
		'icon'   => 'system/modules/tvfi_bdf/html/imgs/validate.png',		
);


# Style for ItemListField widget
if (TL_MODE == 'BE')
{
 $GLOBALS['TL_CSS'][] = 'system/modules/tvfi_bdf/html/be_styles.css'; 
}

# Resgister new widget to the system
$GLOBALS['BE_FFL']['ItemListField'] = 'ItemListField';


// FOLDERURL dependencies

$GLOBALS['URL_KEYWORDS'][] = 'fiche';
$GLOBALS['URL_KEYWORDS'][] = 'ajax';
$GLOBALS['URL_KEYWORDS'][] = 'action';
$GLOBALS['URL_KEYWORDS'][] = 'page';
$GLOBALS['URL_KEYWORDS'][] = 'sort';
$GLOBALS['URL_KEYWORDS'][] = 'order';
$GLOBALS['URL_KEYWORDS'][] = 'alpha';
$GLOBALS['URL_KEYWORDS'][] = 'zone';
$GLOBALS['URL_KEYWORDS'][] = 'pays';


/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
**/
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'BDF' => array
	(

		// SociŽtŽs
		'bdf_new_societes_vendeuses'			=> 'ModuleBDFNewSocietesVendeuses',
		'bdf_last_societes_vendeuses'			=> 'ModuleBDFLastSocietesVendeuses',
		'bdf_societes_vendeuses'				=> 'ModuleBDFSocietesVendeuses',
		'bdf_fiche_societe_vendeuse'			=> 'ModuleBDFFicheSocieteVendeuse',
		'bdf_organigramme_societe_vendeuse'		=> 'ModuleBDFOrganigrammeSocieteVendeuse',

		'mo_favoris_societes_acheteuses'		=> 'ModuleMOFavorisSocietesVendeuses',

		// Contacts
		'bdf_fiche_contact'						=> 'ModuleBDIFicheContact',

	)

));
 

?>