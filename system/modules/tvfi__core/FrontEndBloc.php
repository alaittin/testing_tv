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
 * @filesource
 */


/**
 * Class FrontendBloc 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    		Model
 */
abstract class FrontendBloc extends Module
{
	/**
	 * Name of the bloc template
	 * @var string
	 */
	protected $strTemplate = 'frontendbloc';

	
	protected function compile()
	{
		$this->Template = new FrontendTemplate('frontendbloc');
		$this->Template->content = $this->content;
		$this->Template->bloc_width = $this->bloc_width;
		$this->Template->bloc_mode = $this->bloc_mode;
		$this->Template->bloc_float = $this->bloc_float;
		$this->Template->bloc_color = $this->bloc_color;
		$this->Template->bloc_useImageHeader = $this->bloc_useImageHeader;
		$this->Template->bloc_headerSRC = $this->bloc_headerSRC;
		$this->Template->bloc_moo_script = $this->bloc_moo_script;		
		$this->Template->bloc_ombre = $this->bloc_ombre;		
		return;
	
	}
	
}
?>