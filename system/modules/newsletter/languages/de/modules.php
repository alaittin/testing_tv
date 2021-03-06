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
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Newsletter
 * @license    LGPL
 * @filesource
 */


/**
 * Back end modules
 */
$GLOBALS['TL_LANG']['MOD']['newsletter'] = array('Newsletter', 'Abonnements verwalten und Newsletter versenden.');


/**
 * Front end modules
 */
$GLOBALS['TL_LANG']['FMD']['newsletter']  = 'Newsletter';
$GLOBALS['TL_LANG']['FMD']['subscribe']   = array('Abonnieren', 'erzeugt ein Formular zum Abonnieren von Verteilern.');
$GLOBALS['TL_LANG']['FMD']['unsubscribe'] = array('Kündigen', 'erzeugt ein Formular zum Kündigen von Abonnements.');
$GLOBALS['TL_LANG']['FMD']['nl_list']     = array('Newsletterliste', 'fügt der Seite eine Newsletterliste hinzu.');
$GLOBALS['TL_LANG']['FMD']['nl_reader']   = array('Newsletterleser', 'stellt einen einzelnen Newsletter dar.');

?>