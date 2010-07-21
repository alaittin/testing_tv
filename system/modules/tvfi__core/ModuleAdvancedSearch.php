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
 * @package			Advanced Search 
 * @license			GPL 
 **/


/**
 * Class ModuleAdvancedSearch 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleAdvancedSearch extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_advancedSearch';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### RECHERCHE AVANCEE ###';

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

		$this->Template = new FrontendTemplate($this->strTemplate);
		
		$entities = array(
			'SocieteAcheteuse'	=> '/bdi/societes/',
			'Pays' 				=> '/bdi/pays/',
		);
		
		
		
		$this->import('FrontendUser', 'User');
		$this->Template->User = $this->User; 
		$this->Template->action = $this->Environment->request;
		
		// The search form first calls a "prepare" action
		
		if(isset($_GET['meta']) && $_GET['meta']=="prepare")
		{
			$mode	= $_GET['mode'];
			$entity	= $_GET['entity'];
			
			if($mode=='simple')
			{
				$keyword = $_GET['kw'];
				$strUrl = ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] . $entities[$entity]. 'action/search/keyword/' . $keyword .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
				$this->redirect($strUrl);
				return;			
			}
		
		}
		
		if(isset($_GET['action']) && $_GET['action']=="simplesearch" && isset($_GET['keyword']))
		{
			$this->Template->keyword = $_GET['keyword'];
		}

	}

}



?>