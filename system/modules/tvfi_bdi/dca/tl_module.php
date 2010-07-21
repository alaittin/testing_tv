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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_new_societes_acheteuses'] = 'name,type,headline;jumpTo;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_societes_acheteuses'] = 'name,type,headline;jumpTo;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';

$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_fiche_societe_acheteuse'] = 'name,type,headline;{bloc_legend},bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_organigramme_societe_acheteuse'] = 'name,type,headline;{bloc_legend},bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';

$GLOBALS['TL_DCA']['tl_module']['palettes']['mo_favoris_societes_acheteuses'] = 'name,type,headline;jumpTo;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';

// CONTACTS

$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_new_contacts'] = 'name,type,headline;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_contacts'] = 'name,type,headline;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_fiche_contact'] = 'name,type,headline;{bloc_legend},bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';

// PAYS

$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_pays'] = 'name,type,headline;jumpTo;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';

$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_fiche_pays'] = 'name,type,headline;{bloc_legend},bloc_width,bloc_color,bloc_useImageHeader,bloc_result_number;{expert_legend:hide},cssID,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_last_updated_pays'] = 'name,type,headline;jumpTo;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';

// GRILLES DE PROGRAMMES

$GLOBALS['TL_DCA']['tl_module']['palettes']['bdi_grilles_programmes'] = 'name,type,headline;{bloc_legend},bloc_result_number,bloc_width,bloc_color,bloc_useImageHeader;{expert_legend:hide},cssID,protected';
?>