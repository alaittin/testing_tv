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
 * Class ZoneMenu
 *
 * Provide methodes to render a geographical zone menu.
 * @copyright  Noodle, 2009-2010
 * @author     Erwan Ripoll <eripoll@noodle.fr>
 * @package    Frontend
 */
class ZoneMenu extends Frontend
{

	/**
	 * Current zone string (ex: "2")
	 * @var integer
	 */
	protected $strZone;


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
		
		$this->strZone = 'all';

		if ($this->Input->get('zone') != '')
		{
			$this->strZone = $this->Input->get('zone');
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

		$zone = new Zone();
		
		$displayfield = $objPage->language=='fr' ? 'zne_nom_fr' : 'zne_nom_en';

		$zones = $zone->getAll( $displayfield .' asc', array( 'published = 1'));
		
		$items = '';
		
		if($this->boolUseAll)
		{
			$items = sprintf('<option value="%s" %s>%s</option>',
								'all',
								($this->strZone == 'all' ? 'selected = "selected"' : ''),
								$GLOBALS['TL_CONFIG']['core']['zone']['all']);
		}
		
		foreach($zones as $_zone)
		{
			$items .= sprintf('<option value="%s" %s>%s</option>',
								$_zone->id,
								($_zone->id == $this->strZone ? 'selected = "selected"' : ''),
								$_zone->localizedName);
		}
		

		return sprintf('%s<select name="zone" id="ctrl_zone" %s>%s</select>',
							( strlen($this->label) ? '<label for"ctrl_zone">'.$this->label.'</label>' : ''),
							($boolReloadOnChange ? ' onchange="submit();"' : ''),
							$items
							);

	}


}

?>