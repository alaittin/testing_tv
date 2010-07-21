-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- * REMARQUE IMPORTANTE                                    *
-- *                                                        *
-- * Ne pas importer ce fichier manuellement. Utiliser      *
-- * l'outil d'installation de TYPOlight afin de faciliter  *
-- * la gestion de la base de données !                     *
-- *                                                        *
-- **********************************************************


/* TL_TVFI_PROGRAMME */

RENAME TABLE `fo_programme` TO `tl_tvfi_programme`;
ALTER TABLE `tl_tvfi_programme` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_programme` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme` DROP `fpg_date_actu_onglet1`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_date_actu_onglet2`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_date_actu_onglet3`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_date_actu_onglet4`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_date_actu_onglet5`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_ver_id_originale2`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_wmp`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_real`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_flv`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_initiale`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_videotheque`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_telephonie`;   
ALTER TABLE `tl_tvfi_programme` DROP `fpg_genre_id`;
ALTER TABLE `tl_tvfi_programme` DROP `fpg_and_more_to_come`; 
ALTER TABLE `tl_tvfi_programme` DROP `fpg_fm2_id`;
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_pbc_id` `public_vise_id` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_nat_id` `nationalite_id` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_ver_id_originale1` `version_originale_id` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_fcv_id_1` `contact_vendeur1_id` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_fcv_id_2` `contact_vendeur2_id` int(11) DEFAULT '0';

/* NOT USE BECAUSE IN SEARCH THESES IS NOT FEASIBLE 
a:4:{i:0;a:3:{i:0;s:2:"11";i:1;s:2:"12";i:2;s:2:"13";}i:1;a:3:{i:0;s:2:"21";i:1;s:2:"22";i:2;s:2:"23";}i:2;a:3:{i:0;s:2:"31";i:1;s:2:"32";i:2;s:2:"33";}i:3;a:3:{i:0;s:2:"41";i:1;s:2:"42";i:2;s:2:"43";}}

update tl_tvfi_programme set duree1 = concat("a:3:{i:0;s:",IF(length(fpg_duree1_nombre) > 0, length(fpg_duree1_nombre), 0 ),":\"",IF(length(fpg_duree1_nombre) > 0, fpg_duree1_nombre, '' ),
	"\";i:1;s:",IF(length(fpg_duree1_min) > 0, length(fpg_duree1_min), 0 ),":\"",IF(length(fpg_duree1_min) > 0, fpg_duree1_min, '' ),
	"\";i:2;s:",IF(length(fpg_duree1_sec) > 0, length(fpg_duree1_sec), 0 ),":\"",IF(length(fpg_duree1_sec) > 0, fpg_duree1_sec, '' ),"\";}");
*/

#ALTER TABLE `tl_member` CHANGE `pid` `societevendeuse_id` int(11) DEFAULT '0';

ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_col_id` `collection_id` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_lien_video` `fpg_lien_video` varchar(255);
ALTER TABLE `tl_tvfi_programme` ADD `alias` varchar(255) NULL DEFAULT ''  AFTER `tstamp`;
/*
Alias creation and cleanup. 
TODO : review process
*/
UPDATE tl_tvfi_programme set alias = LOWER(replace(replace(replace(replace(fpg_titre_fr, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_'));
UPDATE tl_tvfi_programme set alias = replace(alias, '.', '');
UPDATE tl_tvfi_programme set alias = replace(alias, ',', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '(', '');
UPDATE tl_tvfi_programme set alias = replace(alias, ')', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '&', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '/', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_programme set alias = replace(alias, 'é', 'e');
UPDATE tl_tvfi_programme set alias = replace(alias, 'è', 'e');
UPDATE tl_tvfi_programme set alias = replace(alias, 'ê', 'e');
UPDATE tl_tvfi_programme set alias = replace(alias, 'à', 'a');
UPDATE tl_tvfi_programme set alias = replace(alias, 'à', 'a');
UPDATE tl_tvfi_programme set alias = replace(alias, 'ù', 'u');
UPDATE tl_tvfi_programme set alias = replace(alias, 'ñ', 'n');
UPDATE tl_tvfi_programme set alias = replace(alias, '+', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '\'', '_');
UPDATE tl_tvfi_programme set alias = replace(alias, '____', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '___', '');
UPDATE tl_tvfi_programme set alias = replace(alias, '__', '_');


/*ALTER TABLE `tl_tvfi_programme` CHANGE `fpg_col_id` `pid` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme` MODIFY COLUMN `pid` int(11) DEFAULT '0' AFTER `id`;*/
UPDATE tl_tvfi_programme SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme SET tstamp_creation =  UNIX_TIMESTAMP(fpg_date_crea);
ALTER TABLE `tl_tvfi_programme` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
UPDATE tl_tvfi_programme set published = 1;

RENAME TABLE `fo_programme_genre` TO `tl_tvfi_programme_to_genre`;
ALTER TABLE `tl_tvfi_programme_to_genre` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_to_genre` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_programme_to_genre` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_to_genre` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme_to_genre` CHANGE `fpn_fpg_id` `programme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_to_genre` CHANGE `fpn_gnr_id` `genre_id` int(11) NOT NULL DEFAULT '0';
UPDATE tl_tvfi_programme_to_genre SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme_to_genre SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `fo_programme_format` TO `tl_tvfi_programme_to_format`;
ALTER TABLE `tl_tvfi_programme_to_format` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_to_format` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_programme_to_format` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_to_format` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme_to_format` CHANGE `fpf_fpg_id` `programme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_to_format` CHANGE `fpf_fmt_id` `format_id` int(11) NOT NULL DEFAULT '0';
UPDATE tl_tvfi_programme_to_format SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme_to_format SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `fo_programme_fo_societe_vendeuse` TO `tl_tvfi_programme_to_fo_societe_vendeuse`;
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` DROP PRIMARY KEY;
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` CHANGE `fps_fpg_id` `programme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` CHANGE `fps_fsv_id` `fosocietevendeuse_id` int(11) NOT NULL DEFAULT '0';
UPDATE tl_tvfi_programme_to_fo_societe_vendeuse SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme_to_fo_societe_vendeuse SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    
ALTER TABLE `tl_tvfi_programme_to_fo_societe_vendeuse` ADD `sorting` int(10) NOT NULL DEFAULT '0'  AFTER `tstamp`;

RENAME TABLE `support` TO `tl_tvfi_support`;
ALTER TABLE `tl_tvfi_support` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_support` CHANGE `spu_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_support` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_support` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
UPDATE tl_tvfi_support SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_support SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `fo_programme_support` TO `tl_tvfi_programme_to_support`;
ALTER TABLE `tl_tvfi_programme_to_support` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_to_support` DROP PRIMARY KEY;
ALTER TABLE `tl_tvfi_programme_to_support` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_programme_to_support` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_to_support` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme_to_support` CHANGE `fpu_fpg_id` `programme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_to_support` CHANGE `fpu_spu_id` `support_id` int(11) NOT NULL DEFAULT '0';
UPDATE tl_tvfi_programme_to_support SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme_to_support SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `fo_programme_theme_programme` TO `tl_tvfi_programme_to_theme_programme`;
ALTER TABLE `tl_tvfi_programme_to_theme_programme` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_to_theme_programme` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_programme_to_theme_programme` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_to_theme_programme` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme_to_theme_programme` CHANGE `fpt_fpg_id` `programme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_to_theme_programme` CHANGE `fpt_tpg_id` `theme_id` int(11) NOT NULL DEFAULT '0';
UPDATE tl_tvfi_programme_to_theme_programme SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme_to_theme_programme SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `version` TO `tl_tvfi_version`;
ALTER TABLE `tl_tvfi_version` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_version` CHANGE `ver_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_version` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_version` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
UPDATE tl_tvfi_version SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_version SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `fo_programme_version` TO `tl_tvfi_programme_to_version`;
ALTER TABLE `tl_tvfi_programme_to_version` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_to_version` DROP PRIMARY KEY;
ALTER TABLE `tl_tvfi_programme_to_version` ADD `id` int(11) NOT NULL  auto_increment PRIMARY KEY FIRST;
ALTER TABLE `tl_tvfi_programme_to_version` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_to_version` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_programme_to_version` CHANGE `fpv_fpg_id` `programme_id` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_to_version` CHANGE `fpv_ver_id` `version_id` int(11) NOT NULL DEFAULT '0';
UPDATE tl_tvfi_programme_to_version SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_programme_to_version SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `public_vise` TO `tl_tvfi_public_vise`;
ALTER TABLE `tl_tvfi_public_vise` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_public_vise` CHANGE `pbc_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_public_vise` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_public_vise` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
UPDATE `tl_tvfi_public_vise` SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE `tl_tvfi_public_vise` SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `nationalite` TO `tl_tvfi_nationalite`;
ALTER TABLE `tl_tvfi_nationalite` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_nationalite` CHANGE `nat_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_nationalite` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_nationalite` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
UPDATE `tl_tvfi_nationalite` SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE `tl_tvfi_nationalite` SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    

RENAME TABLE `fo_photo` TO `tl_tvfi_programme_photo`;
ALTER TABLE `tl_tvfi_programme_photo` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_programme_photo` CHANGE `fph_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_programme_photo` CHANGE `fph_fpg_id` `programme_id` int(11) DEFAULT '0';
ALTER TABLE `tl_tvfi_programme_photo` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_programme_photo` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
UPDATE `tl_tvfi_programme_photo` SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE `tl_tvfi_programme_photo` SET tstamp_creation =  UNIX_TIMESTAMP(NOW());

RENAME TABLE `Collection` TO `tl_tvfi_bdf_collection`;
ALTER TABLE `tl_tvfi_bdf_collection` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_collection` CHANGE `col_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_collection` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_collection` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_bdf_collection` CHANGE `col_fsv_id` `societeachetuse_id` int(11) DEFAULT '0';
UPDATE `tl_tvfi_bdf_collection` SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE `tl_tvfi_bdf_collection` SET tstamp_creation =  UNIX_TIMESTAMP(NOW());*/                    

 

/*
RENAME TABLE `tl_tvfi_fo_programme` TO `tl_tvfi_programme`;
RENAME TABLE `tl_tvfi_fo_programme_to_genre` TO `tl_tvfi_programme_to_genre`;
RENAME TABLE `tl_tvfi_fo_programme_to_format` TO `tl_tvfi_programme_to_format`;
RENAME TABLE `tl_tvfi_fo_programme_to_fo_societe_vendeuse` TO `tl_tvfi_programme_to_fo_societe_vendeuse`;
RENAME TABLE `tl_tvfi_fo_programme_to_support` TO `tl_tvfi_programme_to_support`;
RENAME TABLE `tl_tvfi_fo_programme_to_theme_programme` TO `tl_tvfi_programme_to_theme_programme`;
RENAME TABLE `tl_tvfi_fo_programme_to_version` TO `tl_tvfi_programme_to_version`;
RENAME TABLE `tl_tvfi_fo_programme_photo` TO `tl_tvfi_programme_photo`;
 
RENAME TABLE `tl_tvfi_bo_programme_to_bo_societe_vendeuse` TO `tl_tvfi_programme_to_bo_societe_vendeuse`;
*/