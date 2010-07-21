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
$GLOBALS['TL_DCA']['tl_tvfi_bdf_bo_societe_vendeuse'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'				=> 'Table',
#		'ctable'              => array('tl_tvfi_data_version'),
#		'ctable'              => array('tl_member'),
		'onsubmit_callback'   => array
				 (
				 	  array('SocieteVendeuse', 'checkStatus')	 	
				 ),
				'onload_callback' => array
				 (
				 	  array('SocieteVendeuse', 'cacheStatus')	 		
				 ),
		'enableVersioning'		=> true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'					=> 1,
			'fields'				=> array('fsv_nom'),
			'flag'					=> 1,
			'panelLayout'			=> 'filter;search,limit,sort'
		),
		'label' => array
		(
			'fields'				=> array('fsv_nom'),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['import'],
				'href'                => 'key=import',
				'class'               => 'header_css_frontenduserimport',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['edit'],
				'href'				=> 'act=edit',
				'icon'				=> 'edit.gif'
			),
			'copy' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['copy'],
				'href'				=> 'act=copy',
				'icon'				=> 'copy.gif'
			),
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			),
		)
	),

	// Palettes
	'palettes' => array
	(		
		'default'			=> 'tstamp_creation,tstamp;{essentials_legend},fsv_nom,fsv_adresse,fsv_code_postal,fsv_ville,fsv_tel,fsv_fax,fsv_email,fsv_web,fsv_mail_demo,fsv_presskit;{options_affichage_legend:hide},fsv_fiche,fsv_catalogue,fsv_membre,fsv_soc_speciale,fsv_logo;{type_legend:hide},type;{description_legend:hide},fsv_description_fr,fsv_description_en,fsv_description_es,fsv_description_rdv_fr,fsv_description_rdv_en;{additional_info_legend:hide},fsv_adelete;{catalog_legend:hide},catalogue;{contacts_legend:hide},fsv_adelete;{utilisateurs_legend:hide},utilisateur;{validations_legend:hide},validation;',
		),
	
	// Fields
	'fields' => array
	(

		// HEADER ----------------------------------------------------------------------------------------------------
		
		'tstamp_creation' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['tstamp_creation'],
			'default'			=> time(),
			'exclude'			=> true,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim', 'readonly'=>true, 'tl_class'=>'w50')
		),

		'tstamp' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['tstamp'],
			'default'			=> time(),
			'exclude'			=> false,
			'inputType'			=> 'text',
			'eval'				=> array('rgxp'=>'datim','readonly'=>true)
		),

		// ESSENTIALS ----------------------------------------------------------------------------------------------------

		'fsv_nom' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_nom'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'long')
		),

		'fsv_fiche' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_fiche'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'w50 clr'),
		),
		
 		'fsv_catalogue' => array
 		(
 			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_catalogue'],
 			'sorting'			=> true,
 			'inputType'			=> 'checkbox',
 			'eval'				=> array('mandatory' => false),
 		),

		'fsv_membre' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_membre'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false, 'tl_class'=>'w50 clr'),
		),

		'fsv_soc_speciale' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_soc_speciale'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),
		
		'fsv_logo' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_logo'],
			'inputType'   => 'fileTree',
			'eval'        => array('files'=>true, 'fieldType'=>'radio')
		),		 

 		// ADDRESS ----------------------------------------------------------------------------------------------------

		'fsv_adresse' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_adresse'],
			'inputType'			=> 'text',
			'search'			=> true,
			'sorting'			=> true,
#			'attributes'  => 'onFocus="alert(\'hello4\');"',
#			'attributes'  => 'onclick="Backend.getScrollOffset();"',
			'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'long' )
		),

 		'fsv_ville' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_ville'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
				
  	'fsv_code_postal' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_code_postal'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50 clr')
		),

		'fsv_tel' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_tel'],
			'inputType'			=> 'text',
			'default'			=> '',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),

		'fsv_fax' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_fax'],
			'inputType'			=> 'text',
			'default'			=> '',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class'=>'w50')
		),
 		
		'fsv_email' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_email'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'rgxp'=>'email', 'tl_class'=>'w50')
		),
		
		'fsv_web' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_web'],
			'inputType'			=> 'text',
			'default'			=> '',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'rgxp'=>'url', 'tl_class'=>'w50' )
		),

 		'fsv_mail_demo' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_mail_demo'],
			'inputType'			=> 'text',
			'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10)
		),

 		'fsv_presskit' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_presskit'],
			'inputType'   => 'fileTree',
	 		'eval'        => array('files'=>true, 'fieldType'=>'radio' )
		),		

		// TYPE ----------------------------------------------------------------------------------------------------
		'type' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['type'],
			'sorting'			=> true,
			'inputType'			=> 'select',
			'eval'				=> array('multiple'=>true, 'mandatory'=>false, 'tl_class' => 'clr'),
			'options_callback'	=> array('TypeSocieteVendeuse', 'bo_listTypeAsArray'),
			'load_callback'		=> array
			(
				array('SocieteVendeuse', 'bo_getTypes')
			),
			'save_callback'		=> array
			(
				array('SocieteVendeuse', 'bo_saveTypes')
			),
		),
	 
		
		// COMMENTS & DESCRIPTION ----------------------------------------------------------------------------------------------------
		
		'fsv_description_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_fr'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4)			
		),

		'fsv_description_en' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_en'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4)			
		),

		'fsv_description_es' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_es'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4)			
		),

		'fsv_description_rdv_fr' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_description_rdv_fr'],
			'inputType'			=> 'textarea',
			'eval'				=> array('mandatory'=>false, 'rows'=>4)			
		),
 		
 		// ADDITIONAL INFO ----------------------------------------------------------------------------------------------------

		'fsv_adelete' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['fsv_adelete'],
			'sorting'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('mandatory' => false),
		),

		'catalogue' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['catalogue'],
			'inputType'			=> 'ItemListField',
			'eval'					=> array('disabled' => true),
			'load_callback' => array
			(
				array('tl_tvfi_bdf_bo_societe_vendeuse', 'getCatalogue')
			),
		),
	 
		'utilisateur' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['utilisateur'],
			'inputType'			=> 'ItemListField',
			'eval'					=> array('disabled' => true),
			'load_callback' => array
			(
				array('tl_tvfi_bdf_bo_societe_vendeuse', 'getUtilisateurs')
			),
		),
		
		'validation' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['validation'],
			'inputType'			=> 'ItemListField',
			'eval'					=> array('disabled' => true),
			'load_callback' => array
			(
				array('tl_tvfi_bdf_bo_societe_vendeuse', 'getValidations')
			),
		),
#		# Published 
#	
# 		'published' => array
#		(
#			'exclude'			=> false,
#			'label'				=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published'],
#			'filter'			=> true,
#			'inputType'			=> 'select',
#			'eval'				=> array('doNotCopy'=>true, 'tl_class'=>'clr', 'includeBlankOption' => true, 'blankOptionLabel' => &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published']['status']['0']),
#			'options'			=> array('1', '2'),
#			'reference'			=> &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse']['published']['status'],
#		),

	)
);
/**
 * Class tl_tvfi_bdf_bo_societe_vendeuse
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Controller
 */
class tl_tvfi_bdf_bo_societe_vendeuse extends Backend
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
	 * List of programmes belongs to selected societes
	 */		

	public function getCatalogue($varValue, DataContainer $dc)
	{

			$objRecord = $this->Database->prepare("SELECT p.* FROM tl_tvfi_programme AS p, tl_tvfi_programme_to_bo_societe_vendeuse AS p2s 
				WHERE p.id=p2s.programme_id AND p2s.societevendeuse_id=? ORDER BY p.fpg_titre_fr")
														->execute($dc->activeRecord->id);
			  
			if($objRecord->numRows > 0 ){
				
					$return = '<ul style="list-style-type: none; margin-left:0px; padding-left:10px">';		
					$field = 'fpg_titre_'.$GLOBALS['TL_LANGUAGE'];
					while($objRecord->next())	{				
						$return .= '<li class="catalogue"><a href="typolight/main.php?do=programmes&table=tl_tvfi_programme&act=edit&id='.$objRecord->id.'">'.$objRecord->$field .'</a>
							<span style =\'float:right;\'>
							<a title="Editer le programme ID '.$objRecord->id.'" href="typolight/main.php?do=programmes&act=edit&id='.$objRecord->id.'"><img height="16" width="12" alt="Editer le programme" src="system/themes/default/images/edit.gif"></a> 
							<a onclick="if (!confirm(\'Voulez-vous vraiment supprimer cette entrée ID '.$objRecord->id.' ?\')) return false; Backend.getScrollOffset();" title="Supprimer le programme ID '.$objRecord->id.'" href="typolight/main.php?do=programmes&act=delete&id='.$objRecord->id.'"><img height="16" width="14" alt="Supprimer le programme" src="system/themes/default/images/delete.gif"></a>
							</span>
						</li>';
					}
				$return .= '<li class="resume_last">&nbsp;</li></ul>';		
			
			
			} else {
					$return = "AUCUN PROGRAMME";
			}
		return $return;
	}
	
	
	/**
	 * List of Utilisateurs belongs to selected societes
	 */		
	
	public function getUtilisateurs($varValue, DataContainer $dc)
	{

			$objRecord = $this->Database->prepare("SELECT * FROM tl_member WHERE societevendeuse_id=? ORDER BY firstname")
																	->execute($dc->activeRecord->id);
			  
			if($objRecord->numRows > 0 ){
				
					$return = '<ul style="list-style-type: none; margin-left:0px; padding-left:10px">';		
					while($objRecord->next())	{				
						$return .= '<li class="utilisateur"><a href="typolight/main.php?do=member&table=tl_tvfi_programme&act=edit&id='.$objRecord->id.'">'.$objRecord->firstname.' '.$objRecord->firstname.'[ '.$objRecord->email.' ]</a></li>';
					}
				$return .= '<li class="resume_last">&nbsp;</li></ul>';		
			
			
			} else {
					$return = "AUCUN UTILISATEUR";
			}
		return $return;
	}
	
	
	
	/**
	 * List of Utilisateurs belongs to selected societes
	 */		
	
	public function getValidations($varValue, DataContainer $dc)
	{
  		$labels = &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse'];
				
			$objRecord = $this->Database->prepare("SELECT * FROM tl_tvfi_data_version WHERE pid=? AND status NOT IN ('accept','reject') ORDER BY id")
																	->execute($dc->activeRecord->id);
			  
			if( $objRecord->numRows > 0 ){
				
					$return = '<ul style="list-style-type: none; margin-left:0px; padding-left:10px">';		
					while($objRecord->next())	{				
						#$return .= '<li class="utilisateur"><a href="typolight/main.php?do=data_version&table=tl_tvfi_data_version&act=edit&id='.$objRecord->id.'">'.$objRecord->column_name.' '.$objRecord->old_value.'[ '.$objRecord->new_value.' ]</a></li>';
				 		
						$return .= "<li class='utilisateur'><p>".$labels[$objRecord->column_name][0]."<br><b>Previous Value:</b>".$objRecord->old_value."<br><b>New Value:</b>".$objRecord->new_value."</p>".
								"<div class=\"tl_radio_container mandatory\" id=ctrl_status_".$objRecord->id." style=\"display: inline;\">
									<input type=\"radio\" onfocus=\"Backend.getScrollOffset();\" value=\"accept\" class=\"tl_radio\" id=\"opt_status_0\" name=status_".$objRecord->id."> 
									<label for=\"opt_status_0\">accept</label>
									<br>
									<input type=\"radio\" onfocus=\"Backend.getScrollOffset();\" value=\"hold\" class=\"tl_radio\" id=\"opt_status_1\" name=status_".$objRecord->id."> 
									<label for=\"opt_status_1\">hold</label>
									<br>
									<input type=\"radio\" onfocus=\"Backend.getScrollOffset();\" value=\"reject\" class=\"tl_radio\" id=\"opt_status_2\" name=\"status_".$objRecord->id."> 
									<label for=\"opt_status_2\">reject</label>
								</div>".
						"</li>";
					}
				$return .= '<li class="resume_last">&nbsp;</li></ul>';		
			
			
			} else {
					$return = "AUCUN VALIDATIONS";
			}
 
		return $return;
	}
	
	
	
}
?>