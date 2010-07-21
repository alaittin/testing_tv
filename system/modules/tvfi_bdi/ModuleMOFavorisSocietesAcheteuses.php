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
 * Class ModuleMOFavorisSocietesAcheteuses 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleMOFavorisSocietesAcheteuses extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'mo_favoris_societes_acheteuses';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LISTE DE SOCIETES FAVORITES ###';

			return $objTemplate->parse();
		}

		if (TL_MODE == 'FE' && $_GET['ajax'])
		{
			$societe = new SocieteAcheteuse();
				
			if(!$societe->findBy('alias', $_GET['fiche']))
			{
				die("UNKNOWN COMPANY");
				exit;		
			}

			$member = new TvfiMember();
			$member->setFromFrontUser();
			
			
			if($_GET['action'] == 'deleteFavorite'){
				$member->removeManyToMany('SocieteAcheteuse', $societe->id);
				echo json_encode(array('status' => 'OK', 'content' => 'Société supprimée de vos favoris'));
			}


			
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

		// Base Link to JumpTo Page
		
		$jumpPage = $this->Database->execute("SELECT id, alias FROM tl_page WHERE id=".$this->jumpTo);
		if ($jumpPage->numRows < 1)
		{
			return ampersand($this->Environment->request, ENCODE_AMPERSANDS);
		}
		
		$strUrl = ampersand(($this->Environment->base."".$jumpPage->alias.'/fiche/'), ENCODE_AMPERSANDS);

		if(!isset($_GET['page'])) $this->Input->setGet('page', 1);

		$strBaseUrl = ampersand(($this->Environment->base."".$objPage->alias), ENCODE_AMPERSANDS);
		$limit_start = $this->Input->get('page') ? ($this->Input->get('page') -1) * $this->bloc_result_number : 0 ;
		$limit_end = $limit_start + $this->bloc_result_number ;

		$member = new TvfiMember();
		$member->setFromFrontUser();
		
		// We need to sort the results according to the column
		
		$sort	= $this->Input->get('sort') ? $this->Input->get('sort') : 'nom' ;
		$order	= $this->Input->get('order') ? $this->Input->get('order') : 'asc' ;

		// Retrieving total favorite companies
		
		$_totalSocietes = $member->FavoriteSocieteAcheteuseSortedByAndOrdered($sort, $order);
		
		
		$pagination = new Pagination(count($_totalSocietes), $this->bloc_result_number, 6);
		
				
		$_societes = array_slice($_totalSocietes, $limit_start, $this->bloc_result_number);
		
								
		$contentTemplate = new FrontendTemplate($this->contentTemplate);
		$contentTemplate->societes = $_societes;
		$contentTemplate->jumpTo = $strUrl;
		$contentTemplate->baseUrl = $strBaseUrl;
		$contentTemplate->deleteFavoriteLink = ampersand(($this->Environment->base.$objPage->alias.'/fiche/'), ENCODE_AMPERSANDS);
		$contentTemplate->pagination = $pagination->generate();
		
		
		$this->content = $contentTemplate->parse();
		$this->bloc_mode = '';
		$this->bloc_float = '';
		$GLOBALS['TL_HEAD'][] = '<script type="text/javascript">
					window.addEvent("domready", function(){
						zebraSortableTable = new HtmlTable($("ListeFavorisProgrammes"), { classZebra: "odd", zebra:true});
						
					});

		
		</script>';



		return parent::compile();
	}

}



?>