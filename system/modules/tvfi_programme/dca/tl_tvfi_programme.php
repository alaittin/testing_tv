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
$GLOBALS['TL_DCA']['tl_tvfi_programme'] = array
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
			'fields'				=> array('fpg_titre_fr'),
			'flag'					=> 1,
			'panelLayout'			=> 'filter;search,limit,sort'
		),
		'label' => array
		(
			'fields'				=> array('fpg_titre_fr'),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_tvfi_programme']['import'],
				'href'                => 'key=import',
				'class'               => 'header_css_frontenduserimport',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['edit'],
				'href'				=> 'act=edit',
				'icon'				=> 'edit.gif'
			),
			'copy' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['copy'],
				'href'				=> 'act=copy',
				'icon'				=> 'copy.gif'
			),
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			),
			
		)
	),

	// Palettes
	'palettes' => array
	(		
		'default'			=> 'tstamp_creation,tstamp;{essentials_legend},fpg_titre_fr,fpg_titre_en,fpg_titre_es,collection_id,public_vise_id,nationalite_id,fpg_annee,fpg_en_production;{relations_legend},genre,format,theme,support,version_originale_id,version;{info_descriptive_legend},fpg_web,fpg_synopsis_fr,fpg_synopsis_en,fpg_synopsis_es;{info_commerciale_legend},contact_vendeur1_id,contact_vendeur2_id,fpg_droit_fr,fpg_droit_en;{others_legend},fpg_couleur,fpg_noir_blanc,fpg_colorise,fpg_extrait_video,fpg_date_extrait_video,fpg_duree1_nombre,fpg_duree1_min,fpg_duree1_sec,fpg_duree2_nombre,fpg_duree2_min,fpg_duree2_sec,fpg_duree3_nombre,fpg_duree3_min,fpg_duree3_sec,fpg_duree4_nombre,fpg_duree4_min,fpg_duree4_sec,fpg_recompenses,fpg_synopsis_rdv_fr,fpg_synopsis_rdv_en,fpg_online,fpg_hd,fpg_flyer,fpg_lien_video,fpg_lien_video_extrait,fpg_etat_trad_es,fpg_date_trad_es',
	),

	// Fields
	'fields' => array
	(

		// HEADER ----------------------------------------------------------------------------------------------------
		
		'tstamp_creation' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['tstamp_creation'],
			'default'			=> time(),
			'exclude'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim', 'readonly'=>true, 'tl_class'=>'w50')
		),

		'tstamp' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['tstamp'],
			'default'			=> time(),
			'exclude'			=> false,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim','readonly'=>true)
		),

		// ESSENTIALS ----------------------------------------------------------------------------------------------------
		
 
		'fpg_titre_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_titre_fr'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
		'fpg_titre_en' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_titre_en'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
		'fpg_titre_es' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_titre_es'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),	
		# collection: scope to societe later!
		'collection_id' => array 
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['collection_id'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_bdf_collection.col_nom_'.$GLOBALS['TL_LANGUAGE'], #lang
			'eval'              => array('mandatory'=>false, 'includeBlankOption' => true, 'tl_class'=>'w50') 
		),
		
		'public_vise_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['public_vise_id'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_public_vise.pbc_nom_'.$GLOBALS['TL_LANGUAGE'], #lang
			'eval'              => array('mandatory'=>true, 'includeBlankOption' => true, 'tl_class'=>'w50') 
		),

		'nationalite_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['nationalite_id'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_nationalite.nat_nom_'.$GLOBALS['TL_LANGUAGE'], #lang
			'eval'              => array('mandatory'=>true, 'includeBlankOption' => true, 'tl_class'=>'w50') 
		),

		'fpg_annee' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_annee'],
			'inputType'		=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w50')
		),

		'fpg_en_production' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_en_production'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12 w50'),
		),

		'genre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['genre'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false),
			'options_callback'	=> array('Genre', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('Programme', 'bo_getGenres')
			),
			'save_callback'		=> array
			(
				array('Programme', 'bo_saveGenres')
			),
		),

		'theme' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['theme'],
			'sorting'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false,'includeBlankOption' => true),
			'options_callback'	=> array('Theme', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('Programme', 'bo_getThemes')
			),
			'save_callback'		=> array
			(
				array('Programme', 'bo_saveThemes')
			),
		),
					
		'format' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['format'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false ),
			'options_callback'	=> array('Format', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('Programme', 'bo_getFormats')
			),
			'save_callback'		=> array
			(
				array('Programme', 'bo_saveFormats')
			),
		),
	
		'support' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['support'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false ),
			'options_callback'	=> array('Support', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('Programme', 'bo_getSupports')
			),
			'save_callback'		=> array
			(
				array('Programme', 'bo_saveSupports')
			),
		),

		'version_originale_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['version_originale_id'],
			'filter'      => true,
			'inputType'   => 'select',
			'eval'				=> array('multiple'=>false, 'mandatory'=>false ),
			'foreignKey'  => 'tl_tvfi_version.ver_nom_'.$GLOBALS['TL_LANGUAGE'], #lang
		),
/*
		'version' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['version'],
			'sorting'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false ),
			'options_callback'	=> array('Version', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('Programme', 'bo_getVersions')
			),
			'save_callback'		=> array
			(
				array('Programme', 'bo_saveVersions')
			),
		),
*/
    'version' => array
    (
    	'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['version'],
    	'sorting'			=> true,
    	'inputType'			=> 'select',
    	'eval'				=> array('multiple'=>true, 'mandatory'=>false ),
    	'options_callback'	=> array('Version', 'bo_listAsArray'),

    	'load_callback'		=> array
    	(
    		array('Programme', 'bo_getVersions')
    	),
    	'save_callback'		=> array
    	(
    		array('Programme', 'bo_saveVersions')
    	),

    ),

		
		
		###########
		
		'fpg_couleur' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_couleur'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),
		'fpg_noir_blanc' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_noir_blanc'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),
		'fpg_colorise' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_colorise'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),
	
		'fpg_extrait_video' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_extrait_video'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),		
 		'fpg_date_extrait_video' => array
 		(
 			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_date_extrait_video'],
 			'sorting'			=> true,
 			'inputType'			=> 'text',
 			'eval'				=> array('mandatory' => false, 'rgxp'=>'date','datepicker'=>$this->getDatePickerString()),
 		),  
/*
		'duree1' => array
		  (
		    'label'     => &$GLOBALS['TL_LANG']['tl_tvfi_programme']['durees'],
		    'inputType' => 'multitextWizard',
		    'eval'      => array
		      (
		        'mandatory' => false, 
		        'doNotSaveEmpty'=>false, 
#		        'style'=>'width:142px;', 
		        'columns' => 3, 
		        'labels' => array
		          (
								&$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree_nombre'][0],
								&$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree_min'][0],
								&$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree_sec'][0]
							)
						)
		  ),
*/		

		'fpg_duree1_nombre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree1_nombre'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10 clr')
		),
		'fpg_duree1_min' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree1_min'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree1_sec' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree1_sec'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree2_nombre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree2_nombre'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree2_min' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree2_min'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree2_sec' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree2_sec'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree3_nombre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree3_nombre'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree3_min' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree3_min'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree3_sec' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree3_sec'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree4_nombre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree4_nombre'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree4_min' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree4_min'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),
		'fpg_duree4_sec' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree4_sec'],
			'inputType'		=> 'text',
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>false, 'maxlength'=>10, 'size'=>10, 'tl_class'=>'w10')
		),	

		'fpg_recompenses' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_recompenses'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),

		'fpg_synopsis_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_fr'],
			'inputType'		=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),

		'fpg_synopsis_en' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_en'],
			'inputType'		=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
		'fpg_synopsis_es' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_es'],
			'inputType'		=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),

		/* Info Commercials */
		'contact_vendeur1_id' => array 
		(
			'label'							=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['contact_vendeur1_id'],
			'inputType'         => 'select',
#			'foreignKey'        => 'tl_tvfi_fo_contact_vendeur.fcv_nom',
			'options_callback'	=> array('FoContactVendeur', 'foContactVendeursListAsArray'),
			'eval'              => array('mandatory'=>false, 'includeBlankOption' => true, 'tl_class'=>'w50') 
		),
	 
	  'contact_vendeur2_id' => array 
	 	(
	 		'label'							=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['contact_vendeur2_id'],
	 		'inputType'         => 'select',
	 		'options_callback'	=> array('FoContactVendeur', 'foContactVendeursListAsArray'),
	 		'eval'              => array('mandatory'=>false, 'includeBlankOption' => true, 'tl_class'=>'w50') 
	 	),

		'fpg_droit_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_droit_fr'],
			'inputType'		=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
		'fpg_droit_en' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_droit_en'],
			'inputType'		=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),

		/* Info Descriptions */
		'fpg_web' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_web'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=> 'url', 'size'=>10, 'tl_class'=>'long' )
		),
		'fpg_synopsis_rdv_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_rdv_fr'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
		'fpg_synopsis_rdv_en' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_rdv_en'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
		'fpg_online' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_online'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),
		'fpg_hd' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_hd'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),

	 	'fpg_flyer' => array
	 	(
	 		'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_evenement']['fpg_flyer'],
	 		'inputType'   => 'fileTree',
	 		'eval'        => array('files'=>true, 'fieldType'=>'radio')
	 	),

/*		'fpg_lien_video' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_lien_video'],
			'inputType'   => 'inputUnit',
			'options'     => array('public','private'),
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=> 'url')
		),
*/
		'fpg_lien_video' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_lien_video'],
			'inputType'   => 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=> 'url')
		),
		
		'fpg_lien_video_extrait' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_lien_video_extrait'],
			'inputType'   => 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=> 'url')
		),

		'fpg_etat_trad_es' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_etat_trad_es'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),
	
		'fpg_date_trad_es' => array
 		(
 			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_date_trad_es'],
 			'sorting'			=> true,
 			'inputType'			=> 'text',
 			'eval'				=> array('mandatory' => false, 'rgxp'=>'date','datepicker'=>$this->getDatePickerString()),
 		),  

		'fpg_video_integrale' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_video_integrale'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'m12'),
		),
		 		
/*		+--------------------------+--------------
		| Field                    | Type         
		+--------------------------+--------------              
		| fpg_date_crea            | datetime     
		| fpg_video_integrale      | tinyint(1)   
		| fpg_video_integrale_type | smallint(6)  
		| fpg_extrait_video_type   | smallint(6)  
		| fpg_video_integrale_date | datetime     
*/							
		  
	)
);


?>