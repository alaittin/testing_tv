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
$GLOBALS['TL_DCA']['tl_tvfi_bdf_evenement'] = array
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
			'mode'					=> 2,
			'fields'				=> array('evt_date_debut'),
			'flag'					=> 10,
			'panelLayout'			=> 'filter;search,limit,sort'
		),
		'label' => array
		(
			'fields'				=> array('evt_nom'),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['import'],
				'href'                => 'key=import',
				'class'               => 'header_css_frontenduserimport',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['edit'],
				'href'				=> 'act=edit',
				'icon'				=> 'edit.gif'
			),
			'copy' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['copy'],
				'href'				=> 'act=copy',
				'icon'				=> 'copy.gif'
			),
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			),

		)
	),

	// Palettes
	'palettes' => array
	(		
		'default'			=> 'tstamp_creation,tstamp;{essentials_legend},evt_nom,evt_type_id,evt_date_debut,evt_date_fin;{address_legend:hide},evt_adr1,evt_adr2,evt_tel1,evt_tel2,evt_tel3,evt_fax,evt_num_stand,evt_contact1_nom,evt_contact1_mail,evt_contact2_nom,evt_contact2_mail,evt_url;{presentation_legend:hide},evt_pres_fr,evt_pres_en,evt_pres_es;{description_legend:hide},evt_film_air,evt_logo,evt_autre_logo,evt_initiale,evt_galerie,evt_galerie_date_creation,evt_guide_fr,evt_transport_fr,evt_transport_en;{alerte_legend:hide},evt_alerte,evt_alerte_message,evt_alerte_date',
		),

	// Subpalettes
	'subpalettes' => array
	(
	),

	// Fields
	'fields' => array
	(

		// HEADER ----------------------------------------------------------------------------------------------------
		
		'tstamp_creation' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['tstamp_creation'],
			'default'			=> time(),
			'exclude'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim', 'readonly'=>true, 'tl_class'=>'w50')
		),

		'tstamp' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['tstamp'],
			'default'			=> time(),
			'exclude'			=> false,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim','readonly'=>true)
		),

		// ESSENTIALS ----------------------------------------------------------------------------------------------------

		'evt_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_nom'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50 clr')
		),

		'evt_type_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_type'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_bdf_evenement_type.evp_nom',
			'eval'              => array('mandatory'=>true, 'includeBlankOption' => true, 'tl_class'=>'w50') 
		),
		
		'evt_date_debut' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_date_debut'],
			'sorting'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('mandatory' => false, 'rgxp'=>'date', 'tl_class'=>'w50 clr','datepicker'=>$this->getDatePickerString()),
		),
					
 		'evt_date_fin' => array
 		(
 			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_date_fin'],
 			'sorting'			=> true,
 			'inputType'			=> 'text',
 			'eval'				=> array('mandatory' => false, 'rgxp'=>'date','datepicker'=>$this->getDatePickerString()),
 		),  

 		// ADDRESS ----------------------------------------------------------------------------------------------------

		'evt_adr1' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_adr1'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>true,  'style'=>'height:60px;width:314px;','tl_class'=>'w50' )
		),

 		'evt_adr2' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_adr2'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false,  'style'=>'height:60px;width:314px;')
		),
				
  	'evt_tel1' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_tel1'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50 clr')
		),

		'evt_tel2' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_tel2'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
		
		'evt_tel3' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_tel3'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),		

		'evt_fax' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_fax'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
 		
		'evt_num_stand' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_num_stand'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>5, 'size'=>10, 'tl_class'=>'w50')
		),
		
		'evt_contact1_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact1_nom'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50' )
		),

		'evt_contact1_mail' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact1_mail'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp' => 'email', 'size'=>10, 'tl_class'=>'w50' )
		),

		'evt_contact2_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact2_nom'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50' )
		),

		'evt_contact2_mail' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact2_mail'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp' => 'email', 'size'=>10, 'tl_class'=>'w50' )
		),

		'evt_url' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_url'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=> 'url', 'size'=>10, 'tl_class'=>'w50' )
		),

		'evt_contact1_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_contact1_nom'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50' )
		),
								
		// PRESS ----------------------------------------------------------------------------------------------------
			'evt_pres_fr' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_pres_fr'],
				'inputType'			=> 'textarea',
				'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true) #, 'cols'=>40, 'preserveTags'=>true
			),

			'evt_pres_en' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_pres_en'],
				'inputType'			=> 'textarea',
				'eval'				=> array('mandatory'=>false,  'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
			),

			'evt_pres_es' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_pres_es'],
				'inputType'			=> 'textarea',
				'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
			),
	
 		// DESCRIPTION INFO ----------------------------------------------------------------------------------------------------
	
		 	'evt_logo' => array
		 	(
		 		'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_logo'],
		 		'inputType'   => 'fileTree',
		 		'eval'        => array('files'=>true, 'fieldType'=>'radio')
		 	),

		 	'evt_autre_logo' => array
		 	(
		 		'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_autre_logo'],
		 		'inputType'   => 'fileTree',
		 		'eval'        => array('files'=>true, 'fieldType'=>'radio')
		 	),
 	
 		'evt_initiale' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_initiale'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>2, 'size'=>10)
		),
		
		'evt_galerie' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_galerie'],
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		
 		'evt_galerie_date_creation' => array
 		(
 			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_galerie_date_creation'],
 			'inputType'			=> 'text',
 			'eval'				=> array('mandatory' => false, 'rgxp'=>'date','datepicker'=>$this->getDatePickerString()),
 		),

	 	'evt_guide_fr' => array
	 	(
	 		'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_guide_fr'],
	 		'inputType'   => 'fileTree',
	 		'eval'        => array('files'=>true, 'fieldType'=>'radio')
	 	),
	
 		'evt_transport_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_transport_fr'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false,  'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
		
 		'evt_transport_en' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_transport_en'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false,  'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
 		
	 
		// ALERTE INFO ----------------------------------------------------------------------------------------------------		
		'evt_alerte' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_alerte'],
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
 
 		'evt_alerte_message' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_alerte_message'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false,  'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),

		'evt_alerte_date' => array
 		(
 			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['evt_alerte_date'],
 			'sorting'			=> true,
 			'inputType'			=> 'text',
 			'eval'				=> array('mandatory' => false, 'rgxp'=>'date','datepicker'=>$this->getDatePickerString()),
 		),

	)
);


?>