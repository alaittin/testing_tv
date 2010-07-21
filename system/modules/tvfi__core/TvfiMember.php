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
 * @package			Core 
 * @license			GPL 
 * @filesource
 */


/**
 * Class TvfiMember 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    		Model
 */
class TvfiMember extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_member';

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
			'SocieteAcheteuse' 			=> 'tl_tvfi_member_favorite_societe_acheteuse',
			'FoSocieteVendeuse' 		=> 'tl_tvfi_member_favorite_societe_vendeuse',
			'Pays' 						=> 'tl_tvfi_member_favorite_pays',
			'Zone'  					=> 'tl_tvfi_member_zone',                     #'newsbdi_zone',
#			'Pays'  					=> 'tl_tvfi_member_pays',			                #'newsbdi_pays',	
			'Genre'  					=> 'tl_tvfi_member_genre',                    #'newsbdi_genre',
			'ProgrammeNote'		=> 'tl_tvfi_member_to_programme_note',        #'note_programme',			
		);


	protected $belongsTo = array('SocieteVendeuse','FoSocieteVendeuse','Pays');
	
	protected $hasMany = array(
		'SocieteVendeuse' => 'tl_tvfi_bdf_bo_societe_vendeuse',
		'FoSocieteVendeuse' => 'tl_tvfi_bdf_fo_societe_vendeuse',		
				
#		'alerte_visited' => 'alerte_visited',
#		'definition_alerte' => 'definition_alerte',		  
#		'fo_contact_vendeur' => 'fo_contact_vendeur',
#		'bo_contact_vendeur' => 'bo_contact_vendeur',
#		'stat_visite' => 'stat_visite',
#		'panier_catalogue' => 'panier_catalogue',
#		'fo_program_utilisateur' => 'fo_program_utilisateur',		
#		'contact_carnet_adresse' => 'contact_carnet_adresse',	
		);
		
	public function __construct()
	{
		parent::__construct();
	}


	/**
	 * Set the TvfiMember to the current FrontendUser
	 */
	public function setFromFrontUser()
	{
		$this->import('FrontendUser', 'User');
		$this->varRefId = $this->User->id;
		$this->findBy('id', $this->User->id);
	}
	
	public function isAdherent()
	{
		return $this->isMemberOf(1);	
	}
		/**
	 * Return true if the user is member of a particular group
	 * @param mixed
	 * @return boolean
	 */
	
	public function isMemberOf($id)
	{
		// ID not numeric
		if (!is_numeric($id))
		{
			return false;
		}

		$groups = deserialize($this->arrData['groups']);

		// No groups assigned
		if (!is_array($groups) || count($groups) < 1)
		{
			return false;
		}

		// Group ID found
		if (in_array($id, $groups))
		{
			return true;
		}

		return false;
	}

	public function FavoriteSocieteAcheteuseSortedByAndOrdered($strSort, $strOrder)
	{
		$favorites = $this->manyToMany('SocieteAcheteuse', array('sta_nom '.$strOrder, array('published = 1')));
		
		switch($strSort)
		{
			case 'nom':
				// We don't need to do anything -> already sorted
		
				return $favorites;
				break;
				
			case 'pays':
				
				foreach($favorites as $societe)
				{
					$_pays[$societe->Pays()][] = $societe;
				}				
				ksort($_pays);
				
				foreach($_pays as $pays)
				{
					foreach($pays as $societe)
					{
						$_favorites[] = $societe;
					}
				}
				
				return $_favorites;
				break;
		
			case 'type':
				
				foreach($favorites as $societe)
				{
					$societeTypes = is_array($societe->getTypesNames()) ? implode(', ', $societe->getTypesNames()) : 'unknown' ;
					$_types[$societeTypes][] = $societe;
				}				
				ksort($_types);
				
				foreach($_types as $type)
				{
					foreach($type as $societe)
					{
						$_favorites[] = $societe;
					}
				}
				
				return $_favorites;
				break;
		}
	
	
	}




}
?>