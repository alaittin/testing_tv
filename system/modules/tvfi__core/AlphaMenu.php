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
 * Class AlphaMenu
 *
 * Provide methodes to render a alpha menu.
 * @copyright  Noodle, 2009-2010
 * @author     Erwan Ripoll <eripoll@noodle.fr>
 * @package    Frontend
 */
class AlphaMenu extends Frontend
{

	/**
	 * Current page string (ex: "a")
	 * @var integer
	 */
	protected $strPage;


	/**
	 * Request url
	 * @var string
	 */
	protected $strUrl = '';

	/**
	 * Variable connector
	 * @var string
	 */
	protected $strVarConnector = '?';

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
	public function __construct( $boolUseDigits = true)
	{
		parent::__construct();

		$this->strPage = 'a';

		if ($this->Input->get('alpha') != '')
		{
			$this->strPage = $this->Input->get('alpha');
		}
		
		$this->alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		if($boolUseDigits) $this->alphabet[] = '0-9';
		
		
	}




	/**
	 * Generate the pagination menu and return it as HTML string
	 * @param string
	 * @return string
	 */
	public function generate($strSeparator=' ', $strUrl = NULL)
	{
		global $objPage;


		$blnQuery = false;

		// Prepare URL
		$this->strUrl = isset($strUrl) ? $strUrl : ampersand(($this->Environment->base."".$objPage->alias .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);

		$this->strVarConnector = $blnQuery ? '&amp;' : '?';


		$this->Template = new FrontendTemplate('alphamenu');

		$this->Template->items = $this->getItemsAsString($strSeparator);

		return $this->Template->parse();
	}


	/**
	 * Generate all page links separated with the given argument and return them as string
	 * @param  string
	 * @return string
	 */
	public function getItemsAsString($strSeparator=' ')
	{
		foreach ($this->alphabet as $letter)
		{
			if ($letter == strtoupper($this->strPage) )
			{
				$arrLinks[] = sprintf('<li><span class="active">%s</span></li>', $letter);
				continue;
			}

			$arrLinks[] = sprintf('<li><a href="%s" class="link" title="%s">%s</a></li>',
								ampersand($this->strUrl) . $this->strVarConnector . 'alpha=' . $letter,
								sprintf(specialchars($GLOBALS['TL_LANG']['MSC']['goToPage']), $letter),
								$letter);
		}

		return implode($strSeparator, $arrLinks);
	}
}

?>