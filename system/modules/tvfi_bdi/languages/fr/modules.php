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
 **/


/**
 * Back end modules
 **/
 
// BDI 
 
$GLOBALS['TL_LANG']['MOD']['bdi'] = 'Administration BDI';
$GLOBALS['TL_LANG']['MOD']['societe_acheteuse'] = array('Sociétés', 'Ce module permet de gérer les sociétés de la BDI.');


/*


$GLOBALS['TL_LANG']['MOD']['contenu_promo'] = 'Contenu Promo';
$GLOBALS['TL_LANG']['MOD']['organismes_membres'] = 'Annuaire Pro';
$GLOBALS['TL_LANG']['MOD']['fil_info'] = 'Fil Info';
$GLOBALS['TL_LANG']['MOD']['news'] = array('News', 'Ce modules gère les actualités');

$GLOBALS['TL_LANG']['MOD']['contacts'] = array('Contacts', 'Gérer les comptes des membres (utilisateurs du front office).');
$GLOBALS['TL_LANG']['MOD']['burex_artists'] = array('Artists', 'Ce module permet de g&eacute;rer les artistes, les albums, sorties et awards.');
$GLOBALS['TL_LANG']['MOD']['burex_organismes'] = array('Organismes', 'Ce module permet de g&eacute;rer les organismes et les contacts.');
$GLOBALS['TL_LANG']['MOD']['burex_concerts'] = array('Shows', 'Ce module permet de g&eacute;rer les concerts.');

$GLOBALS['TL_LANG']['MOD']['bureau_export_settings'] = 'Cat&eacute;gories';
$GLOBALS['TL_LANG']['MOD']['burex_formats'] = array('Format Release', 'Ce module permet de g&eacute;rer les formats de release.');
$GLOBALS['TL_LANG']['MOD']['burex_supports'] = array('Type Release', 'Ce module permet de g&eacute;rer les types de release.');
$GLOBALS['TL_LANG']['MOD']['burex_styles'] = array('Style musical', 'Ce module permet de g&eacute;rer les styles musicaux.');
$GLOBALS['TL_LANG']['MOD']['burex_types_contrat'] = array('Contrat Release', 'Ce module permet de g&eacute;rer les contrats de release.');
$GLOBALS['TL_LANG']['MOD']['burex_countries'] = array('Pays', 'Ce module permet de g&eacute;rer les pays.');
$GLOBALS['TL_LANG']['MOD']['burex_bureaux_locaux'] = array('Bureaux', 'Ce module permet de g&eacute;rer les bureaux locaux.');
$GLOBALS['TL_LANG']['MOD']['burex_organismes_types'] = array('Type Organisme', 'Ce module permet de g&eacute;rer les types d\'organismes du fichier Pro.');
$GLOBALS['TL_LANG']['MOD']['burex_rendezvous_types'] = array('Type de Rendez Vous', 'Ce module permet de g&eacute;rer les types de rendez-vous.');
$GLOBALS['TL_LANG']['MOD']['burex_organisme_statuts'] = array('Statut Organisme adh&eacute;rent', 'Ce module permet de g&eacute;rer les status des organismes.');
$GLOBALS['TL_LANG']['MOD']['burex_contact_types'] = array('Fonction Contact', 'Ce module permet de g&eacute;rer les fonctions des contacts.');
$GLOBALS['TL_LANG']['MOD']['burex_media_types'] = array('Type Media', 'Ce module permet de g&eacute;rer les types de media.');
$GLOBALS['TL_LANG']['MOD']['burex_salle_types'] = array('Type Venue & Night Club', 'Ce module permet de g&eacute;rer les types de salle.');
$GLOBALS['TL_LANG']['MOD']['burex_adhesion_types'] = array('Types d\'adh&eacute;sion', 'Ce module permet de g&eacute;rer les types d\'ad&eacute;sion.');
$GLOBALS['TL_LANG']['MOD']['burex_media_periodicite'] = array('P&eacute;riodicit&eacute; Media', 'Ce module permet de g&eacute;rer les types de p&eacute;riodicit&eacute; de media.');
$GLOBALS['TL_LANG']['MOD']['burex_media_rayonnement'] = array('Rayonnement Media', 'Ce module permet de g&eacute;rer les types de rayonnement de media.');
$GLOBALS['TL_LANG']['MOD']['burex_cotisations_periods'] = array('P&eacute;riode d\'adh&eacute;sion', 'Ce module permet de g&eacute;rer les p&eacute;riodes d\'adh&eacute;sion.');

$GLOBALS['TL_LANG']['MOD']['agenda'] = array('Rendez-vous', 'Gérer les rendez-vous et les afficher dans un agenda ou une liste de rendez-vous.');

*/
/**
 * Front end modules
**/
$GLOBALS['TL_LANG']['FMD']['bureau_export'] = 'Bureau Export';
$GLOBALS['TL_LANG']['FMD']['burex_artist'] = array('Fiche d\'artiste', 'Ce module affiche une fiche contenant toutes les informations concernant un artiste.');
$GLOBALS['TL_LANG']['FMD']['burex_artists_resultats'] = array('R&eacute;sultats de recherche d\'artistes', 'Ce module permet d\'afficher les r&eacute;sultats d\'une recherche.');
$GLOBALS['TL_LANG']['FMD']['burex_artists_recherche'] = array('Recherche d\'artistes', 'Ce module affiche un formulaire de recherche des artistes.');
$GLOBALS['TL_LANG']['FMD']['burex_artist_releases'] = array('Liste d\'albums d\'un artiste', 'Ce module affiche la liste des albums d\'un artiste particulier.');
$GLOBALS['TL_LANG']['FMD']['burex_artist_concerts'] = array('Liste des concerts d\'un artiste', 'Ce module affiche la liste des concerts d\'un artiste particulier.');
$GLOBALS['TL_LANG']['FMD']['burex_artist_recents'] = array('Liste d\'artistes r&eacute;cents', 'Ce module affiche une liste de 6 r&eacute;cents choisis au hasard.');
$GLOBALS['TL_LANG']['FMD']['burex_artist_mostViewed'] = array('Liste d\'artistes les plus vus', 'Ce module affiche une liste des artistes les plus vus.');
$GLOBALS['TL_LANG']['FMD']['burex_artist_featuredVideo'] = array('Video vedette', 'Ce module affiche une video d\'artiste choisie au hasard.');

$GLOBALS['TL_LANG']['FMD']['burex_concerts'] = array('Liste des concerts', 'Ce module affiche la liste des concerts.');
$GLOBALS['TL_LANG']['FMD']['burex_concerts_calendar'] = array('Calendrier des concerts', 'Ce module affiche la liste des concerts sous forme de calendrier.');
$GLOBALS['TL_LANG']['FMD']['burex_concerts_recherche'] = array('Recherche de concerts', 'Ce module affiche un module de recherche et de filtre des concerts.');
$GLOBALS['TL_LANG']['FMD']['burex_concerts_upcoming'] = array('Concerts à venir', 'Ajoute une liste de concerts à venir dans une page.');
$GLOBALS['TL_LANG']['FMD']['burex_concerts_upcoming2'] = array('Concerts à venir version 2', 'Ajoute une liste de concerts à venir dans une page.');

$GLOBALS['TL_LANG']['FMD']['burex_releases'] = array('Liste d\'albums', 'Ce module affiche la liste des albums.');
$GLOBALS['TL_LANG']['FMD']['burex_releases_recherche'] = array('Recherche d\'albums', 'Ce module affiche un module de recherche et de filtre des albums.');
$GLOBALS['TL_LANG']['FMD']['burex_releases_latest'] = array('Liste d\'albums r&eacute;cents', 'Ce module affiche une liste de X artistes r&eacute;cents choisis au hasard.');

$GLOBALS['TL_LANG']['FMD']['burex_top_search'] = array('Formulaire de recherche', '');

$GLOBALS['TL_LANG']['FMD']['meetings'] = 'Agenda des rendez-vous';
$GLOBALS['TL_LANG']['FMD']['agenda'] = array('Agenda', 'Ajoute un agenda / agenda dans une page.');
$GLOBALS['TL_LANG']['FMD']['meetingreader'] = array('Lecteur de rendez-vous', 'Affiche les détails de rendez-vous.');
$GLOBALS['TL_LANG']['FMD']['meetinglist'] = array('Liste de rendez-vous', 'Ajoute une liste de rendez-vous dans une page.');
$GLOBALS['TL_LANG']['FMD']['upcoming_meetings'] = array('Rendez-vous à venir', 'Ajoute une liste de rendez-vous à venir dans une page.');
$GLOBALS['TL_LANG']['FMD']['meeting_recherche'] = array('Recherche de rendez-vous', 'Ce module affiche un module de recherche et de filtre des rendez-vous dans une page.');
$GLOBALS['TL_LANG']['FMD']['meeting_resultats'] = array('R&eacute;sultats de recherche de rendez-vous', 'Ce module permet d\'afficher les r&eacute;sultats d\'une recherche de rendez-vous.');

$GLOBALS['TL_LANG']['FMD']['burex_organismes_resultats'] = array('R&eacute;sultats de recherche d\'organismes', 'Ce module permet d\'afficher les r&eacute;sultats d\'une recherche.');
$GLOBALS['TL_LANG']['FMD']['burex_organismes_recherche'] = array('Recherche d\'organismes', 'Ce module affiche un formulaire de recherche des organismes.');
$GLOBALS['TL_LANG']['FMD']['burex_member_adhesion'] = array('Adh&eacute;sion d\'un membre', 'Ce module fait la liaison en tre la saisie d\'un code d\'acitvation et l\'&eacute;tape suivante de l\'inscription.');
$GLOBALS['TL_LANG']['FMD']['ariane'] = array('Navigation Fil d\'Ariane optimis&eacute;e', '');

$GLOBALS['TL_LANG']['FMD']['intlnewsreader'] = array('Lecteur de News multilingue', 'Affiche le détail d\'une actualité et ses d&eacute;clinaisons multilingues.');
$GLOBALS['TL_LANG']['FMD']['intlnewsLatest'] = array('Liste de News multilingues r&eacute;centes', 'Affiche une liste d\'actualit&eacute;s r&eacute;centes class&eacute;s par ordre chronologique invers&eacute;.');
$GLOBALS['TL_LANG']['FMD']['intlnewsMostViewed'] = array('Liste de News multilingues les plus vues', 'Affiche une liste d\'actualit&eacute;s r&eacute;centes class&eacute;s par ordre de visualisation d&eacute;croissant;.');
$GLOBALS['TL_LANG']['FMD']['news_search'] = array('Recherche de News multilingues', 'Ce module affiche un module de recherche et de filtre des actualit&eacute;s.');
$GLOBALS['TL_LANG']['FMD']['news_resultats'] = array('R&eacute;sultats de recherche des News multilingues', 'Ce module permet d\'afficher les r&eacute;sultats d\'une recherche des actualit&eacute;s.');

$GLOBALS['TL_LANG']['FMD']['burex_style_selector'] = array('S&eacute;lecteur de styles de musique', 'Affiche une liste de styles permettant un choix et stocke les valeurs.');


$GLOBALS['TL_LANG']['FMD']['ajaxlogin'] = array('Formulaire de connexion AJAX', 'Permet l\'identification d\'un membre sans recharger la page en cas d\'erreur.');

?>