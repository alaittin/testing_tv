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
 **/


/**
 * Class ModuleBDIFicheContact 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDIFicheContact extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdi_fiche_contact';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### FICHE CONTACT ###';

			return $objTemplate->parse();
		}
		
		if (TL_MODE == 'FE' && $_GET['ajax'])
		{
			$contact = new ContactSocieteAcheteuse();
				
			if(!$contact->findBy('alias', $_GET['fiche']))
			{
				die("UNKNOWN CONTACT");
				exit;		
			}

			$member = new TvfiMember();
			$member->setFromFrontUser();

			$member->addManyToMany('SocieteAcheteuse', $societe->id);

			
			echo json_encode(array('status' => 'OK', 'content' => 'société ajoutée à vos favoris'));
			exit;
		}
		
		

		return parent::generate();
	}


	/**
	 * Generate module
	 */
	protected function compile()
	{
		global $objPage;
				
		$member = new TvfiMember();
		$member->setFromFrontUser();
		
		$contact = new ContactSocieteAcheteuse();
				
		if(!$contact->findBy('alias', $_GET['fiche']))
		{
			// TODO : redirect to 404
			die("UNKNOWN CONTACT");
			return;		
		}
		
						
		$contentTemplate = new FrontendTemplate($this->contentTemplate);
		$contentTemplate->contact = $contact;
		

		//$contentTemplate->isFavorite = count($member->manyToMany( 'ContactSocieteAcheteuse', array('id', array('id = ' . $contact->id)))) > 0 ? true : false;		
		
		
		$contentTemplate->addToFavoriteLink = ampersand(($this->Environment->base.$objPage->alias.'/fiche/'.$_GET['fiche'].'/ajax/true/action/addToFavorites' . $GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
		
		$this->content = $contentTemplate->parse();

		
		$this->bloc_ombre = 'ombreBox3';
		
		return parent::compile();
	}

}

?>