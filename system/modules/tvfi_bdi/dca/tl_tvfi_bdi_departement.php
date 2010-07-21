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
$GLOBALS['TL_DCA']['tl_tvfi_bdi_departement'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'				=> 'Table',
		'ptable'					=> 'tl_tvfi_bdi_societe_acheteuse',
		'ctable'					=> array('tl_tvfi_bdi_poste'),
		'enableVersioning'			=> true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'					=> 1,
			'fields'				=> array('ach_nom'),
			'flag'					=> 1,
			'panelLayout'			=> 'filter;search,limit,sort'
		),
		'label' => array
		(
			'fields'				=> array('ach_nom'),
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
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['edit'],
				'href'				=> 'act=edit',
				'icon'				=> 'edit.gif'
			),
			'copy' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['copy'],
				'href'				=> 'act=copy',
				'icon'				=> 'copy.gif'
			),
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			),
/*
			'contacts' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['contacts'],
				'href'				=> 'table=tl_members',
				'icon'				=> 'system/modules/zburex/html/imgs/concerts.png'
			),
*/

		)
	),

	// Palettes
	'palettes' => array
	(
/* 	 		'__selector__'		=> array('type'), */
			'default'			=> 'tstamp_creation,tstamp;{essentials_legend},ach_nom,ach_pays_id,ach_telephone,ach_fax,ach_url,ach_email,published;',
			/* {broadcast_legend:hide},format,resolution,theme,genre,ach_traduction,ach_sous_titrage,ach_prod,ach_coprod,ach_achat,ach_internat,ach_locaux,ach_audience,ach_typepay,ach_abonnes,ach_support,ach_bit_cab,ach_bit_sat,ach_bit_htz,ach_bit_htznum,ach_bit_int,ach_couv_htz,ach_couv_cab,ach_couv_sat,ach_couv_int,ach_couv_hzn,ach_lang_diff', */
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
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['tstamp_creation'],
			'default'			=> time(),
			'exclude'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim', 'readonly'=>true, 'tl_class'=>'w50')
		),

		'tstamp' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['tstamp'],
			'default'			=> time(),
			'exclude'			=> false,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim','readonly'=>true)
		),


		// ESSENTIALS ----------------------------------------------------------------------------------------------------

		'ach_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_nom'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10)
		),

		'ach_pays_id' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_pays_id'],
			'filter'            => true,
			'inputType'         => 'select',
			'foreignKey'        => 'tl_tvfi_pays.pys_nom_fr',
			'eval'              => array('mandatory'=>true, 'tl_class'=>'w50', 'includeBlankOption' => true) 
		),

				
  		'ach_telephone' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_telephone'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50 clr')
		),

 		'ach_fax' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_fax'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

		'ach_url' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_url'],
			'inputType'			=> 'text',
			'default'			=> '',
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'rgxp'=>'url', 'tl_class'=>'w50')
		),
 
 		'ach_email' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_email'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'rgxp'=>'email', 'tl_class'=>'w50')
		),

		'published' => array
		(
			'exclude'			=> false,
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published'],
			'filter'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('doNotCopy'=>true, 'tl_class'=>'clr', 'includeBlankOption' => true, 'blankOptionLabel' => &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published']['status']['0']),
			'options'			=> array('1', '2'),
			'reference'			=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published']['status'],
		),

		// PROGRAMS & BROADCAST ----------------------------------------------------------------------------------------------------

		'format' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['format'],
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
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['resolution'],
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
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['theme'],
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
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['genre'],
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

		'ach_traduction' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_traduction'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

		'ach_sous_titrage' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_sous_titrage'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

 		'ach_prod' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_prod'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'ach_coprod' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_coprod'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'ach_achat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_achat'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'ach_internat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_internat'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

 		'ach_locaux' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_locaux'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

 		'ach_audience' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_audience'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

		'ach_typepay' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_typepay'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

 		'ach_abonnes' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_abonnes'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

 		'ach_support' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_support'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

		'ach_bit_cab' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_cab'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'ach_bit_sat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_sat'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'ach_bit_htz' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_htz'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'ach_bit_htznum' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_htznum'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		'ach_bit_int' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_int'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

/*
  `ach_ach_id_adresse` int(11) DEFAULT '0',
  `ach_commentaire` longtext,
  `ach_initiale` varchar(5) DEFAULT '',
  `ach_adresse` varchar(255) DEFAULT '',
  `ach_bouquet_exclu` tinyint(1) DEFAULT '0',
  `ach_actu` tinyint(1) DEFAULT '0',
  `ach_grille_pdf` varchar(150) DEFAULT '',
  `ach_alerte` tinyint(1) DEFAULT '0',
  `ach_alerte_message` longtext,
  `ach_alerte_date` datetime DEFAULT NULL,
  `ach_archive` tinyint(1) DEFAULT '0',
  `ach_htm` varchar(250) DEFAULT '',
  `ach_date_commentaire` datetime DEFAULT NULL,
  `ach_en_alerte` tinyint(1) DEFAULT '0',
*/



 		'ach_couv_htz' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_htz'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'ach_couv_cab' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_cab'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'ach_couv_sat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_sat'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'ach_couv_int' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_int'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),

 		'ach_couv_hzn' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_hzn'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),
 		'ach_lang_diff' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_lang_diff'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'tl_class'=>'w50')
		),

/*


	/* Coordonnées */

 /*
 	'adresse_1' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['adresse_1'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

  	'adresse_2' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['adresse_2'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

  	'city' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['city'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

		'zipcode' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['zipcode'],
			'inputType'			=> 'text',
			'eval'					=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

  		'etat' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['etat'],
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
			'label'										=> &$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['commentaires_publics'],
			'inputType'								=> 'textarea',
			'eval'										=> array('mandatory'=>false, 'size'=>10)
		),

*/
	)
);

/**
 * Class tl_tvfi_bdi_departement
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Controller
 */
class tl_tvfi_bdi_departement extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Autogenerate an organisme code if it has not been set yet
	 * @param mixed
	 * @param object
	 * @return string
	 */
	public function generateCode($varValue, DataContainer $dc)
	{
		$autoCode = false;

		// Generate alias if there is none
		if (!strlen($varValue))
		{
			$autoCode = true;
			if(strlen($dc->activeRecord->name))
			{
			
			$varValue = $dc->activeRecord->pays.strtoupper(substr($dc->activeRecord->name, 0, 3)).$dc->activeRecord->id;
			
			} else {
				return '';
			
			}
		}
		return $varValue;
	}

	public function getContacts($varValue, DataContainer $dc)
	{
			$objRecord = $this->Database->prepare("SELECT * FROM tl_member WHERE organisme = ? ")
													->execute($dc->activeRecord->id);
				
				if($objRecord->numRows > 0 ){
				
				while($objRecord->next()) {
				
					if($objRecord->types<>''){
						$_types = '';
				 		$types = unserialize($objRecord->types);
				 		if(is_array($types)){
							foreach($types as $type){
								if($type && $type <> ''){
									$objTypes = $this->Database->execute("SELECT nom_world FROM tl_burex_contact_types WHERE id=".$type);
									$_types[]= $objTypes->nom_world;				
								}
							}
							
							
						} else {
							$objTypes = $this->Database->execute("SELECT nom_world FROM tl_burex_contact_types WHERE id=".$types);
							$_types[]= $objTypes->nom_world;
						
						}
						
					$_types = is_array($_types) ? implode(', ', $_types) :'';

					}
									
					$records[] = array('id' => $objRecord->id, 'firstname' => $objRecord->firstname, 'lastname' => $objRecord->lastname, 'types' => $_types);
				}

				
				$return = '<ul style="list-style-type: none; margin-left:0px; padding-left:10px">';		
				foreach($records as $contact){
					$return .= '<li class="contact"><a href="typolight/main.php?do=member&act=edit&id=' . $contact['id'] . '">' . $contact['lastname'] . ' '  . $contact['firstname'] . (strlen($contact['types']) ? ' ('. $contact['types'] .')' : '') . '</a></li>';
				
				}
				$return .= '<li class="resume_last">&nbsp;</li></ul>';		
			
			
				} else {
					$return = "AUCUN CONTACT";
				}
		return $return;
	}
	
	public function getAdhesion($varValue, DataContainer $dc)
	{
			// Check to see if a value exists for the organism and the current year
				
				$objRecord = $this->Database->prepare("SELECT * FROM burex_organismes_adhesions WHERE pid = ? ORDER BY cotisation_year ASC")
													->execute($dc->activeRecord->id);
				
				if($objRecord->numRows > 0 ){
				
					while($objRecord->next()){
						$records[] = $objRecord->id . '-'  . $objRecord->cotisation_year . '-' .$objRecord->statut;
					}
					$records = serialize($records);
				}

		
		return $records;

	}
	

}

?>