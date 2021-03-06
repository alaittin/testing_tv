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
 * Define requirements
 */
if ($_POST['isPopup'] == 'true')
{
	define('POPUP', true);
	define('GET_COUNT', 4);
}
else
{
	define('POPUP', false);
	define('GET_COUNT', 5);
}


/**
 * Check parameters
 */
if (count($_GET) != GET_COUNT || empty($_POST))
{
	header('HTTP/1.1 400 Bad Request');
	die('Illegal request');
}

if (!array_key_exists('pid', $_GET) || !array_key_exists('id', $_GET))
{
	header('HTTP/1.1 400 Bad Request');
	die('Required parameters missing');
}

if (($_GET['do'] != 'files' && !POPUP) || $_GET['act'] != 'move' || $_GET['mode'] != 2)
{
	header('HTTP/1.1 400 Bad Request');
	die('Unexpected arguments');
}


/**
 * Set the referer host
 */
$_SERVER['HTTP_REFERER'] = 'http://' . filter_var($_SERVER['SERVER_NAME'], FILTER_SANITIZE_URL);


/**
 * FancyUpload sends the cookie data via POST
 */
$_COOKIE[session_name()] = filter_input(INPUT_POST, session_name(), FILTER_SANITIZE_STRING);
$_COOKIE['BE_USER_AUTH'] = filter_input(INPUT_POST, 'BE_USER_AUTH', FILTER_SANITIZE_STRING);


/**
 * Load TYPOlight
 */
require(POPUP ? 'files.php' : 'main.php');

?>