<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * This is the CD collection configuration file.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    CdCollection
 * @license    GPL
 * @filesource
 */


// Back end module
array_insert($GLOBALS['BE_MOD']['content'], 3, array
(
	'cd_collection' => array
	(
		'tables' => array('tl_cds_category','tl_cds'),
		'icon'   => 'system/modules/cd_collection/html/icon.gif'
	)
));

// Front end module
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
	'cd_collection' => 'ModuleCdCollection'
))

?>