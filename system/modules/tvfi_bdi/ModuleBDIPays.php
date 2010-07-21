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
 * Class ModuleBDIPays 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDIPays extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdi_pays';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LISTE DE PAYS ###';

			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate module
	 */
	protected function compile()
	{
		global $objPage;

		$contentTemplate = new FrontendTemplate($this->contentTemplate);

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

		$pays = new Pays();

		$displayfield = $objPage->language=='fr' ? 'pys_nom_fr' : 'pys_nom_en';

		
		if(isset($_GET['action']) && $_GET['action']=="search" && isset($_GET['keyword']))
		{
			// Simple search mode

			// Getting total results
			$totalCountries = $pays->getCount(array( 'published = ? and '.$displayfield.' LIKE ?', 1, '%'.$_GET['keyword'].'%' ));
			
			$pagination = new Pagination($totalCountries, $this->bloc_result_number, 6);
												
			$countries = $pays->getPaginate(  $displayfield, array( 'published = ? and '.$displayfield.' LIKE ?', 1, '%'.$_GET['keyword'].'%' ), $this->bloc_result_number, $this->Input->get('page')  );
			
		
		} else {
			
			// Listing mode
		
			$alphamenu = new AlphaMenu(false);
			
			if(isset($_GET['alpha']))
			{
				
				
				$totalCountries = $pays->getCount( array('published = 1 AND '.$displayfield.' LIKE "'.$_GET['alpha'].'%"'));
				
				$pagination = new Pagination($totalCountries, $this->bloc_result_number, 6);

				$countries = $pays->getPaginate( $displayfield .' asc', array( 'published = 1 AND '.$displayfield.' LIKE "'.$_GET['alpha'].'%"'), $this->bloc_result_number , $this->Input->get('page') );
			
			
			} else {
				// List all
			
				
				$countries = $pays->getCount( 'published = 1' );
			
				$pagination = new Pagination($countries, $this->bloc_result_number, 6);

				$countries = $pays->getPaginate( $displayfield .' asc', array( 'published = 1'), $this->bloc_result_number , $this->Input->get('page') );
			
			
			}
			
			$contentTemplate->alphamenu = $alphamenu->generate();
			

		}

				
		$contentTemplate->countries = $countries;
		$contentTemplate->jumpTo = $strUrl;
		$contentTemplate->baseUrl = $strBaseUrl;
		$contentTemplate->pagination = $pagination->generate();

		$this->content = $contentTemplate->parse();
		$this->bloc_ombre = 'ombreBox3';

		$GLOBALS['TL_HEAD'][] = '<script type="text/javascript">
					window.addEvent("domready", function(){
						zebraSortableTable = new HtmlTable($("liste_pays"), { classZebra: "odd", zebra:true});
						
					});

		
		</script>';

		return parent::compile();
	}

}

?>