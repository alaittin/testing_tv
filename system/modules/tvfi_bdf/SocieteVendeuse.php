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
 * @package    		Model
 */
class SocieteVendeuse extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_bdf_bo_societe_vendeuse';

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
			'TypeSocieteVendeuse' 		=> 'tl_tvfi_bdf_bo_societe_vendeuse_to_type',
			'Programme' 				=> 'tl_tvfi_programme_to_bo_societe_vendeuse',
	);
	
	protected $hasMany  = array( 'Collection','TvfiMember','FoContactVendeur');
 	


	// BACK OFFICE METHODS

	
	
	/**
	* Cache Societe data in session before edit (for later comparation)
 	* @var DataContainer
	* @return 0
	*/

	public function cacheStatus(DataContainer $dc)   
	{

		$this->findBy('id', $dc->id);
		$row = $this->Database->prepare("SELECT * FROM ".$this->strTable." WHERE id=?")
								->execute($dc->id)
								->fetchAssoc();
		if ($row)
		{ 
			$types = $this->TypeSocieteVendeuse();
			foreach($types as $type)
			{
				$_types[] = $type->id;
			}
			$row['type'] = $_types;
			$this->Session->set($this->strTable, $row);
		}
		return 0;
	}
		
	/**
	* Compare Societe data with session cached data and record changes in tl_tvfi_data_version table
 	* @var DataContainer
 	* @return 0
	*/		
	public function checkStatus(DataContainer $dc)
	{

		$this->findBy('id', $dc->id);
		if(TL_MODE == 'BE') $this->import('BackendUser', 'User');
		if(TL_MODE == 'FE') $this->import('FrontendUser', 'User');

		$saved_data   = $this->Session->get($this->strTable);
	
		while(list($key, $val) = each($saved_data))
		{			 
			if ( array_key_exists($key, $_POST) && ($_POST[$key] != $saved_data[$key]) && !(in_array($key, array('tstamp','tstamp_creation'))) )
			{	
				$change = $this->Database->prepare("SELECT * FROM tl_tvfi_data_version WHERE table_name=? AND column_name=? AND pid=? AND STATUS NOT IN ('accept','reject')")
																	->limit(1)
																	->execute($this->strTable,  $key, $this->id);
				if ($change->numRows)
				{
					# update change	, $change->old_value is the first value of this field after many changes still has to show this as old until confirm or reject
					$this->Database->prepare("UPDATE tl_tvfi_data_version SET tstamp=?,created_by=?,table_name=?,column_name=?,old_value=?,new_value=?,pid=? WHERE id=?")
													->execute(time(), $this->User->id, $this->strTable, $key, $change->old_value, $_POST[$key], $this->id, $change->id);
				}else {

					# insert change							
					$this->Database->prepare("INSERT INTO tl_tvfi_data_version(tstamp,created_by,table_name,column_name,old_value,new_value,pid) VALUES (?, ?, ?, ?, ?, ?, ?) ")
												->execute(time(), $this->User->id, $this->strTable, $key, $saved_data[$key], $_POST[$key], $this->id);	
				}				 														  					 						
			}									
		}
		return 0;
	}
	
	/**
	 * Returns all the societe types
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getTypes($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$types = $this->TypeSocieteVendeuse();

		foreach($types as $type)
		{
			$_types[] = $type->id;
		}
		
		return serialize($_types);
	}

	/**
	 * Saves all the societe types
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveTypes($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);

		$this->setManyToMany('TypeSocieteVendeuse', $values);

		return 0;
			
	}

}
?>