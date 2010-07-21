<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  Cyril Ponce 2007 - 2010
 * @copyright  Patrick Lefèvre 2008 - 2009
 * @copyright  Sophie Bertholet 2009
 * @copyright  Marie Noëlle Augendre 2009
 * @copyright  Jean-Christophe Brebion 2009
 * @copyright  
 * @author     Cyril Ponce <cyril@contao.fr>
 * @author     Patrick Lefèvre <patrick.lefevre@gmail.com>
 * @author     Sophie Bertholet <sophie.typolight@gmail.com>
 * @author     Marie Noëlle Augendre <mnaugendre@gmail.com>
 * @author     Jean-Christophe Brebion <jean-christophe@fairytree.net>
 * @link       http://www.typolight.fr
 * @package    French
 * @license    GPL
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_layout']['name'] = array('Nom', 'Saisir le nom de la présentation.');
$GLOBALS['TL_LANG']['tl_layout']['fallback'] = array('Présentation par défaut', 'Faire de cette présentation la présentation par défaut.');
$GLOBALS['TL_LANG']['tl_layout']['header'] = array('Inclure l\'entête de page', 'Inclure la section entête à la présentation de page.');
$GLOBALS['TL_LANG']['tl_layout']['headerHeight'] = array('Hauteur de l\'entête', 'Saisir la hauteur de l\'en-tête de page.');
$GLOBALS['TL_LANG']['tl_layout']['footer'] = array('Inclure le pied de page', 'Inclure le pied de page à la présentation de page.');
$GLOBALS['TL_LANG']['tl_layout']['footerHeight'] = array('Hauteur du pied de page', 'Saisir la hauteur du pied de page.');
$GLOBALS['TL_LANG']['tl_layout']['cols'] = array('Colonnes', 'Choisir le nombre de colonnes.');
$GLOBALS['TL_LANG']['tl_layout']['1cl'] = array('Colonne principale seulement', 'Afficher une seule colonne.');
$GLOBALS['TL_LANG']['tl_layout']['2cll'] = array('Colonne de gauche et colonne principale', 'Afficher deux colonnes, avec la colonne principale à droite.');
$GLOBALS['TL_LANG']['tl_layout']['2clr'] = array('Colonne principale et colonne de droite', 'Afficher deux colonnes, avec la colonne principale à gauche.');
$GLOBALS['TL_LANG']['tl_layout']['3cl'] = array('Colonnes principales, gauche et droite', 'Afficher trois colonnes, avec la colonne principale au milieu.');
$GLOBALS['TL_LANG']['tl_layout']['widthLeft'] = array('Largeur de la colonne de gauche', 'Saisir la largeur de la colonne de gauche.');
$GLOBALS['TL_LANG']['tl_layout']['widthRight'] = array('Largeur de la colonne de droite', 'Saisir la largeur de la colonne de droite.');
$GLOBALS['TL_LANG']['tl_layout']['sections'] = array('Sections personnalisées', 'Des sections de présentation personnalisées peuvent être définies dans la configuration du back-office.');
$GLOBALS['TL_LANG']['tl_layout']['sPosition'] = array('Position des sections personnalisées', 'Sélectionner la position des sections de présentation personnalisées.');
$GLOBALS['TL_LANG']['tl_layout']['stylesheet'] = array('Feuilles de styles', 'Sélectionner les feuilles de style à inclure dans cette présentation .');
$GLOBALS['TL_LANG']['tl_layout']['newsfeeds'] = array('Flux RSS d\'actualités', 'Sélectionner les flux RSS des actualités que vous voulez inclure dans cette présentation.');
$GLOBALS['TL_LANG']['tl_layout']['calendarfeeds'] = array('Flux RSS de calendriers', 'Sélectionner les flux RSS des calendriers que vous voulez inclure dans cette présentation.');
$GLOBALS['TL_LANG']['tl_layout']['modules'] = array('Modules inclus', 'Si JavaScript est désactivé, pensez à sauvegarder vos modifications avant de changer l\'ordre.');
$GLOBALS['TL_LANG']['tl_layout']['template'] = array('Modèle de page', 'Sélectionner ici le modèle de page.');
$GLOBALS['TL_LANG']['tl_layout']['doctype'] = array('Définition du Type de Document', 'Choisir une Définition du Type de Document (DTD).');
$GLOBALS['TL_LANG']['tl_layout']['mooSource'] = array('Script Mootools', 'Vous pouvez soit utiliser le script local MooTools ou le charger à partir d\'un réseau de distribution de contenu.');
$GLOBALS['TL_LANG']['tl_layout']['cssClass'] = array('Classe CSS de la balise BODY', 'Vous pouvez ajouter des classes personnalisées qui seront ajoutées à la balise body.');
$GLOBALS['TL_LANG']['tl_layout']['onload'] = array('Body onload', 'Vous pouvez ajouter un attribut body onload.');
$GLOBALS['TL_LANG']['tl_layout']['head'] = array('Balises supplémentaires', 'Vous pouvez ajouter des balises à la section <em>head</em> de la page.');
$GLOBALS['TL_LANG']['tl_layout']['mootools'] = array('Modèles Mootools', 'Sélectionner un ou plusieurs modèles MooTools.');
$GLOBALS['TL_LANG']['tl_layout']['script'] = array('Code JavaScript personnalisé', 'Le code JavaScript sera inséré au bas de la page.');
$GLOBALS['TL_LANG']['tl_layout']['static'] = array('Présentation statique', 'Créer une présentation de page statique, avec une largeur et un alignement fixes.');
$GLOBALS['TL_LANG']['tl_layout']['width'] = array('Largeur totale', 'La largeur totale sera appliquée à l\'élément conteneur.');
$GLOBALS['TL_LANG']['tl_layout']['align'] = array('Alignement', 'Sélectionner l\'alignement de la page.');
$GLOBALS['TL_LANG']['tl_layout']['title_legend'] = 'Titre et présentation par défaut';
$GLOBALS['TL_LANG']['tl_layout']['header_legend'] = 'Entête et pied de page';
$GLOBALS['TL_LANG']['tl_layout']['column_legend'] = 'Paramètres des colonnes';
$GLOBALS['TL_LANG']['tl_layout']['sections_legend'] = 'Sections personnalisées';
$GLOBALS['TL_LANG']['tl_layout']['head_legend'] = 'Section Head';
$GLOBALS['TL_LANG']['tl_layout']['modules_legend'] = 'Modules du front-office';
$GLOBALS['TL_LANG']['tl_layout']['expert_legend'] = 'Paramètres avancés';
$GLOBALS['TL_LANG']['tl_layout']['script_legend'] = 'Paramètres des scripts';
$GLOBALS['TL_LANG']['tl_layout']['static_legend'] = 'Présentation statique';
$GLOBALS['TL_LANG']['tl_layout']['moo_local'] = 'Utiliser le fichier local';
$GLOBALS['TL_LANG']['tl_layout']['moo_googleapis'] = 'Charger à partir de googleapis.com';
$GLOBALS['TL_LANG']['tl_layout']['module'] = 'Module';
$GLOBALS['TL_LANG']['tl_layout']['column'] = 'Colonne';
$GLOBALS['TL_LANG']['tl_layout']['xhtml_strict'] = 'XHTML Strict';
$GLOBALS['TL_LANG']['tl_layout']['xhtml_trans'] = 'XHTML Transitional';
$GLOBALS['TL_LANG']['tl_layout']['before'] = 'Après l\'élément en tête';
$GLOBALS['TL_LANG']['tl_layout']['main'] = 'Dans la colonne principale';
$GLOBALS['TL_LANG']['tl_layout']['after'] = 'Avant l\'élément pied de page';
$GLOBALS['TL_LANG']['tl_layout']['new'] = array('Nouvelle présentation', 'Créer une nouvelle présentation');
$GLOBALS['TL_LANG']['tl_layout']['show'] = array('Détails de la présentation', 'Afficher les détails de la présentation ID %s');
$GLOBALS['TL_LANG']['tl_layout']['edit'] = array('Éditer la présentation', 'Éditer la présentation ID %s');
$GLOBALS['TL_LANG']['tl_layout']['cut'] = array('Déplacer la présentation', 'Déplacer la présentation ID %s');
$GLOBALS['TL_LANG']['tl_layout']['copy'] = array('Dupliquer la présentation', 'Dupliquer la présentation ID %s');
$GLOBALS['TL_LANG']['tl_layout']['delete'] = array('Supprimer la présentation', 'Supprimer la présentation ID %s');
$GLOBALS['TL_LANG']['tl_layout']['editheader'] = array('Éditer le thème', 'Éditer les paramètres du thème');
$GLOBALS['TL_LANG']['tl_layout']['wz_copy'] = 'Dupliquer cette entrée';
$GLOBALS['TL_LANG']['tl_layout']['wz_up'] = 'Déplacer cette entrée vers le haut';
$GLOBALS['TL_LANG']['tl_layout']['wz_down'] = 'Déplacer cette entrée vers le bas';
$GLOBALS['TL_LANG']['tl_layout']['wz_delete'] = 'Supprimer cette entrée';

?>