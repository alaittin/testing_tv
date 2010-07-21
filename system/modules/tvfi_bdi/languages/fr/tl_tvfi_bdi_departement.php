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
 * PHP version 5
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package			tvfi_bdi 
 * @license			GPL 
 */

/**
 * Fields
 */

// HEADER

$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['tstamp'] = array('Dernière mise à jour', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['tstamp_creation'] = array('Date de création', '');


 
// ESSENTIALS

$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['essentials_legend'] = 'Informations essentielles';

$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_nom'] = array('Nom', 'Veuillez saisir le nom du département.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_pays_id'] = array('Pays ', 'Veuillez choisir le nom du pays du département.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_statut'] = array('Statut', 'Veuillez choisir le statut du département.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['type'] = array('Type(s) d\'activit&eacute;s', 'Selectionnez un ou plusieurs types.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_nom_commercial'] = array('Nom commercial', 'Veuillez saisir le nom commercial du département.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_telephone'] = array('Telephone', 'Saisissez ici le n° de t&eacute;l&eacute;phone avec indicatif (ex : +33 1 49 29 52 10) ');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_fax'] = array('Fax', 'Saisissez ici le n° de fax avec indicatif (ex : +33 1 49 29 52 10)');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_url'] = array('Site internet', 'Saisissez ici l\'adresse du site internet pr&eacute;c&eacute;d&eacute;e de http://');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_email'] = array('Adresse e-mail du département', 'Saisissez ici l\'adresse e-mail');

$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published'] = array('Statut de publication', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published']['status']['0'] = 'Test';
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published']['status']['1'] = 'Online';
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['published']['status']['2'] = 'Archivé';

// PROGRAMS & BROADCAST

$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['broadcast_legend'] = 'Programmation & Diffusion';
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['format'] = array('Format(s) de programmes', 'Choisissez le(s) format(s) de programme du département.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['resolution'] = array('HD / 3D / Mobile', 'Choisissez le(s) résolution(s) de programme du département.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['theme'] = array('Thème(s) / Mots clés', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['genre'] = array('Genre(s)', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_traduction'] = array('Doublage', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_sous_titrage'] = array('Sous-titrage', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_prod'] = array('Production propre (%)', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_coprod'] = array('Coproduction (%)', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_achat'] = array('Achat (%)', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_internat'] = array('Dont achat internationaux (%)', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_locaux'] = array('et achats locaux (%)', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_audience'] = array('Audience', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_typepay'] = array('Pay TV', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_abonnes'] = array('Abonnés', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_support'] = array('Support', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_htz'] = array('Hertzien', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_cab'] = array('Câble', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_sat'] = array('Satellite', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_int'] = array('Internet', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_bit_htznum'] = array('Hertzien numérique', '');

$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_htz'] = array('Couverture hertzienne', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_cab'] = array('Couverture câble', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_sat'] = array('Couverture satellite', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_int'] = array('Couverture internet', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_couv_hzn'] = array('Couverture hertzienne numérique', '');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['ach_lang_diff'] = array('Langue(s) de diffusion', '');











$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['adresse_1'] = array('Adresse', 'Veuillez saisir l\'adresse du département');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['adresse_2'] = array('Adresse suite', 'Veuillez saisir le compl&eacute;ment d\'adresse');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['zipcode'] = array('Code Postal / ZIP ', 'Saisissez ici le code postal sans espace');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['city'] = array('Ville', 'Saisissez ici la ville');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['etat'] = array('&Eacute;tat', 'Saisissez ici l\'&eacute;tat');


$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['commentaires_publics'] = array('Commentaires publics', 'Veuillez saisir les commentaires concernant la société, affich&eacute;s sur sa fiche d&eacute;taill&eacute;e.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['commentaires_prives'] = array('Commentaires priv&eacute;s', 'Veuillez saisir les commentaires priv&eacute;s concernant la société, affich&eacute;s uniquement ici.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['commentaires_publics_fr'] = array('Commentaires publics français', 'Veuillez saisir les commentaires concernant la société, affich&eacute;s sur sa fiche d&eacute;taill&eacute;e.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['statut'] = array('Egalement membre auprès de ', '');


$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['auteur'] = array('Auteur de la fiche', 'Veuillez choisir le nom de l\'auteur de cette fiche Artiste.');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['bureau'] = array('Bureau &eacute;metteur de la fiche', 'S&eacute;l&eacute;ctionnez ici le bureau &eacute;metteur');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['contact'] = array('Liste des contacts', '');



/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement'][''] = '';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['new']    = array('Nouvelle société', 'Cr&eacute;er une nouvelle société');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['edit']   = array('Editer la société', 'Editer la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['copy']   = array('Copier la société', 'Copier la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['delete'] = array('Supprimer la société', 'Supprimer la société ID %s');
$GLOBALS['TL_LANG']['tl_tvfi_bdi_departement']['show']   = array('D&eacute;tails du département', 'Afficher les d&eacute;tails du département ID %s');

?>