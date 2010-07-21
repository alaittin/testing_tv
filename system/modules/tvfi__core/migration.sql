-- ===================================================================================================================
--
--  INITIAL CLEAN UP
--
--	Removing Foreign Keys
--

ALTER TABLE `categorie_clef` DROP FOREIGN KEY `fk_categori_reference_mot_clef`;
ALTER TABLE `programme_categorie` DROP FOREIGN KEY `fk_programm_reference_categori`;
ALTER TABLE `programme_contact` DROP FOREIGN KEY `fk_programm_reference_contact_`;

ALTER TABLE `achat_theme_programme` DROP FOREIGN KEY `fk_achat_th_reference_achat`;
ALTER TABLE `archive_achat` DROP FOREIGN KEY `fk_archive__reference_achat`;
ALTER TABLE `archive_contact` DROP FOREIGN KEY `fk_archive__reference_contact`;
ALTER TABLE `breve_contact` DROP FOREIGN KEY `fk_breve_co_reference_contact`;
/* ALTER TABLE `categorie_clef` DROP FOREIGN KEY `fk_categori_reference_mot_clef`;*/
ALTER TABLE `contact_carnet_adresse` DROP FOREIGN KEY `FK_contact_carnet_adresse_bo_contact_vendeur`;
ALTER TABLE `evenement_fo_societe_vendeuse` DROP FOREIGN KEY `FK_evenement_societe_fo_societe_vendeuse`;
ALTER TABLE `evenement_fo_societe_vendeuse_fo_contact_vendeur` DROP FOREIGN KEY `FK_evenement_fo_societe_fo_contact_vendeur_fo_societe_vendeuse`;
ALTER TABLE `evenement_fo_societe_vendeuse_fo_programme` DROP FOREIGN KEY `FK_evenement_fo_programme_fo_societe_vendeuse`;
ALTER TABLE `fo_programme_format` DROP FOREIGN KEY `fk_fo_progr_reference_format`;
ALTER TABLE `fo_programme_genre` DROP FOREIGN KEY `fk_fo_progr_reference_genre`;
ALTER TABLE `fo_programme_support` DROP FOREIGN KEY `FK_fo_programme_support_fo_programme`;
ALTER TABLE `fo_programme_support` DROP FOREIGN KEY `FK_fo_programme_support_support`;
ALTER TABLE `fo_programme_support` DROP FOREIGN KEY `FK_fo_programme_support_support1`;
ALTER TABLE `fo_programme_theme_programme` DROP FOREIGN KEY `fk_fo_progr_reference_theme_pr`;
ALTER TABLE `fo_programme_utilisateur` DROP FOREIGN KEY `FK_fo_programme_utilisateur_utilisateur`;
ALTER TABLE `format_achat` DROP FOREIGN KEY `fk_format_a_reference_achat`;
ALTER TABLE `genre_achat` DROP FOREIGN KEY `fk_genre_ac_reference_achat`;
ALTER TABLE `genre_breve_contact` DROP FOREIGN KEY `fk_genre_br_reference_breve_co`;
ALTER TABLE `genre_breve_pays` DROP FOREIGN KEY `fk_genre_br_reference_breve_pa`;
ALTER TABLE `genre_breve_societe_acheteuse` DROP FOREIGN KEY `fk_genre_br_reference_breve_so`;
ALTER TABLE `genre_societe_vendeuse` DROP FOREIGN KEY `FK_genre_societe_vendeuse_fo_societe_vendeuse`;
ALTER TABLE `liste_diffusion_contact` DROP FOREIGN KEY `FK_liste_diffusion_contact_liste_diffusion`;
ALTER TABLE `newsbdi_genre` DROP FOREIGN KEY `FK_newsbdi_genre_utilisateur1`;
ALTER TABLE `poste_theme_programme` DROP FOREIGN KEY `fk_poste_th_reference_poste`;
/* ALTER TABLE `programme_categorie` DROP FOREIGN KEY `fk_programm_reference_categori`;*/
/* ALTER TABLE `programme_contact` DROP FOREIGN KEY `fk_programm_reference_contact_`;*/
ALTER TABLE `public_vise_societe_vendeuse` DROP FOREIGN KEY `FK_public_vise_societe_vendeuse_public_vise`;
ALTER TABLE `societe_acheteuse_theme_programme` DROP FOREIGN KEY `fk_societe__reference_societe_2`;
ALTER TABLE `tarif` DROP FOREIGN KEY `fk_tarif_reference_pays`;
ALTER TABLE `tvfi_equipe` DROP FOREIGN KEY `fk_tvfi_equi_reference_departem`;

--
--
--	Dropping unused tables
--

DROP TABLE IF EXISTS `achats`;
DROP TABLE IF EXISTS `ACHATS_TRADUCTION`;
DROP TABLE IF EXISTS `ACTIVITEACHATS`;
DROP TABLE IF EXISTS `ACTIVITECONTACTS`;
DROP TABLE IF EXISTS `motdepasse`;
DROP TABLE IF EXISTS `adminmanager`;
DROP TABLE IF EXISTS `adminmanagertvfi`;
DROP TABLE IF EXISTS `admininfosthemes`;
DROP TABLE IF EXISTS `adminprogpersonne`;
DROP TABLE IF EXISTS `archives`;
DROP TABLE IF EXISTS `categorie`;
DROP TABLE IF EXISTS `commentaires`;
DROP TABLE IF EXISTS `contacts`;
DROP TABLE IF EXISTS `contacts_typeprog`;
DROP TABLE IF EXISTS `historique_bouquet`;
DROP TABLE IF EXISTS `rubrique_chaine`;
DROP TABLE IF EXISTS `bo_programme_utilisateur`;
DROP TABLE IF EXISTS `fo_contact_vendeurb`;
DROP TABLE IF EXISTS `bo_contact_vendeurb`;
DROP TABLE IF EXISTS `contact_bdf`;
DROP TABLE IF EXISTS `evenement_contact_carnet_adresse`;
DROP TABLE IF EXISTS `format2`;
DROP TABLE IF EXISTS `format_societe_vendeuse`;
DROP TABLE IF EXISTS `genre_societe_vendeuse`;
DROP TABLE IF EXISTS `societe_vendeuse_theme_programme`;
DROP TABLE IF EXISTS `historique_societe`;
DROP TABLE IF EXISTS `historique_pays`;
DROP TABLE IF EXISTS `invitations`;
DROP TABLE IF EXISTS `fo_contact_vendeur_seq`;
DROP TABLE IF EXISTS `bo_contact_vendeur_seq`;
DROP TABLE IF EXISTS `document_seq`;
DROP TABLE IF EXISTS `document_theme_seq`;
DROP TABLE IF EXISTS `evenement_seq`;
DROP TABLE IF EXISTS `personne_seq`;
DROP TABLE IF EXISTS `rdv_societe_vendeuse_seq`;
DROP TABLE IF EXISTS `svg_societe_vendeuse_seq`;
DROP TABLE IF EXISTS `type1_contact_seq`;
DROP TABLE IF EXISTS `listee`;
DROP TABLE IF EXISTS `lien_export_guide`;
DROP TABLE IF EXISTS `mot_clef`;
DROP TABLE IF EXISTS `programme`;
DROP TABLE IF EXISTS `progpersonne`;
DROP TABLE IF EXISTS `programme_categorie`;
DROP TABLE IF EXISTS `programme_contact`;
DROP TABLE IF EXISTS `public_vise_societe_vendeuse`;
DROP TABLE IF EXISTS `rdv_categorie_guide_papier`;
DROP TABLE IF EXISTS `rdv_contact_vendeur`;
DROP TABLE IF EXISTS `rdv_contact_vendeur_rdv`;
DROP TABLE IF EXISTS `rdv_contact_vendeur_suivi`;
DROP TABLE IF EXISTS `rdv_photo`;
DROP TABLE IF EXISTS `rdv_programme`;
DROP TABLE IF EXISTS `rdv_programme_format`;
DROP TABLE IF EXISTS `rdv_programme_genre`;
DROP TABLE IF EXISTS `rdv_programme_personne`;
DROP TABLE IF EXISTS `rdv_programme_rdv_societe_vendeuse`;
DROP TABLE IF EXISTS `rdv_programme_support`;
DROP TABLE IF EXISTS `rdv_programme_theme_programme`;
DROP TABLE IF EXISTS `rdv_programme_type_prog`;
DROP TABLE IF EXISTS `rdv_programme_version`;
DROP TABLE IF EXISTS `rdv_societe_vendeuse`;
DROP TABLE IF EXISTS `rdv_societe_vendeuse_type2_societe`;
DROP TABLE IF EXISTS `rdv_support_envoi`;
DROP TABLE IF EXISTS `rdv_type_prog`;
DROP TABLE IF EXISTS `svg_categorie_guide_papier`;
DROP TABLE IF EXISTS `svg_contact_vendeur`;
DROP TABLE IF EXISTS `svg_contact_vendeur_rdv`;
DROP TABLE IF EXISTS `svg_photo`;
DROP TABLE IF EXISTS `svg_programme`;
DROP TABLE IF EXISTS `svg_programme_format`;
DROP TABLE IF EXISTS `svg_programme_genre`;
DROP TABLE IF EXISTS `svg_programme_personne`;
DROP TABLE IF EXISTS `svg_programme_support`;
DROP TABLE IF EXISTS `svg_programme_theme_programme`;
DROP TABLE IF EXISTS `svg_programme_type_prog`;
DROP TABLE IF EXISTS `svg_programme_version`;
DROP TABLE IF EXISTS `svg_societe_vendeuse`;
DROP TABLE IF EXISTS `svg_societe_vendeuse_type2_societe`;
DROP TABLE IF EXISTS `svg_support_envoi`;
DROP TABLE IF EXISTS `svg_type_prog`;
DROP TABLE IF EXISTS `old_ACHATS_TYPEPROG`;
DROP TABLE IF EXISTS `old_BREVES_TYPEPROG`;
DROP TABLE IF EXISTS `old_categMotCle`;
DROP TABLE IF EXISTS `old_Categorie_old`;
DROP TABLE IF EXISTS `old_categprogramme`;
DROP TABLE IF EXISTS `OLD_CDI`;
DROP TABLE IF EXISTS `old_CONTACTS_TYPEPROG`;
DROP TABLE IF EXISTS `old_liaisonbdf_categ`;
DROP TABLE IF EXISTS `old_liaisonbdf_motcle`;
DROP TABLE IF EXISTS `old_liaisonbdi`;
DROP TABLE IF EXISTS `old_MotCle`;
DROP TABLE IF EXISTS `old_progMotCle`;
DROP TABLE IF EXISTS `old_SOC_TYPEPROG`;
DROP TABLE IF EXISTS `old_TYPEPROG`;
DROP TABLE IF EXISTS `PAYS_BDI`;
DROP TABLE IF EXISTS `role`;
DROP TABLE IF EXISTS `type_utilisateur`;
DROP TABLE IF EXISTS `SOCIETES`;
DROP TABLE IF EXISTS `societe`;
DROP TABLE IF EXISTS `SOC_DIFFUSION`;
DROP TABLE IF EXISTS `SOC_TRADUCTION`;
DROP TABLE IF EXISTS `SOC_TYPEPROG`;
DROP TABLE IF EXISTS `societe_vendeuse_type_societe_vendeuse`;
DROP TABLE IF EXISTS `tableaudebord`;
DROP TABLE IF EXISTS `tmp_admincontactprogramme`;
DROP TABLE IF EXISTS `tmp_adminprogcouleur`;
DROP TABLE IF EXISTS `tmp_adminprogramme`;
DROP TABLE IF EXISTS `tmp_contact`;
DROP TABLE IF EXISTS `tmp_contactgroupe`;
DROP TABLE IF EXISTS `tmp_contactprogramme`;
DROP TABLE IF EXISTS `tmp_date_evenement`;
DROP TABLE IF EXISTS `tmp_motdepasse`;
DROP TABLE IF EXISTS `tmp_online_op`;
DROP TABLE IF EXISTS `tmp_personne`;
DROP TABLE IF EXISTS `tmp_progcouleur`;
DROP TABLE IF EXISTS `tmp_programme`;
DROP TABLE IF EXISTS `tmp_transbouq`;
DROP TABLE IF EXISTS `tmp_typesociete`;
DROP TABLE IF EXISTS `tmp_versionoriginale`;

/* other unused tables */
DROP TABLE IF EXISTS `ACHATS_TYPEPROG`;
DROP TABLE IF EXISTS `BREVES`;
DROP TABLE IF EXISTS `BREVES_TYPEPROG`;
DROP TABLE IF EXISTS `Version_originale`;
DROP TABLE IF EXISTS `fo_programme_test`;
DROP TABLE IF EXISTS `bo_programme_test`;
DROP TABLE IF EXISTS `fo_video`;
DROP TABLE IF EXISTS `bo_video`;
DROP TABLE IF EXISTS `categorie_clef`;
DROP TABLE IF EXISTS `rdv_support_annee_derniere`;
DROP TABLE IF EXISTS `svg_contact_vendeur_suivi`;
DROP TABLE IF EXISTS `svg_programme_rdv_societe_vendeuse`;



-- ===================================================================================================================
-- ===================================================================================================================
--
--  MIGRATING SHARED TABLES
--
--

-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'Format' -> 'tl_tvfi_format'
--

RENAME TABLE `format` TO `tl_tvfi_format`;
ALTER TABLE `tl_tvfi_format` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_format` CHANGE `fmt_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_format` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_format` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_format SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_format SET tstamp_creation =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'Pays' -> 'tl_tvfi_pays'
--

RENAME TABLE `pays` TO `tl_tvfi_pays`;
ALTER TABLE `tl_tvfi_pays` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_pays` CHANGE `pys_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_pays` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_pays` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_pays` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
ALTER TABLE `tl_tvfi_pays` CHANGE `pys_zne_id` `zone_id` int(11) NULL DEFAULT '0';
UPDATE tl_tvfi_pays SET tstamp_creation = UNIX_TIMESTAMP(pys_date_crea);
ALTER TABLE `tl_tvfi_pays` DROP `pys_date_crea`;
UPDATE tl_tvfi_pays SET tstamp = UNIX_TIMESTAMP(pys_date_actu_onglet1);
ALTER TABLE `tl_tvfi_pays` DROP `pys_date_actu_onglet1`;
ALTER TABLE `tl_tvfi_pays` DROP `pys_date_actu_onglet2`;
ALTER TABLE `tl_tvfi_pays` DROP `pys_date_actu_onglet3`;
ALTER TABLE `tl_tvfi_pays` DROP `pys_date_actu_onglet4`;
ALTER TABLE `tl_tvfi_pays` ADD `alias` varchar(255) NULL DEFAULT ''  AFTER `tstamp`;
/*
Alias creation and cleanup. 
TODO : review process
*/
UPDATE tl_tvfi_pays set alias = LOWER(replace(replace(replace(replace(pys_nom_fr, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_'));
UPDATE tl_tvfi_pays set alias = replace(alias, '.', '');
UPDATE tl_tvfi_pays set alias = replace(alias, ',', '');
UPDATE tl_tvfi_pays set alias = replace(alias, '(', '');
UPDATE tl_tvfi_pays set alias = replace(alias, ')', '');
UPDATE tl_tvfi_pays set alias = replace(alias, '&', '');
UPDATE tl_tvfi_pays set alias = replace(alias, '/', '');
UPDATE tl_tvfi_pays set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_pays set alias = replace(alias, 'Ž', 'e');
UPDATE tl_tvfi_pays set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_pays set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_pays set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_pays set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_pays set alias = replace(alias, '', 'u');
UPDATE tl_tvfi_pays set alias = replace(alias, '–', 'n');
UPDATE tl_tvfi_pays set alias = replace(alias, '+', '');
UPDATE tl_tvfi_pays set published = 1;
/* The comments field is now the presentation field */
ALTER TABLE `tl_tvfi_pays` CHANGE `pys_commentaire` `pys_presentation_fr` longtext NULL DEFAULT NULL;
ALTER TABLE `tl_tvfi_pays` ADD `pys_presentation_en` longtext NULL DEFAULT NULL  AFTER `pys_presentation_fr`;
ALTER TABLE `tl_tvfi_pays` MODIFY COLUMN `pys_nom_en` varchar(255) DEFAULT '' AFTER `pys_nom_fr`;
ALTER TABLE `tl_tvfi_pays` DROP `pys_nom_es`;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'Tarif' -> 'tl_tvfi_tarif'
--

RENAME TABLE `tarif` TO `tl_tvfi_tarif`;
ALTER TABLE `tl_tvfi_tarif` CHANGE `trf_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_tarif` MODIFY COLUMN `id` int(11) NOT NULL AUTO_INCREMENT FIRST;
ALTER TABLE `tl_tvfi_tarif` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_tarif` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_tarif` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
ALTER TABLE `tl_tvfi_tarif` CHANGE `trf_pys_id` `pays_id` int(11) NULL DEFAULT '0';
UPDATE tl_tvfi_tarif set published = 1;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'theme_programme' -> 'tl_tvfi_theme_programme'
--

RENAME TABLE `theme_programme` TO `tl_tvfi_theme_programme`;
/* Removing Foreign Keys */
/* ALTER TABLE `fo_programme_theme_programme` DROP FOREIGN KEY `fk_fo_progr_reference_theme_pr`;*/
ALTER TABLE `tl_tvfi_theme_programme` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_theme_programme` CHANGE `tpg_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_theme_programme` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_theme_programme` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_theme_programme SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_theme_programme SET tstamp_creation =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'genre' -> 'tl_tvfi_genre'
--

RENAME TABLE `genre` TO `tl_tvfi_genre`;
/* Removing Foreign Keys */
/* ALTER TABLE `fo_programme_genre` DROP FOREIGN KEY `fk_fo_progr_reference_genre`;*/
ALTER TABLE `tl_tvfi_genre` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_genre` CHANGE `gnr_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_genre` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_genre` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_genre SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_genre SET tstamp_creation =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'zone' -> 'tl_tvfi_zone'
--

RENAME TABLE `zone` TO `tl_tvfi_zone`;
ALTER TABLE `tl_tvfi_zone` CHANGE `zne_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_zone` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_zone` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_zone` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
UPDATE tl_tvfi_zone set published = 1;


-- ===================================================================================================================
-- ===================================================================================================================
--
--  CREATING NEW SHARED TABLES
--
--

-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'tl_tvfi_resolution'
--

CREATE TABLE `tl_tvfi_resolution` (
	`id` int(11) NOT NULL auto_increment,
	`tstamp` int(11) NOT NULL,
	`tstamp_creation` int(11) NOT NULL,
	`res_libelle_fr` varchar(255) default '',
	`res_libelle_en` varchar(255) default '',
	`res_libelle_es` varchar(255) default '',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- ===================================================================================================================
-- ===================================================================================================================
--
--  MIGRATING BDI
--
--

-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'societe_acheteuse' -> 'tl_tvfi_bdi_societe_acheteuse'
--

RENAME TABLE `societe_acheteuse` TO `tl_tvfi_bdi_societe_acheteuse`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` CHANGE `sta_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
UPDATE tl_tvfi_bdi_societe_acheteuse SET tstamp_creation = UNIX_TIMESTAMP(sta_date_crea);
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_crea`;
UPDATE tl_tvfi_bdi_societe_acheteuse SET tstamp = UNIX_TIMESTAMP(sta_date_actu_onglet1);

ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_actu_onglet1`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_actu_onglet2`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_actu_onglet3`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_actu_onglet4`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_actu_onglet5`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` DROP `sta_date_actu_onglet6`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` CHANGE `sta_pys_id` `pays_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `sta_nom_commercial` varchar(255) NULL DEFAULT ''  AFTER `sta_nom`;
UPDATE tl_tvfi_bdi_societe_acheteuse SET sta_nom_commercial = sta_nom;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `sta_adresse1` varchar(255) NULL DEFAULT ''  AFTER `sta_adresse`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `sta_adresse2` varchar(255) NULL DEFAULT ''  AFTER `sta_adresse1`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `sta_postal` varchar(255) NULL DEFAULT ''  AFTER `sta_adresse2`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `sta_ville` varchar(255) NULL DEFAULT ''  AFTER `sta_postal`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `alias` varchar(255) NULL DEFAULT ''  AFTER `tstamp`;
/*
Alias creation and cleanup. 
TODO : review process
*/
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = LOWER(replace(replace(replace(replace(sta_nom, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_'));
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '.', '');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, ',', '');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '(', '');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, ')', '');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '&', '');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '/', '');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, 'Ž', 'e');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '', 'u');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '–', 'n');
UPDATE tl_tvfi_bdi_societe_acheteuse set alias = replace(alias, '+', '');
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse` ADD `imageSRC` varchar(255) NULL DEFAULT ''  AFTER `alias`;
UPDATE tl_tvfi_bdi_societe_acheteuse set published = 1;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'societe_acheteuse_type1_societe' -> 'tl_tvfi_bdi_societe_acheteuse_to_type'
--

RENAME TABLE `societe_acheteuse_type1_societe` TO `tl_tvfi_bdi_societe_acheteuse_to_type`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` CHANGE `st1_sta_id` `societeacheteuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` CHANGE `st1_t1s_id` `typesocieteacheteuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` DROP PRIMARY KEY;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` ADD INDEX `societe` (`societeacheteuse_id`);
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_type` ADD INDEX `type` (`typesocieteacheteuse_id`);


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'type1_societe' -> 'tl_tvfi_bdi_type_societe_acheteuse'
--

RENAME TABLE `type1_societe` TO `tl_tvfi_bdi_type_societe_acheteuse`;
ALTER TABLE `tl_tvfi_bdi_type_societe_acheteuse` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_type_societe_acheteuse` CHANGE `t1s_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdi_type_societe_acheteuse` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_type_societe_acheteuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdi_type_societe_acheteuse SET tstamp =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'format_societe_acheteuse' -> 'tl_tvfi_bdi_societe_acheteuse_to_format'
--

RENAME TABLE `format_societe_acheteuse` TO `tl_tvfi_bdi_societe_acheteuse_to_format`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` CHANGE `fsa_sta_id` `societeacheteuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` CHANGE `fsa_fmt_id` `format_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` ADD INDEX `societe` (`societeacheteuse_id`);
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_format` ADD INDEX `format` (`format_id`);
UPDATE tl_tvfi_bdi_societe_acheteuse_to_format SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_bdi_societe_acheteuse_to_format SET tstamp_creation =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'societe_acheteuse_theme_programme' -> 'tl_tvfi_bdi_societe_acheteuse_to_theme_programme'
--

RENAME TABLE `societe_acheteuse_theme_programme` TO `tl_tvfi_bdi_societe_acheteuse_to_theme_programme`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` CHANGE `stp_sta_id` `societeacheteuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` CHANGE `stp_tpg_id` `theme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` ADD INDEX `societe` (`societeacheteuse_id`);
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_theme_programme` ADD INDEX `theme` (`theme_id`);
UPDATE tl_tvfi_bdi_societe_acheteuse_to_theme_programme SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_bdi_societe_acheteuse_to_theme_programme SET tstamp_creation =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'genre_societe_acheteuse' -> 'tl_tvfi_bdi_societe_acheteuse_to_genre'
--

RENAME TABLE `genre_societe_acheteuse` TO `tl_tvfi_bdi_societe_acheteuse_to_genre`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` CHANGE `gsa_sta_id` `societeacheteuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` CHANGE `gsa_gnr_id` `genre_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` ADD INDEX `societe` (`societeacheteuse_id`);
ALTER TABLE `tl_tvfi_bdi_societe_acheteuse_to_genre` ADD INDEX `genre` (`genre_id`);
UPDATE tl_tvfi_bdi_societe_acheteuse_to_genre SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_bdi_societe_acheteuse_to_genre SET tstamp_creation =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'achat' -> 'tl_tvfi_bdi_departement'
--

RENAME TABLE `achat` TO `tl_tvfi_bdi_departement`;
ALTER TABLE `tl_tvfi_bdi_departement` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_departement` CHANGE `ach_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdi_departement` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_departement` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdi_departement SET tstamp =  UNIX_TIMESTAMP(NOW());
ALTER TABLE `tl_tvfi_bdi_departement` CHANGE `ach_sta_id` `pid` int(11) NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_departement` MODIFY COLUMN `pid` int(11) DEFAULT '0' AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_departement` ADD `sorting` int(10) NOT NULL AFTER `pid`;
ALTER TABLE `tl_tvfi_bdi_departement` CHANGE `ach_pys_id` `ach_pays_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdi_departement` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'poste' -> 'tl_tvfi_bdi_poste'
--

RENAME TABLE `poste` TO `tl_tvfi_bdi_poste`;
ALTER TABLE `tl_tvfi_bdi_poste` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_poste` CHANGE `pst_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdi_poste` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_poste` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdi_poste` CHANGE `pst_ach_id` `departementsocieteacheteuse_id` int(11) NULL DEFAULT '0';


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'contact' -> 'tl_tvfi_bdi_contact'
--

RENAME TABLE `contact` TO `tl_tvfi_bdi_contact`;
ALTER TABLE `tl_tvfi_bdi_contact` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdi_contact` CHANGE `ctc_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdi_contact` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdi_contact` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdi_contact SET tstamp_creation = UNIX_TIMESTAMP(ctc_date_crea);
ALTER TABLE `tl_tvfi_bdi_contact` DROP `ctc_date_crea`;
UPDATE tl_tvfi_bdi_contact SET tstamp = UNIX_TIMESTAMP(ctc_date_actu_onglet1);
ALTER TABLE `tl_tvfi_bdi_contact` DROP `ctc_date_actu_onglet1`;
ALTER TABLE `tl_tvfi_bdi_contact` DROP `ctc_date_actu_onglet2`;
ALTER TABLE `tl_tvfi_bdi_contact` DROP `ctc_date_actu_onglet3`;
ALTER TABLE `tl_tvfi_bdi_contact` ADD `alias` varchar(255) NULL DEFAULT ''  AFTER `tstamp`;
/*
Alias creation and cleanup. 
TODO : review process
*/
UPDATE tl_tvfi_bdi_contact set alias = concat(LOWER(ctc_nom),'_', LOWER(ctc_prenom));
UPDATE tl_tvfi_bdi_contact set alias = replace(replace(replace(replace(alias, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, '.', '');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, ',', '');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, 'Ž', 'e');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, '', 'u');
UPDATE tl_tvfi_bdi_contact set alias = replace(alias, '–', 'n');
UPDATE tl_tvfi_bdi_contact set alias = concat(alias,'_', id);
ALTER TABLE `tl_tvfi_bdi_contact` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
UPDATE tl_tvfi_bdi_contact set published = 1;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'tl_tvfi_bdi_societe_acheteuse_to_resolution'
--

CREATE TABLE `tl_tvfi_bdi_societe_acheteuse_to_resolution` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`tstamp` int(11) NOT NULL,
	`tstamp_creation` int(11) NOT NULL,
	`resolution_id` int(11) NOT NULL DEFAULT '0',
	`societeacheteuse_id` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	KEY `societe` (`societeacheteuse_id`),
	KEY `resolution` (`resolution_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- ===================================================================================================================
-- ===================================================================================================================
--
--  CREATING MEMBER RELATED TABLES
--
--


-- ------------------------------------------------------------------------------------------------------------------
--
-- Table `tl_member` Migration
-- 

ALTER TABLE `tl_member` ADD `societevendeuse_id` int(11) default 0;
ALTER TABLE `tl_member` ADD `departement` varchar(50);
ALTER TABLE `tl_member` ADD `fonction` varchar(50);
ALTER TABLE `tl_member` ADD `commentaire` text NOT NULL default '';


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'newsbdi_zone' -> 'tl_tvfi_member_zone'
--

RENAME TABLE `newsbdi_zone`   TO `tl_tvfi_member_zone`;
ALTER TABLE `tl_tvfi_member_zone` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_member_zone` CHANGE `nbz_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_member_zone` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_member_zone` CHANGE `nbz_uti_id` `member_id` int(11) NOT NULL DEFAULT '0';    
ALTER TABLE `tl_tvfi_member_zone` CHANGE `nbz_zne_id` `zone_id` int(11) NOT NULL DEFAULT '0';    
UPDATE tl_tvfi_member_zone SET tstamp =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'newsbdi_pays' -> 'tl_tvfi_member_pays'
--

RENAME TABLE `newsbdi_pays`   TO `tl_tvfi_member_pays`;
ALTER TABLE `tl_tvfi_member_pays` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_member_pays` CHANGE `nbp_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_member_pays` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_member_pays` CHANGE `nbp_uti_id` `member_id` int(11) NOT NULL DEFAULT '0';    
ALTER TABLE `tl_tvfi_member_pays` CHANGE `nbp_pys_id` `pays_id` int(11) NOT NULL DEFAULT '0';    
UPDATE tl_tvfi_member_pays SET tstamp =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'newsbdi_genre' -> 'tl_tvfi_member_genre'
--

RENAME TABLE `newsbdi_genre`  TO `tl_tvfi_member_genre`;
ALTER TABLE `tl_tvfi_member_genre` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_member_genre` CHANGE `ndg_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_member_genre` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_member_genre` CHANGE `ndg_uti_id` `member_id` int(11) NOT NULL DEFAULT '0';    
ALTER TABLE `tl_tvfi_member_genre` CHANGE `ndg_gnr_id` `genre_id` int(11) NOT NULL DEFAULT '0';    
UPDATE tl_tvfi_member_genre SET tstamp =  UNIX_TIMESTAMP(NOW());


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'note_programme' -> 'tl_tvfi_member_to_programme_note'
--

RENAME TABLE `note_programme` TO `tl_tvfi_member_to_programme_note`;
ALTER TABLE `tl_tvfi_member_to_programme_note` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_member_to_programme_note` CHANGE `ntp_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_member_to_programme_note` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_member_to_programme_note` CHANGE `ntp_user_id` `member_id` int(11) NOT NULL DEFAULT '0';    
ALTER TABLE `tl_tvfi_member_to_programme_note` CHANGE `ntp_programme_id` `programme_id` int(11) NOT NULL DEFAULT '0';    
UPDATE tl_tvfi_member_to_programme_note SET tstamp =  UNIX_TIMESTAMP(NOW());


-- ===================================================================================================================
--
--  CREATING FAVORITES TABLES
--
--


-- ------------------------------------------------------------------------------------------------------------------
--
-- Table `tl_tvfi_member_favorite_societe_acheteuse`
-- 

CREATE TABLE `tl_tvfi_member_favorite_societe_acheteuse` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `tstamp_creation` int(10) unsigned NOT NULL default '0',
  `tvfimember_id` int(11) NOT NULL default '0',
  `favoritesocieteacheteuse_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ------------------------------------------------------------------------------------------------------------------
--
-- Table `tl_tvfi_member_favorite_societe_vendeuse`
-- 

CREATE TABLE `tl_tvfi_member_favorite_societe_vendeuse` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `tstamp_creation` int(10) unsigned NOT NULL default '0',
  `tvfimember_id` int(11) NOT NULL default '0',
  `fosocietevendeuse_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- ------------------------------------------------------------------------------------------------------------------
--
-- Table `tl_tvfi_member_favorite_pays`
-- 

CREATE TABLE `tl_tvfi_member_favorite_pays` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `tstamp_creation` int(10) unsigned NOT NULL default '0',
  `tvfimember_id` int(11) NOT NULL default '0',
  `favoritepays_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ===================================================================================================================
-- ===================================================================================================================
--
--  MIGRATING BDF
--
--

-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'tl_tvfi_data_version'
--

CREATE TABLE `tl_tvfi_data_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `tstamp` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `table_name` varchar(255)  DEFAULT '',
  `column_name` varchar(255)  DEFAULT '',
  `old_value` blob NULL,  
  `new_value`blob NULL,
  `status` varchar(10) DEFAULT '', 
  `updated_by` int(10) unsigned  DEFAULT '0',
  `updated_tstamp` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'fo_societe_vendeuse' -> 'tl_tvfi_bdf_fo_societe_vendeuse'
--

RENAME TABLE `fo_societe_vendeuse` TO `tl_tvfi_bdf_fo_societe_vendeuse`;                                
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` TYPE = MyISAM;                                            
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` CHANGE `fsv_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;    
#UPDATE tl_tvfi_bdf_fo_societe_vendeuse SET tstamp_creation = UNIX_TIMESTAMP(fsv_date_crea);            
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_date_crea`;                                     
#UPDATE tl_tvfi_bdf_fo_societe_vendeuse SET tstamp = UNIX_TIMESTAMP(fsv_date_actu_onglet1);             
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_date_actu_onglet1`;                             
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_date_actu_onglet2`;                             
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_date_actu_onglet3`;                             
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_date_actu_onglet4`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_maj`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_bdi`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_commentaire_fr`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_commentaire_en`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_commentaire_es`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_initiale`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_affsoc`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` DROP `fsv_affprog`;                          
UPDATE tl_tvfi_bdf_fo_societe_vendeuse SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_fo_societe_vendeuse SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse` ADD `alias` varchar(255) NULL DEFAULT ''  AFTER `tstamp`;
/*
Alias creation and cleanup. 
TODO : review process
*/
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = LOWER(replace(replace(replace(replace(fsv_nom, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_'));
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '.', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, ',', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '(', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, ')', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '&', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '/', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'Ž', 'e');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '', 'e');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'ˆ', 'a');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '', 'u');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '–', 'n');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '+', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '____', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '___', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set published = 1;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'fo_societe_vendeuse_type2_societe' -> 'tl_tvfi_bdf_fo_societe_vendeuse_to_type'
--

RENAME TABLE `fo_societe_vendeuse_type2_societe` TO `tl_tvfi_bdf_fo_societe_vendeuse_to_type`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` CHANGE `ft2_fsv_id` `fosocietevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` CHANGE `ft2_t2s_id` `typefosocietevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` ADD INDEX `societe` (`fosocietevendeuse_id`);
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_type` ADD INDEX `type` (`typefosocietevendeuse_id`);
UPDATE tl_tvfi_bdf_fo_societe_vendeuse_to_type SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_fo_societe_vendeuse_to_type SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'type2_societe' -> 'tl_tvfi_bdf_type_societe_vendeuse'
--

RENAME TABLE `type2_societe` TO `tl_tvfi_bdf_type_societe_vendeuse`;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` CHANGE `t2s_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` CHANGE `t2s_t2s_id_parent` `parent_id` int(11);
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdf_type_societe_vendeuse SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_type_societe_vendeuse SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'evenement' -> 'tl_tvfi_bdf_evenement'
--

RENAME TABLE `evenement` TO `tl_tvfi_bdf_evenement`;
ALTER TABLE `tl_tvfi_bdf_evenement` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_evenement` CHANGE `evt_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_evenement` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_evenement` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_bdf_evenement` DROP `evt_description`;    
ALTER TABLE `tl_tvfi_bdf_evenement` DROP `evt_guide_en`;    
ALTER TABLE `tl_tvfi_bdf_evenement` DROP `evt_guide_es`;    
ALTER TABLE `tl_tvfi_bdf_evenement` DROP `evt_annee`;
ALTER TABLE `tl_tvfi_bdf_evenement` DROP `evt_mois`;
ALTER TABLE `tl_tvfi_bdf_evenement` DROP `evt_detail_pays`;
ALTER TABLE `tl_tvfi_bdf_evenement` CHANGE `evt_evp_id` `evt_type_id` int(11) DEFAULT '0' AFTER `tstamp`;
UPDATE tl_tvfi_bdf_evenement SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_evenement SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'evenement_fo_societe_vendeuse' -> 'tl_tvfi_bdf_fo_societe_vendeuse_to_evenement'
--

RENAME TABLE `evenement_fo_societe_vendeuse` TO `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` CHANGE `evs_fsv_id` `societevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` CHANGE `evs_evt_id` `evenement_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` DROP PRIMARY KEY;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` ADD INDEX `societe` (`societevendeuse_id`);
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` ADD INDEX `evenement` (`evenement_id`);
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` DROP `evs_valid`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` DROP `evs_description_fr`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` DROP `evs_description_en`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement` DROP `evs_description_es`;
UPDATE tl_tvfi_bdf_fo_societe_vendeuse_to_evenement SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_fo_societe_vendeuse_to_evenement SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'evenement_pere' -> 'tl_tvfi_bdf_evenement_type'
--

RENAME TABLE `evenement_pere` TO `tl_tvfi_bdf_evenement_type`;
ALTER TABLE `tl_tvfi_bdf_evenement_type` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_evenement_type` CHANGE `evp_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_evenement_type` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_evenement_type` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_bdf_evenement_type` CHANGE `evp_tye_id` `evp_group_id` int(11) DEFAULT '0';    
UPDATE tl_tvfi_bdf_evenement_type SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_evenement_type SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'type_evenement' -> 'tl_tvfi_bdf_evenement_type_group'
--

RENAME TABLE `type_evenement` TO `tl_tvfi_bdf_evenement_type_group`;
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` CHANGE `tye_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` CHANGE `tye_nom_fr` `nom_fr` varchar(255);    
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` CHANGE `tye_nom_en` `nom_en` varchar(255);    
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` CHANGE `tye_nom_es` `nom_es` varchar(255);    
ALTER TABLE `tl_tvfi_bdf_evenement_type_group` CHANGE `tye_color` `color` varchar(10);    
UPDATE tl_tvfi_bdf_evenement_type_group SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_evenement_type_group SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    









/* BACK OFFICE SOCIETE */

RENAME TABLE `bo_societe_vendeuse` TO `tl_tvfi_bdf_bo_societe_vendeuse`;                                
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` TYPE = MyISAM;                                            
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` CHANGE `fsv_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;    
#UPDATE tl_tvfi_bdf_bo_societe_vendeuse SET tstamp_creation = UNIX_TIMESTAMP(fsv_date_crea);            
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_date_crea`;                                     
#UPDATE tl_tvfi_bdf_bo_societe_vendeuse SET tstamp = UNIX_TIMESTAMP(fsv_date_actu_onglet1);             
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_date_actu_onglet1`;                             
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_date_actu_onglet2`;                             
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_date_actu_onglet3`;                             
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_date_actu_onglet4`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_maj`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_bdi`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_commentaire_fr`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_commentaire_en`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_commentaire_es`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_initiale`;                          
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_affsoc`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse` DROP `fsv_affprog`;                          
UPDATE tl_tvfi_bdf_bo_societe_vendeuse SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_bo_societe_vendeuse SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `bo_societe_vendeuse_type2_societe` TO `tl_tvfi_bdf_bo_societe_vendeuse_to_type`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` CHANGE `ft2_fsv_id` `societevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` CHANGE `ft2_t2s_id` `typesocietevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` ADD INDEX `societe` (`societevendeuse_id`);
ALTER TABLE `tl_tvfi_bdf_bo_societe_vendeuse_to_type` ADD INDEX `type` (`typesocietevendeuse_id`);
UPDATE tl_tvfi_bdf_bo_societe_vendeuse_to_type SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_bo_societe_vendeuse_to_type SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    



RENAME TABLE `Collection` TO `tl_tvfi_bdf_collection`;
ALTER TABLE `tl_tvfi_bdf_collection` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_collection` CHANGE `col_id` `id` int(11) NOT NULL  auto_increment;    
ALTER TABLE `tl_tvfi_bdf_collection` CHANGE `col_fsv_id` `societevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_collection` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_collection` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdf_collection SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_collection SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    
 
 /*    
renamed tables 
RENAME TABLE `tl_tvfi_bdf_societe_vendeuse`  TO  `tl_tvfi_bdf_fo_societe_vendeuse`;                                
RENAME TABLE `tl_tvfi_bdf_societe_vendeuse_to_type`  TO  `tl_tvfi_bdf_fo_societe_vendeuse_to_type`;
#RENAME TABLE `tl_tvfi_bdf_type_societe_vendeuse` TO  `tl_tvfi_bdf_type_fo_societe_vendeuse`;
RENAME TABLE `tl_tvfi_bdf_societe_vendeuse_to_evenement` TO  `tl_tvfi_bdf_fo_societe_vendeuse_to_evenement`;

RENAME TABLE `tl_tvfi_programme` TO `tl_tvfi_fo_programme`;
RENAME TABLE `tl_tvfi_programme_to_genre` TO `tl_tvfi_fo_programme_to_genre`;
RENAME TABLE `tl_tvfi_programme_to_format` TO `tl_tvfi_fo_programme_to_format`;
RENAME TABLE `tl_tvfi_programme_to_societe_vendeuse` TO `tl_tvfi_fo_programme_to_fo_societe_vendeuse`;
RENAME TABLE `tl_tvfi_programme_to_support` TO `tl_tvfi_fo_programme_to_support`;
RENAME TABLE `tl_tvfi_programme_to_theme_programme` TO `tl_tvfi_fo_programme_to_theme_programme`;
RENAME TABLE `tl_tvfi_programme_to_version` TO `tl_tvfi_fo_programme_to_version`;
RENAME TABLE `tvfi_contao`.`tl_tvfi_programme_photo` TO `tvfi_contao`.`tl_tvfi_fo_programme_photo` ;

 
RENAME TABLE `tl_tvfi_bdf_type_fo_societe_vendeuse ` TO `tl_tvfi_bdf_type_societe_vendeuse`;

	


RENAME TABLE `genre_societe_vendeuse` TO `tl_tvfi_bdf_fo_societe_vendeuse_to_genre`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` CHANGE `gva_fsv_id` `fosocietevendeuse_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` CHANGE `gva_gnr_id` `genre_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` ADD INDEX `societe` (`fosocietevendeuse_id`);
ALTER TABLE `tl_tvfi_bdf_fo_societe_vendeuse_to_genre` ADD INDEX `genre` (`genre_id`);
UPDATE tl_tvfi_bdf_fo_societe_vendeuse_to_genre SET tstamp =  UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_bdf_fo_societe_vendeuse_to_genre SET tstamp_creation =  UNIX_TIMESTAMP(NOW());

*/

