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
 * PHP version 5
 * @copyright    2008 - Erwan Ripoll 
 * @author        Erwan Ripoll <erwan.ripoll@mac.com>
 * @package      gestion_formations 
 * @license        GPL 
 * @filesource
 */


/**
 * Class SummaryField
 *
 * Provide methods to handle a summary field .
 * PHP version 5
 * @copyright    2008 - Erwan Ripoll 
 * @author        Erwan Ripoll <erwan.ripoll@mac.com>
 * @package      gestion_formations 
 * @license        GPL 
 * @filesource
 */
class ItemListField extends Widget
{

	/**
	 * Submit user input
	 * @var boolean
	 */
	protected $blnSubmitInput = true;

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget';



	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
			return '<div style="border-color: #aaa9a9; border-width: 1px;	border-style: solid; width:650px; padding:2px">'.$this->varValue.'</div>';
	}
}

?>