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
 * Class SocieteAcheteuse 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    		Model
 */
class TypeSocieteAcheteuse extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_bdi_type_societe_acheteuse';

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
	
	protected $manyToMany = array( 'SocieteAcheteuse' => 'tl_tvfi_bdi_societe_acheteuse_type' );


	// FRONT OFFICE METHODS
	
	public function localizedName()
	{
		$_field = 't1s_libelle_' . $GLOBALS['TL_LANGUAGE'];
		return $this->$_field;
	}


	// BACK OFFICE METHODS
	
	/**
	 * Returns all the societe types
	 * @var string
	 * @var DataContainer
	 * @return string
	 */
	
	public function bo_listAsArray()
	{
		$_types = $this->all;
		$_field = 't1s_libelle_' . $GLOBALS['TL_LANGUAGE'];
		foreach($_types as $type)
		{
			$arrTypes[$type->id] = $type->$_field;
		}
		
		return $arrTypes;
		
	}
}
?>