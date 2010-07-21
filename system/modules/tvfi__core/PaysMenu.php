<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Noodle, 2009-2010
 * @author     Erwan Ripoll <eripoll@noodle.fr>
 * @package    Frontend
 * @license    LGPL
 * @filesource
 */


/**
 * Class PaysMenu
 *
 * Provide methodes to render a alpha menu.
 * @copyright  Noodle, 2009-2010
 * @author     Erwan Ripoll <eripoll@noodle.fr>
 * @package    Frontend
 */
class PaysMenu extends Frontend
{

	/**
	 * Current pays string (ex: "2")
	 * @var integer
	 */
	protected $strPays;


	/**
	 * Data array
	 * @var array
	 */
	protected $arrData = array();


	/**
	 * Set the number of rows, the number of results per pages and the number of links
	 * @param int
	 * @param int
	 * @param int
	 */
	public function __construct( $boolUseAll = true)
	{
		parent::__construct();
		$this->LoadLanguageFile('default');
		
		$this->strPays = 'all';

		if ($this->Input->get('pays') != '')
		{
			$this->strPays = $this->Input->get('pays');
		}		
		$this->boolUseAll = $boolUseAll;				
	}

	public function __set($strKey, $strValue)
	{
		$this->$strKey = $strValue;
	}


	/**
	 * Generate the pagination menu and return it as HTML string
	 * @param string
	 * @return string
	 */
	public function generate($boolReloadOnChange = true)
	{
		global $objPage;

		$pays = new Pays();
		
		$displayfield = $objPage->language=='fr' ? 'pys_nom_fr' : 'pys_nom_en';
		
		$query = $this->Input->get('zone') && $this->Input->get('zone')!=='all' ? 'published = 1 AND zone_id ='. $this->Input->get('zone') : 'published = 1'; 
		
		$countries = $pays->getAll( $displayfield .' asc', array( $query ));
		
		$items = '';
		
		if($this->boolUseAll)
		{
			$items = sprintf('<option value="%s" %s>%s</option>',
								'all',
								($this->strPays == 'all' ? 'selected = "selected"' : ''),
								$GLOBALS['TL_CONFIG']['core']['pays']['all']);
		}
		
		foreach($countries as $country)
		{
			$items .= sprintf('<option value="%s" %s>%s</option>',
								$country->id,
								($country->id == $this->strPays ? 'selected = "selected"' : ''),
								$country->localizedName);
		}
		

		return sprintf('%s<select name="pays" id="ctrl_pays" %s>%s</select>',
							( strlen($this->label) ? '<label for"ctrl_pays">'.$this->label.'</label>' : ''),
							($boolReloadOnChange ? ' onchange="submit();"' : ''),
							$items
							);

	}


}

?>