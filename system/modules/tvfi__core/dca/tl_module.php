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
 * @copyright  Leo Feyer 2005
 * @author     Leo Feyer <leo@typolight.org>
 * @package    News
 * @license    LGPL
 * @filesource
 */


/**
 * Add fields to tl_module
 */

$GLOBALS['TL_DCA']['tl_module']['fields']['bloc_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['bloc_template'],
	'default'                 => '',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => $this->getTemplateGroup('')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['bloc_result_number'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_module']['bloc_result_number'],
	'exclude'               => true,
	'inputType'             => 'text',
  'eval'            			=> array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['bloc_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['bloc_width'],
	'default'                 => '320',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('280', '320', '653', '946', '986'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['bloc_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['bloc_color'],
	'default'                 => 'Blue',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('Blue', 'Orange', 'Grey', 'Green'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['bloc_useImageHeader'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['bloc_useImageHeader'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)

);


$GLOBALS['TL_DCA']['tl_module']['fields']['bloc_headerSRC'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['bloc_headerSRC'],
	'inputType'               => 'fileTree',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'mandatory'=>true, 'extensions'=>'jpg,jpeg,gif,png', 'path' => 'tl_files/')
);


$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'bloc_useImageHeader';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['bloc_useImageHeader'] = 'bloc_headerSRC';


?>