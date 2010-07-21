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

$GLOBALS['TL_LANG']['tl_style']['invisible'] = array('Invisible', 'Ne pas exporter cette définition de formatage.');
$GLOBALS['TL_LANG']['tl_style']['selector'] = array('Sélecteur', 'Le sélecteur définit à quel(s) élément(s) la définition de formatage s\'applique.');
$GLOBALS['TL_LANG']['tl_style']['category'] = array('Catégorie', 'Utiliser les catégories pour grouper et gérer vos définitions de formatage.');
$GLOBALS['TL_LANG']['tl_style']['comment'] = array('Commentaire', 'Vous pouvez ajouter un commentaire.');
$GLOBALS['TL_LANG']['tl_style']['size'] = array('Taille et position', 'Largeur, hauteur, position, débordement, flottant, effacer et affichage.');
$GLOBALS['TL_LANG']['tl_style']['width'] = array('Largeur', 'Saisir la largeur de l\'élément.');
$GLOBALS['TL_LANG']['tl_style']['height'] = array('Hauteur', 'Saisir la hauteur de l\'élément.');
$GLOBALS['TL_LANG']['tl_style']['trbl'] = array('Position', 'Saisir la position haute, droite, basse et gauche.');
$GLOBALS['TL_LANG']['tl_style']['position'] = array('Type de position', 'Spécifier le type de position.');
$GLOBALS['TL_LANG']['tl_style']['floating'] = array('Flottant', 'Choisir le type de flottant.');
$GLOBALS['TL_LANG']['tl_style']['clear'] = array('Effacer', 'Choisir le type d\'effacement.');
$GLOBALS['TL_LANG']['tl_style']['overflow'] = array('Débordement', 'Choisir le comportement de débordement.');
$GLOBALS['TL_LANG']['tl_style']['display'] = array('Affichage', 'Choisir le type d\'affichage.');
$GLOBALS['TL_LANG']['tl_style']['alignment'] = array('Marge, remplissage et alignement', 'Marge, remplissage, alignement, alignement vertical et alignement du texte.');
$GLOBALS['TL_LANG']['tl_style']['margin'] = array('Marge', 'Saisir la marge haute, droite, basse et gauche.');
$GLOBALS['TL_LANG']['tl_style']['padding'] = array('Remplissage', 'Saisir le remplissage haut, droit, bas et gauche.');
$GLOBALS['TL_LANG']['tl_style']['align'] = array('Alignement de l\'élément', 'Pour aligner un élément, ses marges gauche et droite seront écrasées.');
$GLOBALS['TL_LANG']['tl_style']['verticalalign'] = array('Alignement vertical', 'Définir l\'alignement vertical.');
$GLOBALS['TL_LANG']['tl_style']['textalign'] = array('Alignement du texte', 'Définir l\'alignement horizontal d\'un texte.');
$GLOBALS['TL_LANG']['tl_style']['background'] = array('Fond', 'Couleur de fond, image de fond, position du fond et répétition du fond.');
$GLOBALS['TL_LANG']['tl_style']['bgcolor'] = array('Couleur du fond', 'Saisir une couleur de fond en hexadécimal (ex : ff0000 pour le rouge).');
$GLOBALS['TL_LANG']['tl_style']['bgimage'] = array('Image de fond', 'Saisir le chemin de l\'image de fond.');
$GLOBALS['TL_LANG']['tl_style']['bgposition'] = array('Position du fond', 'Sélectionner la position de l\'image de fond.');
$GLOBALS['TL_LANG']['tl_style']['bgrepeat'] = array('Répétition du fond', 'Sélectionner un mode de répétition.');
$GLOBALS['TL_LANG']['tl_style']['border'] = array('Bordure', 'Épaisseur de bordure, style de bordure, couleur de bordure et fusion de bordure.');
$GLOBALS['TL_LANG']['tl_style']['borderwidth'] = array('Épaisseur de la bordure', 'Saisir l\'épaisseur de la bordure haute, droite, basse et gauche.');
$GLOBALS['TL_LANG']['tl_style']['borderstyle'] = array('Style de la bordure', 'Sélectionner le style de bordure.');
$GLOBALS['TL_LANG']['tl_style']['bordercolor'] = array('Couleur de la bordure', 'Saisir une couleur de bordure en hexadécimal (ex : ff0000 pour le rouge).');
$GLOBALS['TL_LANG']['tl_style']['bordercollapse'] = array('Fusion de bordure', 'Déterminer le type de fusion de bordure.');
$GLOBALS['TL_LANG']['tl_style']['font'] = array('Police de caractère', 'Collection de polices, taille, couleur, hauteur de ligne, style et espace blanc.');
$GLOBALS['TL_LANG']['tl_style']['fontfamily'] = array('Collection de polices', 'Saisir une liste séparée par virgule de polices de caractères.');
$GLOBALS['TL_LANG']['tl_style']['fontsize'] = array('Taille de la police', 'Saisir la taille et l\'unité de la police de caractère.');
$GLOBALS['TL_LANG']['tl_style']['fontcolor'] = array('Couleur de la police', 'Saisir la couleur de la police de caractère en hexadécimal (ex : ff0000 pour le rouge).');
$GLOBALS['TL_LANG']['tl_style']['lineheight'] = array('Hauteur de ligne', 'Saisir la hauteur de ligne de l\'élément.');
$GLOBALS['TL_LANG']['tl_style']['fontstyle'] = array('Style de la police', 'Choisir un ou plusieurs styles de police de caractère.');
$GLOBALS['TL_LANG']['tl_style']['whitespace'] = array('Annuler le retour à la ligne automatique', 'Si vous choisissez cette option, il n\'y aura plus de retour à la ligne automatique.');
$GLOBALS['TL_LANG']['tl_style']['list'] = array('Liste', 'Propriétés de liste (style, type, image).');
$GLOBALS['TL_LANG']['tl_style']['liststyletype'] = array('Symbole de liste', 'Choisir un symbole de liste.');
$GLOBALS['TL_LANG']['tl_style']['liststyleimage'] = array('Symbole personnalisé', 'Saisir le chemin vers un symbole.');
$GLOBALS['TL_LANG']['tl_style']['own'] = array('Code CSS personnalisé', 'Saisir du code CSS personnalisé.');
$GLOBALS['TL_LANG']['tl_style']['selector_legend'] = 'Sélecteur et catégorie';
$GLOBALS['TL_LANG']['tl_style']['size_legend'] = 'Taille et position';
$GLOBALS['TL_LANG']['tl_style']['align_legend'] = 'Marge et alignement';
$GLOBALS['TL_LANG']['tl_style']['background_legend'] = 'Paramètres du fond';
$GLOBALS['TL_LANG']['tl_style']['border_legend'] = 'Paramètres de la bordure';
$GLOBALS['TL_LANG']['tl_style']['font_legend'] = 'Paramètres de la police de caractère';
$GLOBALS['TL_LANG']['tl_style']['list_legend'] = 'Paramètres de la liste';
$GLOBALS['TL_LANG']['tl_style']['custom_legend'] = 'Code personnalisé';
$GLOBALS['TL_LANG']['tl_style']['normal'] = 'normal';
$GLOBALS['TL_LANG']['tl_style']['bold'] = 'gras';
$GLOBALS['TL_LANG']['tl_style']['italic'] = 'italique';
$GLOBALS['TL_LANG']['tl_style']['underline'] = 'souligné';
$GLOBALS['TL_LANG']['tl_style']['notUnderlined'] = 'non souligné';
$GLOBALS['TL_LANG']['tl_style']['line-through'] = 'barré';
$GLOBALS['TL_LANG']['tl_style']['overline'] = 'ligne supérieure';
$GLOBALS['TL_LANG']['tl_style']['small-caps'] = 'petite majuscule';
$GLOBALS['TL_LANG']['tl_style']['disc'] = 'disque';
$GLOBALS['TL_LANG']['tl_style']['circle'] = 'cercle';
$GLOBALS['TL_LANG']['tl_style']['square'] = 'carré';
$GLOBALS['TL_LANG']['tl_style']['decimal'] = 'figures';
$GLOBALS['TL_LANG']['tl_style']['upper-roman'] = 'romain majuscule';
$GLOBALS['TL_LANG']['tl_style']['lower-roman'] = 'romain minuscule';
$GLOBALS['TL_LANG']['tl_style']['upper-alpha'] = 'caractère majuscule';
$GLOBALS['TL_LANG']['tl_style']['lower-alpha'] = 'caractère minuscule';
$GLOBALS['TL_LANG']['tl_style']['none'] = 'aucune puce';
$GLOBALS['TL_LANG']['tl_style']['new'] = array('Nouvelle définition de formatage', 'Créer une nouvelle définition de formatage');
$GLOBALS['TL_LANG']['tl_style']['show'] = array('Détails de la définition', 'Détails de la définition ID %s');
$GLOBALS['TL_LANG']['tl_style']['edit'] = array('Éditer la définition', 'Éditer la définition ID %s');
$GLOBALS['TL_LANG']['tl_style']['cut'] = array('Déplacer la définition', 'Déplacer la définition ID %s');
$GLOBALS['TL_LANG']['tl_style']['copy'] = array('Dupliquer la définition', 'Dupliquer la définition ID %s');
$GLOBALS['TL_LANG']['tl_style']['delete'] = array('Supprimer la définition', 'Supprimer la définition ID %s');
$GLOBALS['TL_LANG']['tl_style']['editheader'] = array('Éditer la feuille de style', 'Éditer les paramètres de la feuille de style');
$GLOBALS['TL_LANG']['tl_style']['pasteafter'] = array('Coller au début', 'Coller après la définition de formatage ID %s');
$GLOBALS['TL_LANG']['tl_style']['pastenew'] = array('Créer une nouvelle définition de formatage au début', 'Créer une nouvelle définition de formatage après la définition ID %s');
$GLOBALS['TL_LANG']['tl_style']['toggle'] = array('Basculer la visibilité', 'Basculer la visibilité de la définition de formatage ID %s');

?>