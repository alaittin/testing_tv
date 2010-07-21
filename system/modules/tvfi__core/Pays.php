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
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package			BDI 
 * @license			GPL 
 * @filesource
 */


/**
 * Class Pays 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    		Model
 */
class Pays extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_pays';

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

   	protected $belongsTo = array( 'Zone' );
	
	protected $hasMany = array( 'Tarif' );
	
	protected $strBaseUrl = '/bdi/countries/presentation/fiche/';

	// FRONT OFFICE METHODS
	
	public function getLocalizedLink()
	{
		return sprintf('<a href="%s" title="%s">%s</a>',
							ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] . $this->strBaseUrl . $this->alias .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS),
							$this->localizedName,
							$this->localizedName
							);
	}
	
	
	public function getLocalizedName()
	{
		$_field = 'pys_nom_' . $GLOBALS['TL_LANGUAGE'];
		return $this->$_field;
	}

	public function getLocalizedPresentation()
	{
		$_field = 'pys_presentation_' . $GLOBALS['TL_LANGUAGE'];
		return $this->$_field;
	}
	
	public function getFormattedModificationDate()
	{
		return $this->parseDate($GLOBALS['TL_CONFIG']['dateFormat'], $this->tstamp);
	
	}
	
	
	public function getTarifsGroupedByType()
	{
		$tarifs = $this->Tarif();
		
		if(count($tarifs > 0))
		{
			foreach($tarifs as $tarif)
			{
				$arrGrouped[$tarif->trf_type][] = $tarif;				
			} 
		}
		return $arrGrouped;
	}
	
	
	

	// BACK OFFICE METHODS
	
}
?>