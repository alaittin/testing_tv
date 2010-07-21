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
 * Class ModuleBDIGrillesProgrammes 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDIGrillesProgrammes extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdi_grilles_programmes';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LISTE DE SOCIETES ###';

			return $objTemplate->parse();
		}

		// Send file to the browser
		if (strlen($this->Input->get('file', true)))
		{
			$this->sendFileToBrowser($this->Input->get('file', true));
		}

		return parent::generate();
	}


	/**
	 * Generate module
	 */
	protected function compile()
	{
		global $objPage;
		$this->LoadLanguageFile('default');

		$contentTemplate = new FrontendTemplate($this->contentTemplate);

		if(!isset($_GET['page'])) $this->Input->setGet('page', 1);
		if(!isset($_GET['zone'])) $this->Input->setGet('zone', 'all');
		if(!isset($_GET['pays'])) $this->Input->setGet('pays', 'all');

		$limit_start = $this->Input->get('page') ? ($this->Input->get('page') -1) * $this->bloc_result_number : 0 ;

		// We need to sort the results according to the column
		
		$strSort	= $this->Input->get('sort') ? $this->Input->get('sort') : 'nom' ;
		$strOrder	= $this->Input->get('order') ? $this->Input->get('order') : 'asc' ;
		
		// Rebuilding the url
		
		$strUrl = ampersand((
			$this->Environment->base .
			$objPage->alias .
			( $this->Input->get('zone') ? '/zone/'. $this->Input->get('zone') : '') .
			( $this->Input->get('pays') ? '/pays/'. $this->Input->get('pays') : '')
			), ENCODE_AMPERSANDS);

		
		

		$societe = new SocieteAcheteuse();

		$zonemenu = new ZoneMenu();
		$zonemenu->label = $GLOBALS['TL_CONFIG']['core']['zone']['chooseLabel'];
		$contentTemplate->zonemenu = $zonemenu->generate();

		if($_GET['zone']!== 'all')
		{
			$paysmenu = new PaysMenu();
			$paysmenu->label = $GLOBALS['TL_CONFIG']['core']['pays']['chooseLabel'];
			$contentTemplate->paysmenu = $paysmenu->generate();
		}

		if(isset($_GET['pays']) && $_GET['pays'] !=='all' )
		{
			$query = 'AND pays_id =' . $_GET['pays'].' ';
		} elseif($_GET['zone'] !=='all' && $_GET['pays']=='all' ) {
		
			$zone = new Zone($_GET['zone']);
			$countries = $zone->paysIdAsArray;
			if(count($countries) > 0 ) $query = 'AND pays_id IN(' . implode(', ', $countries) .') ';
		}
		$alphamenu = new AlphaMenu();
			
		if(isset($_GET['alpha']))
		{
				
			$query .= $_GET['alpha']!=='0-9' ? 'AND sta_nom LIKE "'.$_GET['alpha'].'%"' : 'AND ( sta_nom LIKE "0%" OR sta_nom LIKE "4%" OR sta_nom LIKE "2%" OR sta_nom LIKE "3%" OR sta_nom LIKE "4%" OR sta_nom LIKE "5%" OR sta_nom LIKE "6%" OR sta_nom LIKE "7%" OR sta_nom LIKE "8%" OR sta_nom LIKE "9%")' ;
				
			$totalSociete = $societe->getCount( array('published = 1  AND sta_grille_pdf NOT LIKE "" '. $query));
				
			$pagination = new Pagination($totalSociete, $this->bloc_result_number, 6);
			
			
		} else {
			// List all
			
			$totalSociete = $societe->getCount( array('published = 1 AND sta_grille_pdf NOT LIKE "" '. $query ));
			
			$pagination = new Pagination($totalSociete, $this->bloc_result_number, 6);

		}
		
		$strQuery = 'published = 1 AND sta_grille_pdf NOT LIKE ""  '. $query;
		
		// Sorting the results
		
		$societes = $societe->getAllSortedByAndOrdered($strQuery, $strSort, $strOrder);
		$societes = array_slice($societes, $limit_start, $this->bloc_result_number);

			
		$contentTemplate->alphamenu = $alphamenu->generate(' ', $strUrl.$GLOBALS['TL_CONFIG']['urlSuffix']);
		$contentTemplate->action = ampersand(($this->Environment->base."".$objPage->alias.$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
		$contentTemplate->societes = $societes;
		$contentTemplate->jumpTo = $strUrl;
		$contentTemplate->baseUrl = $strUrl;
		$contentTemplate->order = $strOrder;
		$contentTemplate->pagination = $pagination->generate();
		
		$this->content = $contentTemplate->parse();
		$this->bloc_ombre = 'ombreBox3';

		$GLOBALS['TL_HEAD'][] = '<script type="text/javascript">
					window.addEvent("domready", function(){
						zebraSortableTable = new HtmlTable($("grille_programmes"), { classZebra: "odd", zebra:true});
						
					});

		
		</script>';

		return parent::compile();
	}



}

?>