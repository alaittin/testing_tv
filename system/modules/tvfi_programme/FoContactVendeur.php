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
 * Class FoContactVendeur
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package    		Model
 */
class FoContactVendeur extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_bdf_contact';

	/**
	 * Name of the field that references the active record
	 * @var string
	 */
	protected $strRefField = 'id';

#	protected $belongsTo = array('SocieteVendeuse');


	/**
	 * Value of the field that references the active record
	 * @var mixed
	 */
	protected $varRefId;
	
	
	// BACK OFFICE METHODS

	/**
	 * Returns all the contact vendeurs for the societe
	 * 
	 * @return array
	 */
		
	public function foContactVendeursListAsArray()
	{		
/*		$saved_soc	= $this->Session->get('selected_societe_vendeuse');
	  $societe 		= new SocieteVendeuse();
		$societe->findBy('id', $saved_soc->id);

		$contacts = $societe->FoContactVendeur();
		foreach($contacts as $contact)
		{
			$_contacts[$contact->id] = $contact->fcv_nom." ".$contact->fcv_prenom."[ ".$contact->fcv_email." ]";
		}
		
		return $_contacts;*/
	}
	
}
?>