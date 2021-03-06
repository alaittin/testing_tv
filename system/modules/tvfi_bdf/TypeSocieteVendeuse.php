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
 * Class TypeSocieteVendeuse 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package    		Model
 */
class TypeSocieteVendeuse extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_bdf_type_societe_vendeuse';

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
	
	protected $manyToMany = array( 'TypeSociete' => 'tl_tvfi_bdf_bo_societe_vendeuse_to_type' );

	public function __construct()
	{
		parent::__construct();
	}	

	// BACK OFFICE METHODS
	
	/**
	 * Returns all the societe types
	 * @var string
	 * @var DataContainer
	 * @return string
	 */
	
	public function bo_listTypeAsArray()
	{
		$_types = $this->all;
		$_field = 't2s_libelle_' . $GLOBALS['TL_LANGUAGE'];
		foreach($_types as $type)
		{
			$arrTypes[$type->id] = ( ($type->parent_id) ? "-->".$type->$_field : $type->$_field);
		}		
		return $arrTypes;		
	}
}
?>