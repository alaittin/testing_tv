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
 * @copyright		2009 - Nouveau Western 
 * @author			Erwan Ripoll <erwan.ripoll@lightive.com>
 * @package			burex 
 * @license			GPL 
 * @filesource
 */

/** Messages de l'agenda */

$GLOBALS['TL_LANG']['MSC']['age_meetings'] = '%d rendez-vous(s)';
$GLOBALS['TL_LANG']['MSC']['age_previous'] = '[lt]';
$GLOBALS['TL_LANG']['MSC']['age_next'] = '[gt]';
$GLOBALS['TL_LANG']['MSC']['age_emptyDay'] = 'Il n\'y a pas de rendez-vous pour ce jour.';
$GLOBALS['TL_LANG']['MSC']['age_emptyWeek'] = 'Il n\'y a pas de rendez-vous pour cette semaine.';
$GLOBALS['TL_LANG']['MSC']['age_emptyMonth'] = 'Il n\'y a pas de rendez-vous pour ce mois.';
$GLOBALS['TL_LANG']['MSC']['age_emptyYear'] = 'Il n\'y a pas de rendez-vous pour cette année.';
$GLOBALS['TL_LANG']['MSC']['age_empty'] = 'Il n\'y a pas de rendez-vous à venir.';
$GLOBALS['TL_LANG']['MSC']['age_days'] = 'Cet rendez-vous se répète chaque %s jour';
$GLOBALS['TL_LANG']['MSC']['age_weeks'] = 'Cet rendez-vous se répète chaque %s semaine';
$GLOBALS['TL_LANG']['MSC']['age_months'] = 'Cet rendez-vous se répète chaque %s mois';
$GLOBALS['TL_LANG']['MSC']['age_years'] = 'Cet rendez-vous se répète chaque %s année';
$GLOBALS['TL_LANG']['MSC']['age_until'] = 'jusqu\'au %s';
$GLOBALS['TL_LANG']['MSC']['concert_empty'] = 'Il n\'y a pas de concerts à venir.';

/** Messages d'erreur */

$GLOBALS['TL_CONFIG']['burex_artist_no_result_string'] = 'Aucun artiste ne correspond &agrave; vos crit&egrave;res de recherche.';
$GLOBALS['TL_CONFIG']['burex_release_no_result_string'] = 'Aucun album ne correspond &agrave; vos crit&egrave;res de recherche.';
$GLOBALS['TL_CONFIG']['burex_concert_no_result_string'] = 'Aucun concert ne correspond &agrave; vos crit&egrave;res de recherche.';
$GLOBALS['TL_CONFIG']['burex_organisme_no_result_string'] = 'Aucun organisme ne correspond &agrave; vos crit&egrave;res de recherche.';
$GLOBALS['TL_CONFIG']['burex_news_no_result_string'] = 'Aucune actualit&eacute; ne correspond &agrave; vos crit&egrave;res de recherche.';

$GLOBALS['TL_CONFIG']['burex_adhesion_invalid_code_string'] = array('Votre code d\'activation est incorrect.', 'Merci de le saisir &agrave; nouveau. Si ce code ne fonctionne pas, merci de prendre contact avec le bureauexport.');

$GLOBALS['TL_CONFIG']['burex_adhesion_no_code_string'] = array('Vous n\'avez pas saisi de code d\'activation.', 'Merci de  saisir votre code d\'activation pour continuer votre inscription.');

/* Strings	*/

$GLOBALS['TL_CONFIG']['burex_result_string'] = "r&eacute;sultat";
$GLOBALS['TL_CONFIG']['burex_results_string'] = "r&eacute;sultats";

/* Menus	*/

$GLOBALS['TL_CONFIG']['burex_all_styles_string'] = "Tous les styles";
$GLOBALS['TL_CONFIG']['burex_all_countries_string'] = "Tous les pays";
$GLOBALS['TL_CONFIG']['burex_all_cities_string'] = "Toutes les villes";
$GLOBALS['TL_CONFIG']['burex_all_types_string'] = "Tous les types";
$GLOBALS['TL_CONFIG']['burex_all_days_string'] = "Tous les jours";
$GLOBALS['TL_CONFIG']['burex_all_months_string'] = "Tous les mois";
$GLOBALS['TL_CONFIG']['burex_all_years_string'] = "Toutes les ann&eacute;es";
$GLOBALS['TL_CONFIG']['burex_all_languages_string'] = "Toutes les langues";

/* Elements de contenu */

$GLOBALS['TL_LANG']['CTE']['ce_horizontal_separator'] = array('S&eacute;parateur horizontal', 'Génère une ligne horizontale.');
$GLOBALS['TL_LANG']['CTE']['encart_titre'] = array('Encart de titre styl&eacute;', '');


/**
 * Miscellaneous
 */

$GLOBALS['TL_CONFIG']['burex_months'] = array
	(
		'1'		=>	'Janvier',
		'2'		=>	'F&eacute;vrier',
		'3'		=>	'Mars',
		'4'		=>	'Avril',
		'5'		=>	'Mai',
		'6'		=>	'Juin',
		'7'		=>	'Juillet',
		'8'		=>	'Ao&ucirc;t',
		'9'		=>	'Septembre',
		'10'	=>	'Octobre',
		'11'	=>	'Novembre',
		'12'	=>	'D&eacute;cembre',
	);





?>