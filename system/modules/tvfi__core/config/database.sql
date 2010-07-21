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


-- --------------------------------------------------------
-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `bloc_template` varchar(32) NOT NULL default '',
  `bloc_result_number` int(1) NOT NULL default '0',
  `bloc_width` int(3) NOT NULL default '0',
  `bloc_color` varchar(32) NOT NULL default '',
  `bloc_useImageHeader` char(1) NOT NULL default '',
  `bloc_headerSRC` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------
-- 
-- Table `tl_journal_log`
-- 

CREATE TABLE `tl_journal_log` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `tvfimember_id` int(10) unsigned NOT NULL default '0',
  `entity` varchar(64) NOT NULL default '',
  `item` int(10) unsigned NOT NULL default '0',
  `action` varchar(64) NOT NULL default '',
  `value` varchar(255) NOT NULL default '',
  `tl_mode` varchar(2) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------
-- 
-- Table `tl_tvfi_member_favorite_societe_acheteuse`
-- 

CREATE TABLE `tl_tvfi_member_favorite_societe_acheteuse` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `tstamp_creation` int(10) unsigned NOT NULL default '0',
  `tvfimember_id` int(11) NOT NULL default '0',
  `societeacheteuse_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM AUTO_INCREMENT=1162 DEFAULT CHARSET=utf8;


-- --------------------------------------------------------
-- 
-- Table `tl_member`
-- 

CREATE TABLE `tl_member` (
  `tstamp_notifications` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


