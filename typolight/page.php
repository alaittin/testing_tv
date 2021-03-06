<?php

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
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Initialize the system
 */
define('TL_MODE', 'BE');
require_once('../system/initialize.php');


/**
 * Class PagePicker
 *
 * Back end page picker.
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Controller
 */
class PagePicker extends Backend
{

	/**
	 * Initialize the controller
	 * 
	 * 1. Import user
	 * 2. Call parent constructor
	 * 3. Authenticate user
	 * 4. Load language files
	 * DO NOT CHANGE THIS ORDER!
	 */
	public function __construct()
	{
		$this->import('BackendUser', 'User');
		parent::__construct();

		$this->User->authenticate();
		$this->loadLanguageFile('default');
	}


	/**
	 * Run controller and parse the template
	 */
	public function run()
	{
		$this->Template = new BackendTemplate('be_pagepicker');

		$this->Template->theme = $this->getTheme();
		$this->Template->base = $this->Environment->base;
		$this->Template->language = $GLOBALS['TL_LANGUAGE'];
		$this->Template->title = $GLOBALS['TL_CONFIG']['websiteTitle'];
		$this->Template->headline = $GLOBALS['TL_LANG']['MSC']['ppHeadline'];
		$this->Template->isMac = preg_match('/mac/i', $this->Environment->httpUserAgent);
		$this->Template->charset = $GLOBALS['TL_CONFIG']['characterSet'];
		$this->Template->options = $this->createPageList();

		$this->Template->output();
	}
}


/**
 * Instantiate controller
 */
$objPagePicker = new PagePicker();
$objPagePicker->run();

?>