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


$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('TvfiHtml', 'modifyHtml');

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 *
 */



/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
**/

$GLOBALS['FE_MOD']['navigationMenu']['breadcrumb'] = 'ModuleAriane';
$GLOBALS['FE_MOD']['application']['advancedSearch'] = 'ModuleAdvancedSearch';
$GLOBALS['FE_MOD']['application']['notificationIcon'] = 'ModuleNotificationIcons';


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



if (TL_MODE == 'FE')
{
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/tvfi__core/js/roar.js';
	$GLOBALS['TL_CSS'][] = 'system/modules/tvfi__core/css/roar.css';
}



?>