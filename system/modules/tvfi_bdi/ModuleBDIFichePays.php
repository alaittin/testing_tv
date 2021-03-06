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
 * Class ModuleBDIFichePays 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDIFichePays extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdi_fiche_pays';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### FICHE PAYS ###';

			return $objTemplate->parse();
		}
		
		if (TL_MODE == 'FE' && $_GET['ajax'])
		{
			$pays = new Pays();
				
			if(!$pays->findBy('alias', $_GET['fiche']))
			{
				// TODO : redirect to 404
				die("UNKNOWN COUNTRY");
				return;		
			}

			if($_GET['page'])
			{
				$societe = new SocieteAcheteuse();
				$contentTemplate = new FrontendTemplate('bdi_fiche_pays_ajax_societe');
					
				$totalSociete = $societe->getCount(array( 'published = 1 AND pays_id = '. $pays->id ));
				
				$societesPagination = new Pagination($totalSociete, $this->bloc_result_number, 6);
				$contentTemplate->societesPagination = $societesPagination->generate();
				$contentTemplate->totalSociete = $totalSociete;
				$contentTemplate->societes = $societe->getPaginate( 'sta_nom asc', array( 'published = 1 AND pays_id = '. $pays->id), $this->bloc_result_number, $_GET['page'] );
	
				
				echo json_encode(array('status' => 'OK', 'content' => $contentTemplate->parse(), 'postAction' => 'zebraSocietesTable = new HtmlTable($("liste_societes"), { classZebra: "odd", zebra:true});
	'));
				exit;
			
			}
			
			if($_GET['action'] == 'addToFavorites')
			{
	
				$member = new TvfiMember();
				$member->setFromFrontUser();
	
				$member->addManyToMany('Pays', $pays->id);
	
				echo json_encode(array('status' => 'OK', 'content' => 'Pays ajouté à vos favoris'));
				exit;
			}
			
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
		
		$pays = new Pays();
				
		if(!$pays->findBy('alias', $_GET['fiche']))
		{
			// TODO : redirect to 404
			die("UNKNOWN COUNTRY");
			return;		
		}
		
						
		$contentTemplate = new FrontendTemplate($this->contentTemplate);
		$contentTemplate->pays = $pays;
		
		
		$societe = new SocieteAcheteuse();

		$totalSociete = $societe->getCount(array( 'published = 1 AND pays_id = '. $pays->id ));
			
		$societesPagination = new Pagination($totalSociete, $this->bloc_result_number, 6);
		$contentTemplate->societesPagination = $societesPagination->generate();
		$contentTemplate->totalSociete = $totalSociete;
		$contentTemplate->societes = $societe->getPaginate( 'sta_nom asc', array( 'published = 1 AND pays_id = '. $pays->id), $this->bloc_result_number );
			
		$contentTemplate->isFavorite = count($member->manyToMany( 'Pays', array('id', array('id = ' . $pays->id)))) > 0 ? true : false;		
		
		
		$contentTemplate->addToFavoriteLink = ampersand(($this->Environment->base.$objPage->alias.'/fiche/'.$_GET['fiche'].'/ajax/true/action/addToFavorites.html'), ENCODE_AMPERSANDS);
		
		$this->content = $contentTemplate->parse();
		$this->bloc_ombre = 'ombreBox3';
		
		// Tabs for the Tarif Section
		
		//$GLOBALS['TL_HEAD'][] = '<script type="text/javascript" src="plugins/xkn_tools/rotater.js"> </script>';
		//$GLOBALS['TL_HEAD'][] = '<script type="text/javascript" src="plugins/xkn_tools/tabs.js"> </script>';
		//$GLOBALS['TL_HEAD'][] = '<link media="screen" type="text/css" href="plugins/xkn_tools/tabs.css" rel="stylesheet" />';

		return parent::compile();
	}

}

?>