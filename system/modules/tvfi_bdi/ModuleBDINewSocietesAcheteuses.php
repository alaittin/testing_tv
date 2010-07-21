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
 * Class ModuleBDINewSocietesAcheteuses 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDINewSocietesAcheteuses extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdi_new_societes_acheteuses';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LISTE DES NOUVELLES SOCIETES ###';

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

		// Base Link to JumpTo Page
		
		$jumpPage = $this->Database->execute("SELECT id, alias FROM tl_page WHERE id=".$this->jumpTo);
		if ($jumpPage->numRows < 1)
		{
			return ampersand($this->Environment->request, ENCODE_AMPERSANDS);
		}
		
		$strUrl = ampersand(($this->Environment->base."".$jumpPage->alias.'/fiche/'), ENCODE_AMPERSANDS);


		
		$societe = new SocieteAcheteuse();
		$societes = $societe->getAll( 'tstamp_creation desc', array( 'published = 1'), $this->bloc_result_number );
		
		
				
		$contentTemplate = new FrontendTemplate($this->contentTemplate);
		$contentTemplate->societes = $societes;
		$contentTemplate->jumpTo = $strUrl;
		
		$this->content = $contentTemplate->parse();
		$this->bloc_mode = 'boxList';
		$this->bloc_float = 'floatL';
		return parent::compile();
	}

}



?>