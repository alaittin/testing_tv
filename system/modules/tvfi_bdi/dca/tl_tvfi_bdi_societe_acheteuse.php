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

/**
 * Table stage 
 */
$GLOBALS['TL_DCA']['tl_tvfi_bdi_societe_acheteuse'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'				=> 'Table',
		'emodel'					=> 'SocieteAcheteuse',
		'ctable'					=> array('tl_tvfi_bdi_departement'),
		'enableVersioning'			=> true,
		'onsubmit_callback' => array
		(
			array('SocieteAcheteuse', 'bo_save')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'					=> 1,
			'fields'				=> array('sta_nom'),
			'flag'					=> 1,
			'panelLayout'			=> 'filter;search,limit,sort'
		),
		'label' => array
		(
			'fields'				=> array('sta_nom'),
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
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['edit'],
				'href'				=> 'act=edit',
				'icon'				=> 'edit.gif'
			),
			'copy' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['copy'],
				'href'				=> 'act=copy',
				'icon'				=> 'copy.gif'
			),
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			),

			'departement' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['departement'],
				'href'				=> 'table=tl_tvfi_bdi_departement',
				'icon'				=> 'system/modules/tvfi_bdi/html/imgs/dept.gif'
			),


		)
	),

	// Palettes
	'palettes' => array
	(
/* 	 		'__selector__'		=> array('type'), */
			'default'			=> 'tstamp_creation,tstamp,sta_source;{essentials_legend},sta_nom,sta_pays_id,sta_statut,type,sta_nom_commercial,sta_telephone,sta_fax,sta_url,sta_email,published;{broadcast_legend:hide},format,resolution,theme,genre,sta_traduction,sta_sous_titrage,sta_prod,sta_coprod,sta_achat,sta_internat,sta_locaux,sta_audience,sta_typepay,sta_abonnes,sta_support,sta_bit_cab,sta_bit_sat,sta_bit_htz,sta_bit_htznum,sta_bit_int,sta_couv_htz,sta_couv_cab,sta_couv_sat,sta_couv_int,sta_couv_hzn,sta_lang_diff',
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
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['tstamp_creation'],
			'default'			=> time(),
			'exclude'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim', 'readonly'=>true, 'tl_class'=>'w50')
		),

		'tstamp' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['tstamp'],
			'default'			=> time(),
			'exclude'			=> false,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim','readonly'=>true)
		),

		'sta_source' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_source'],
			'inputType'			=> 'text',
			'search'			=> true,
			'eval'				=> array('mandatory'=>false, 'tl_class' => 'clr')
		),


		// ESSENTIALS ----------------------------------------------------------------------------------------------------

		'sta_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_nom'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10)
		),

		'pays_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_pays_id'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_pays.pys_nom_fr',
			'eval'              => array('mandatory'=>true, 'tl_class'=>'w50', 'includeBlankOption' => true) 
		),

		'sta_statut' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_statut'],
			'filter'			=> true,
			'inputType'			=> 'select',
			'options'			=> array('Public', 'Privé', 'Mixte', 'Inconnu', 'Autre'),
			'reference'			=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_statuts'],
			'eval'				=> array('includeBlankOption' => true, 'mandatory' => true)
		),
		'type' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['type'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('multiple'=>true, 'mandatory'=>true, 'tl_class'=>'clr'),
			'options_callback'	=> array('TypeSocieteAcheteuse', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_getTypes')
			),
			'save_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_saveTypes')
			),
		),

		'sta_nom_commercial' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_nom_commercial'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10)
		),

				
  		'sta_telephone' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_telephone'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50 clr')
		),

 		'sta_fax' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_fax'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

		'sta_url' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_url'],
			'inputType'			=> 'text',
			'default'			=> '',
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'rgxp'=>'url', 'tl_class'=>'w50')
		),
 
 		'sta_email' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_email'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'rgxp'=>'email', 'tl_class'=>'w50')
		),

		'published' => array
		(
			'exclude'			=> false,
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['published'],
			'filter'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('doNotCopy'=>true, 'tl_class'=>'clr', 'includeBlankOption' => true, 'blankOptionLabel' => &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['published']['status']['0']),
			'options'			=> array('1', '2'),
			'reference'			=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['published']['status'],
		),

		// PROGRAMS & BROADCAST ----------------------------------------------------------------------------------------------------

		'format' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['format'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false),
			'options_callback'	=> array('Format', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_getFormats')
			),
			'save_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_saveFormats')
			),
		),

		'resolution' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['resolution'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false),
			'options_callback'	=> array('Resolution', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_getResolutions')
			),
			'save_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_saveResolutions')
			),
		),

		'theme' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['theme'],
			'sorting'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false, 'tl_class' => 'w50'),
			'options_callback'	=> array('Theme', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_getThemes')
			),
			'save_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_saveThemes')
			),
		),

		'genre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['genre'],
			'sorting'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false),
			'options_callback'	=> array('Genre', 'bo_listAsArray'),
			'load_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_getGenres')
			),
			'save_callback'		=> array
			(
				array('SocieteAcheteuse', 'bo_saveGenres')
			),
		),

		'sta_traduction' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_traduction'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

		'sta_sous_titrage' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_sous_titrage'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

 		'sta_prod' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_prod'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'sta_coprod' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_coprod'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'sta_achat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_achat'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'sta_internat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_internat'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'sta_locaux' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_locaux'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

 		'sta_audience' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_audience'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

		'sta_typepay' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_typepay'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

 		'sta_abonnes' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_abonnes'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

 		'sta_support' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_support'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

		'sta_bit_cab' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_bit_cab'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'sta_bit_sat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_bit_sat'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'sta_bit_htz' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_bit_htz'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'sta_bit_htznum' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_bit_htznum'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'sta_bit_int' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_bit_int'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

/*
  `sta_sta_id_adresse` int(11) DEFAULT '0',
  `sta_commentaire` longtext,
  `sta_initiale` varchar(5) DEFAULT '',
  `sta_adresse` varchar(255) DEFAULT '',
  `sta_bouquet_exclu` tinyint(1) DEFAULT '0',
  `sta_actu` tinyint(1) DEFAULT '0',
  `sta_grille_pdf` varchar(150) DEFAULT '',
  `sta_alerte` tinyint(1) DEFAULT '0',
  `sta_alerte_message` longtext,
  `sta_alerte_date` datetime DEFAULT NULL,
  `sta_archive` tinyint(1) DEFAULT '0',
  `sta_htm` varchar(250) DEFAULT '',
  `sta_date_commentaire` datetime DEFAULT NULL,
  `sta_en_alerte` tinyint(1) DEFAULT '0',
*/



 		'sta_couv_htz' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_couv_htz'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'sta_couv_cab' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_couv_cab'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'sta_couv_sat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_couv_sat'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'sta_couv_int' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_couv_int'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),

 		'sta_couv_hzn' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_couv_hzn'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'sta_lang_diff' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['sta_lang_diff'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),

/*


	/* Coordonnées */

 /*
 	'adresse_1' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['adresse_1'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

  	'adresse_2' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['adresse_2'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

  	'city' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['city'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

		'zipcode' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['zipcode'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

  		'etat' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['etat'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
*/
/* 
*/


	/* Commentaires */
	
/*
		'commentaires_publics' => array
		(
			'label'										=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_societe_acheteuse']['commentaires_publics'],
			'inputType'								=> 'textarea',
			'eval'										=> array('mandatory'=>false, 'size'=>10)
		),

*/
	)
);


?>