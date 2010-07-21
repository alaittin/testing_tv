<?php
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
 * @copyright		2010 - Kantik Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package			xkn_ajax
 * @license			GPL 
 * @filesource
 */


/**
 * Initialize the system
 */
define('TL_MODE', 'FE');
require_once('../../../initialize.php');


/**
 * Class ScriptGenerator
 *
 * Generates a localized version of the js.
 *
 * @copyright		2010 - Kantik Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ScriptGenerator extends Frontend
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
	 
	/**
	 * Requested Action
	 * @var string
	 */
	protected $strAction = '';
 
	/**
	 * Requested Controller
	 * @var string
	 */
	protected $strController ='';
	 
	/**
	 * Requested Parameters
	 * @var array
	 */
	protected $arrParams = array();
	 
	/**
	 * Requested Parameters
	 * @var array
	 */
	protected $arrJSParams = array();

 
	/**
	 * Returned Response
	 * @var array
	 */
	protected $arrResponse = array();


	public function __construct()
	{
		$this->import('FrontendUser', 'User');
		parent::__construct();

		$this->User->authenticate();
		$this->loadLanguageFile('default', $_GET['lang']);
	}

	public function run()
	{
		ob_start();
		include('frontend.js');
		$strBuffer = ob_get_contents();
		ob_end_clean();

		echo $strBuffer;
		
		return; 
	}

}


/**
 * Instantiate controller
 */
$objScriptGenerator = new ScriptGenerator();
$objScriptGenerator->run();
?>