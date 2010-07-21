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
 * @copyright		2009 - Nouveau Western 
 * @author			Erwan Ripoll <erwan.ripoll@lightive.com>
 * @package			burex 
 * @license			GPL 
 * @filesource
 */


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
 * BACK END MODULES
 * -------------------------------------------------------------------------
 *
 */


array_insert($GLOBALS['BE_MOD'], 0, array
(
	'bdi' => array
	(
		'societe_acheteuse' => array
		(
			'tables' => array('tl_tvfi_bdi_societe_acheteuse', 'tl_tvfi_bdi_departement'),
			'icon'   => 'system/modules/tvfi_bdi/html/imgs/societe.png',
		),
		'contacts' => array
		(
			'tables' => array('tl_member'),
			'icon'   => 'system/modules/zburex/html/imgs/artists.png',
			'import' => array('CSVImporter', 'importContacts'),
		),
	)
));	


/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
**/
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'BDI' => array
	(

		// SociŽtŽs
		'bdi_new_societes_acheteuses'			=> 'ModuleBDINewSocietesAcheteuses',
		'bdi_societes_acheteuses'				=> 'ModuleBDISocietesAcheteuses',
		'bdi_fiche_societe_acheteuse'			=> 'ModuleBDIFicheSocieteAcheteuse',
		'bdi_organigramme_societe_acheteuse'	=> 'ModuleBDIOrganigrammeSocieteAcheteuse',

		'mo_favoris_societes_acheteuses'		=> 'ModuleMOFavorisSocietesAcheteuses',

		// Contacts
		'bdi_new_contacts'						=> 'ModuleBDINewContacts',
		'bdi_contacts'							=> 'ModuleBDIContacts',
		'bdi_fiche_contact'						=> 'ModuleBDIFicheContact',

		// Pays
		'bdi_pays'								=> 'ModuleBDIPays',
		'bdi_fiche_pays'						=> 'ModuleBDIFichePays',
		'bdi_last_updated_pays'					=> 'ModuleBDILastUpdatedPays',

		// Grilles des Programmes
		'bdi_grilles_programmes'				=> 'ModuleBDIGrillesProgrammes',
	)

));


/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 *
 */


/**
 * -------------------------------------------------------------------------
 * BACK END FORM FIELDS
 * -------------------------------------------------------------------------
 */


/**
 * -------------------------------------------------------------------------
 * FRONT END FORM FIELDS
 * -------------------------------------------------------------------------
 *
 */


/**
 * Cron jobs
 */


/**
 * -------------------------------------------------------------------------
 * CACHE TABLES
 * -------------------------------------------------------------------------
 *
 */


/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 *
 */


/**
 * -------------------------------------------------------------------------
 * PAGE TYPES
 * -------------------------------------------------------------------------
 *
 */

?>