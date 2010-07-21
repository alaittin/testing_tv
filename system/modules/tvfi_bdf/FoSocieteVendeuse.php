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
 * Class SocieteVendeuse 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package   	Model
 */
class FoSocieteVendeuse extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_bdf_fo_societe_vendeuse';
 
	/**
	 * Name of the field that references the active record
	 * @var string
	 */
	protected $strRefField = 'id';

	/**
	 * Value of the field that references the active record
	 * @var mixed
	 */
	protected $varRefId;
	
	protected $manyToMany = array
		(
			'TypeFoSocieteVendeuse' => 'tl_tvfi_bdf_fo_societe_vendeuse_to_type',
			'Programme' => 'tl_tvfi_programme_to_fo_societe_vendeuse',						
		);

	protected $hasMany = array
		(
			'HighlightForSociete',
			'DepartementSocieteVendeuse'			
		);

	protected $strBaseUrl = '/annuaire/societes/presentation/fiche/';

	// FRONT OFFICE METHODS
	
	public function getLocalizedLink()
	{
		return sprintf('<a href="%s" title="%s">%s</a>',
							ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] . $this->strBaseUrl . $this->alias .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS),
							$this->fsv_nom,
							$this->fsv_nom
							);
	}

	public function getLocalizedDescription()
	{
		$_field = 'fsv_description_' . $GLOBALS['TL_LANGUAGE'];
		return $this->$_field;
	}

	public function getFormattedModificationDate()
	{
		return $this->parseDate($GLOBALS['TL_CONFIG']['dateFormat'], $this->tstamp);
	
	}

	/**
	* All the contacts for the Societe grouped by dept
 	* @var int
	* @return array
	*/
	
	public function getContactsForDept($intDept)
	{
		return $this->ContactSocieteVendeuse('fcv_nom asc', array('fcv_dvr_id = ?', $intDept));
	}
	

	/**
	 * Returns all the societe types names as array
	 * @return array
	 */	
	public function getTypesNames()
	{
		$types = $this->TypeFoSocieteVendeuse();
		
		if(count($types) < 1) return;

			foreach($types as $type)
			{
				$_types[] = $type->localizedName();
			}
			return $_types;
		
	}
	
	/**
	 * Returns all the societe types names as string
	 * @return array
	 */	
	public function getTypeNamesAsString()
	{
		$_types = $this->getTypesNames();
		if(is_array($_types))
		{
			return implode(', ', $_types);
		
		} else {
			return '';
		}  
		
	}

	/**
	 * Returns all the societe types names as array
	 * @return array
	 */	
	public function getGenres()
	{
/*
		$types = $this->TypeFoSocieteVendeuse();
		
		if(count($types) < 1) return;

			foreach($types as $type)
			{
				$_types[] = $type->localizedName();
			}
*/
			return array();
		
	}
	

	/**
	 * Returns all the societe highlighted programs as array
	 * @return array
	 */	
	public function getHighlightPrograms()
	{
		$highlights = $this->HighlightForSociete('sorting asc', array( 'fps_highlight = ?', 1  ), 20 );
		
		if(count($highlights) < 1) return;

/*
			foreach($types as $type)
			{
				$_types[] = $type->localizedName();
			}
*/
			return $highlights;
		
	}

	

}
?>