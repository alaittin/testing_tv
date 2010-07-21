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
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = LOWER(replace(replace(replace(replace(fsv_nom, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_'));
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '.', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, ',', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '(', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, ')', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '&', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '/', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'é', 'e');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'è', 'e');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'ê', 'e');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'à', 'a');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'à', 'a');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'ù', 'u');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, 'ñ', 'n');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '+', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '____', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '___', '');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdf_fo_societe_vendeuse set published = 1;




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


RENAME TABLE `type2_societe` TO `tl_tvfi_bdf_type_societe_vendeuse`;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` CHANGE `t2s_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` CHANGE `t2s_t2s_id_parent` `parent_id` int(11);
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_type_societe_vendeuse` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdf_type_societe_vendeuse SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_type_societe_vendeuse SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


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


RENAME TABLE `evenement_pere` TO `tl_tvfi_bdf_evenement_type`;
ALTER TABLE `tl_tvfi_bdf_evenement_type` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_evenement_type` CHANGE `evp_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_evenement_type` ADD `tstamp_creation` int(11) NOT NULL AFTER `id`;        
ALTER TABLE `tl_tvfi_bdf_evenement_type` ADD `tstamp` int(11) NOT NULL AFTER `tstamp_creation`;
ALTER TABLE `tl_tvfi_bdf_evenement_type` CHANGE `evp_tye_id` `evp_group_id` int(11) DEFAULT '0';    
UPDATE tl_tvfi_bdf_evenement_type SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_evenement_type SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    


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


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'fo_contact_vendeur' -> 'tl_tvfi_bdf_contact'
--

RENAME TABLE `fo_contact_vendeur` TO `tl_tvfi_bdf_contact`;
ALTER TABLE `tl_tvfi_bdf_contact` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_contact` CHANGE `fcv_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_contact` CHANGE `fcv_fsv_id` `fosocietevendeuse_id` int(11) NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_contact` CHANGE `fcv_dvr_id` `departementsocietevendeuse_id` int(11) NULL DEFAULT '0';
ALTER TABLE `tl_tvfi_bdf_contact` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_contact` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
UPDATE tl_tvfi_bdf_contact SET tstamp_creation = UNIX_TIMESTAMP(NOW());
UPDATE tl_tvfi_bdf_contact SET tstamp = UNIX_TIMESTAMP(NOW());
ALTER TABLE `tl_tvfi_bdf_contact` ADD `alias` varchar(255) NULL DEFAULT ''  AFTER `tstamp`;
/*
Alias creation and cleanup. 
TODO : review process
*/
UPDATE tl_tvfi_bdf_contact set alias = concat(LOWER(fcv_nom),'_', LOWER(fcv_prenom));
UPDATE tl_tvfi_bdf_contact set alias = replace(replace(replace(replace(alias, '.', ''), ' ', '_'), '_-_', '_'), '_/_', '_');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, '.', '');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, ',', '');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, '__', '_');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'é', 'e');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'è', 'e');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'ê', 'e');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'à', 'a');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'à', 'a');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'ù', 'u');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, 'ñ', 'n');
UPDATE tl_tvfi_bdf_contact set alias = concat(alias,'_', id);
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, '____', '');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, '___', '');
UPDATE tl_tvfi_bdf_contact set alias = replace(alias, '__', '_');
ALTER TABLE `tl_tvfi_bdf_contact` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
UPDATE tl_tvfi_bdf_contact set published = 1;


-- ------------------------------------------------------------------------------------------------------------------
--
--	Table 'departement_vendeur' -> 'tl_tvfi_bdf_departement'
--

RENAME TABLE `departement_vendeur` TO `tl_tvfi_bdf_departement`;
ALTER TABLE `tl_tvfi_bdf_departement` TYPE = MyISAM;
ALTER TABLE `tl_tvfi_bdf_departement` CHANGE `dvr_id` `id` int(11) NOT NULL  auto_increment;
ALTER TABLE `tl_tvfi_bdf_departement` ADD `tstamp` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_departement` ADD `tstamp_creation` int(11) NOT NULL AFTER `tstamp`;
ALTER TABLE `tl_tvfi_bdf_departement` ADD `pid` int(11) NOT NULL AFTER `id`;
ALTER TABLE `tl_tvfi_bdf_departement` ADD `sorting` int(10) NOT NULL AFTER `pid`;
UPDATE tl_tvfi_bdf_departement SET tstamp =  UNIX_TIMESTAMP(NOW());                             
UPDATE tl_tvfi_bdf_departement SET tstamp_creation =  UNIX_TIMESTAMP(NOW());                    
ALTER TABLE `tl_tvfi_bdf_departement` ADD `published` char(1) NULL DEFAULT NULL  AFTER `tstamp`;
UPDATE tl_tvfi_bdf_departement set published = 1;





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

*/


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

