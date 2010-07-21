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
 * Table stage 
 */
$GLOBALS['TL_DCA']['tl_tvfi_bdf_evenement_type'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'				=> 'Table',
		'enableVersioning'		=> true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'					=> 1,
			'fields'				=> array('evp_nom'),
			'flag'					=> 1,
			'panelLayout'			=> 'filter;search,limit,sort'
		),
		'label' => array
		(
			'fields'				=> array('evp_nom'),
			'format'				=> '%s <span style="color:#b3b3b3; padding-left:3px;"></span>'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			),
			'import' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['import'],
				'href'                => 'key=import',
				'class'               => 'header_css_frontenduserimport',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['edit'],
				'href'				=> 'act=edit',
				'icon'				=> 'edit.gif'
			),
			'copy' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['copy'],
				'href'				=> 'act=copy',
				'icon'				=> 'copy.gif'
			),
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			),

		)
	),

	// Palettes
	'palettes' => array
	(		
		'default'			=> 'tstamp_creation,tstamp;{essentials_legend},evp_nom,evp_group_id,evp_initiale;{presentation_legend},evp_pres_fr,evp_pres_en,evp_pres_es;',
	),

	// Fields
	'fields' => array
	(

		// HEADER ----------------------------------------------------------------------------------------------------
		
		'tstamp_creation' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['tstamp_creation'],
			'default'			=> time(),
			'exclude'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim', 'readonly'=>true, 'tl_class'=>'w50')
		),

		'tstamp' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['tstamp'],
			'default'			=> time(),
			'exclude'			=> false,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim','readonly'=>true)
		),

		// ESSENTIALS ----------------------------------------------------------------------------------------------------
 
		'evp_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_nom'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50 clr')
		),

		'evp_group_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_group'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_bdf_evenement_type_group.nom_'.$GLOBALS['TL_LANGUAGE'],
			'eval'              => array('mandatory'=>true, 'includeBlankOption' => true, 'tl_class'=>'w50') 
		),
		
		'evp_initiale' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_initiale'],
			'inputType'		=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>2, 'size'=>10, 'tl_class'=>'w50')
		),
								
		// PRESS ----------------------------------------------------------------------------------------------------
			'evp_pres_fr' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_pres_fr'],
				'inputType'			=> 'textarea',
				'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true) #, 'cols'=>40, 'preserveTags'=>true
			),

			'evp_pres_en' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_pres_en'],
				'inputType'			=> 'textarea',
				'eval'				=> array('mandatory'=>false,  'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
			),

			'evp_pres_es' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement_type']['evp_pres_es'],
				'inputType'			=> 'textarea',
				'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
			),	 	  
	)
);


?>