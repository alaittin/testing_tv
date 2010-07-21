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
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package			TVFI
 * @license			GPL 
 * @filesource
 */


/**
 * Fields
 */

// HEADER

$GLOBALS['TL_LANG']['tl_tvfi_programme']['tstamp'] = array('Dernière mise à jour', '');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['tstamp_creation'] = array('Date de création', '');
 
// ESSENTIALS

$GLOBALS['TL_LANG']['tl_tvfi_programme']['essentials_legend'] = 'Informations essentielles';
$GLOBALS['TL_LANG']['tl_tvfi_programme']['relations_legend'] = 'Formats, Genres, Versions, Themes, Supports';
$GLOBALS['TL_LANG']['tl_tvfi_programme']['others_legend'] = 'Informations additionnelles';
$GLOBALS['TL_LANG']['tl_tvfi_programme']['info_descriptive_legend'] = 'Les informations descriptives';
$GLOBALS['TL_LANG']['tl_tvfi_programme']['info_commerciale_legend'] = 'Les informations commerciales';
 
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_titre_fr'] = array('Titre en français', 'Veuillez saisir le titre en français.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_titre_en'] = array('Titre en anglais', 'Veuillez saisir le titre en anglais.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_titre_es'] = array('Titre en espagnol', 'Veuillez saisir le titre en espagnol.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['public_vise_id'] = array('Public vise', 'Veuillez choisir la public vise.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['nationalite_id'] = array('Nationalité','Veuillez choisir la nationalité.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['collection_id'] = array('Collection','Veuillez choisir la collection.');

$GLOBALS['TL_LANG']['tl_tvfi_programme']['format'] = array('Format(s) de programme', 'Choisissez le(s) format(s) de programme.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['theme'] = array('Thème(s) / Mots clés', 'Choisissez le(s) thème(s) de programme.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['genre'] = array('Genre(s)', 'Choisissez le(s) genre(s) de programme.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['version_originale_id'] = array('Version originale', 'Choisissez le version originale de programme.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['version'] = array('Versions disponibles', 'Choisissez le(s) version(s) de programme.');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['support'] = array('Support(s)', 'Choisissez le(s) support(s) de programme.');

$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_annee'] = array('Année', 'Saisissez ici l\'annee');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_en_production'] = array('En production', 'Programme en production');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_couleur'] = array('Image en couleur', '');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_noir_blanc'] = array('Image en noir et blanc','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_colorise'] = array('Image colorisée','');


$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree1_nombre'] = array('Nombre d’épisodes pour la 1ère durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree1_min']    = array('Durée (mn) d’un épisode pour la 1ère durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree1_sec']    = array('Durée (s) d’un ealisa pour la 1ère durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree2_nombre'] = array('Nombre d’épisodes pour la 2ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree2_min']    = array('Durée (mn) d’un  ealisa pour la 2ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree2_sec']    = array('Durée (s) d’un  ealisa pour la 2ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree3_nombre'] = array('Nombre d’épisodes pour la 3ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree3_min']    = array('Durée (mn) d’un  ealisa pour la 3ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree3_sec']    = array('Durée (s) d’un  ealisa pour la 3ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree4_nombre'] = array('Nombre d’épisodes pour la 4ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree4_min']    = array('Durée (mn) d’un  ealisa pour la 4ème durée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_duree4_sec']    = array('Durée (s) d’un  ealisa pour la 4ème durée','');

$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_extrait_video'] = array('Extrait video','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_date_extrait_video'] = array('Date de l’extrait vidéo','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_recompenses'] = array('Recompenses en anglais','');

$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_fr'] = array('Synopsis en français','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_en'] = array('Synopsis en anglais','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_es'] = array('Synopsis en espagnol','');

$GLOBALS['TL_LANG']['tl_tvfi_programme']['contact_vendeur1_id'] = array('Premier contact vendeur','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['contact_vendeur2_id'] = array('Deuxième contact vendeur','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_droit_fr'] = array('Droits en français','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_droit_en'] = array('Droits en anglais','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_web'] = array('Site internet du programme',''); 
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_rdv_fr'] = array('Synopsis rendez-vous en français','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_synopsis_rdv_en'] = array('Synopsis rendez-vous en anglais','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_online'] = array('Online','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_hd'] = array('En prevision du format hd','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_flyer'] = array('Fichier flyer','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_lien_video'] = array('Lien de la video intégrale','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_lien_video_extrait'] = array('Lien de l’extrait vidéo','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_etat_trad_es'] = array('Traduction espgnaole déjà effectuée','');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['fpg_date_trad_es'] = array('Date de réalisation de la traduction espagnole','');

/** 
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_tvfi_programme']['new']    = array('Nouveau programme', 'Cr&eacute;er un nouveau programme');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['edit']   = array('Editer le programme', 'Editer le programme ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['copy']   = array('Copier le programme', 'Copier le programme ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['delete'] = array('Supprimer le programme', 'Supprimer le programme ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_programme']['show']   = array('D&eacute;tails du programme', 'Afficher les d&eacute;tails du programme ID %s');

?>