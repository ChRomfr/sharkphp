ALTER TABLE `va_article` ADD COLUMN `commentaire` INT(1) NULL DEFAULT 1  AFTER `edit_by` , ADD COLUMN `image` VARCHAR(100) NULL DEFAULT NULL  AFTER `commentaire` , ADD COLUMN `fichier` VARCHAR(100) NULL DEFAULT NULL  AFTER `image` , ADD COLUMN `fichier_for` VARCHAR(10) NULL DEFAULT 'all'  AFTER `fichier` , ADD COLUMN `visible` INT(1) NULL DEFAULT 1  AFTER `fichier_for` ;

ALTER TABLE `va_download` ADD COLUMN `vue` INT(11) NULL DEFAULT 0  AFTER `apercu` , ADD COLUMN `downloaded` INT(11) NULL DEFAULT 0  AFTER `vue` , ADD COLUMN `download_for` VARCHAR(10) NULL DEFAULT 'all'  AFTER `downloaded` , ADD COLUMN `add_on` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP  AFTER `download_for` , ADD COLUMN `add_by` INT(11) NULL  AFTER `add_on` , ADD COLUMN `visible` INT(1) NULL  AFTER `add_by` 
, ADD INDEX `download_categorie` (`categorie_id` ASC) 
, ADD INDEX `download_user` (`add_on` ASC) 
, ADD INDEX `download_visible` (`visible` ASC) ;

ALTER TABLE `va_download` CHANGE `add_on` `add_on` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `va_download` CHANGE `add_on` `add_on` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ;


 CREATE  TABLE  `va_article_commentaire` (  `id` int( 11  )  NOT  NULL  AUTO_INCREMENT ,
 `model_id` int( 11  )  NOT  NULL ,
 `auteur_id` int( 11  )  NOT  NULL ,
 `commentaire` text NOT  NULL ,
 `post_on` int( 11  )  NOT  NULL ,
 `visible` int( 1  )  NOT  NULL DEFAULT  '1',
 PRIMARY  KEY (  `id`  ) ,
 KEY  `news_id` (  `model_id`  ) ,
 KEY  `auteur_id` (  `auteur_id`  )  ) ENGINE  =  MyISAM  DEFAULT CHARSET  = latin1;

 /*-- IMMOPHP ICI -- */

 ALTER TABLE  `va_article` ADD  `video` INT( 1 ) NOT NULL DEFAULT  '0';

/*-- ADAPTER POUR IMMOPHP POUR NE PAS VIRER GOOGLE ET AGENCE --*/

--
-- SHARKPHP WWW a partir de ici
--

 ALTER TABLE `sharkphp`.`va_user` DROP COLUMN `agence_id` , DROP COLUMN `gmail_id_prv` , DROP COLUMN `gmail_password` , DROP COLUMN `gmail_adr` , DROP COLUMN `pilot` , ADD COLUMN `signature` TEXT NULL DEFAULT NULL  AFTER `telephone` , ADD COLUMN `groupe_id` INT NULL DEFAULT NULL  AFTER `signature` , ADD COLUMN `url` VARCHAR(200) NULL DEFAULT NULL  AFTER `groupe_id` , ADD COLUMN `facebook` VARCHAR(200) NULL DEFAULT NULL  AFTER `url` , ADD COLUMN `facebook_id` VARCHAR(50) NULL DEFAULT NULL  AFTER `facebook` , ADD COLUMN `tweeter` VARCHAR(200) NULL DEFAULT NULL  AFTER `facebook_id` , ADD COLUMN `date_naissance` DATE NULL DEFAULT NULL  AFTER `tweeter` , ADD COLUMN `ville` VARCHAR(150) NULL DEFAULT NULL  AFTER `date_naissance` , ADD COLUMN `pays` VARCHAR(150) NULL DEFAULT NULL  AFTER `ville` , ADD COLUMN `lang` VARCHAR(30) NULL DEFAULT NULL  AFTER `pays` , ADD COLUMN `sexe` VARCHAR(1) NULL DEFAULT NULL  AFTER `lang` , ADD COLUMN `newsletter` INT(1) NULL DEFAULT NULL  AFTER `sexe` , ADD COLUMN `mailing` INT(1) NULL DEFAULT NULL  AFTER `newsletter` , ADD COLUMN `date_edit_profil` TIMESTAMP NULL DEFAULT NULL  AFTER `mailing` , ADD COLUMN `date_changepassword` TIMESTAMP NULL DEFAULT NULL  AFTER `date_edit_profil` , ADD COLUMN `uniq_id` VARCHAR(50) NULL DEFAULT NULL  AFTER `date_changepassword` ;

CREATE  TABLE `sharkphp`.`va_mailing` (
  `id` INT NOT NULL ,
  `sujet` VARCHAR(150) NULL ,
  `message` TEXT NULL ,
  `destinataires` VARCHAR(45) NULL ,
  `auteur_id` INT NULL ,
  `date_mailing` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) );


-- 2013 03 12
CREATE TABLE `va_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) DEFAULT '0',
  `auteur_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `url` varchar(255) NOT NULL,
  `actif` int(1) DEFAULT '0',
  `valid` int(1) DEFAULT '1',
  `add_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  `apersite` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `link_categorie` (`categorie_id`),
  KEY `link_auteur` (`auteur_id`),
  KEY `link_actif` (`actif`),
  KEY `link_valid` (`valid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COMMENT='Table contenant les liens';

CREATE TABLE `va_link_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `va_annuaire_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `va_annuaire_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `email` varchar(150) NOT NULL,
  `categorie_id` int(11) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `flux_rss_1` varchar(255) DEFAULT NULL,
  `flux_rss_2` varchar(255) DEFAULT NULL,
  `backlink` varchar(255) DEFAULT NULL,
  `add_on` datetime DEFAULT NULL,
  `edit_on` datetime DEFAULT NULL,
  `keyword` text,
  `visible` int(1) DEFAULT '0',
  `status` varchar(15) DEFAULT 'new',
  `date_valid` datetime DEFAULT NULL,
  `raison_refus` text,
  `valid_by` int(11) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `allopass` varchar(255) DEFAULT NULL,
  `vue` int(11) NOT NULL DEFAULT '0',
  `visited` int(11) NOT NULL DEFAULT '0',
  `note` int(11) NOT NULL DEFAULT '0',
  `nb_vote` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `as_categorie` (`categorie_id`),
  KEY `as_visible` (`visible`),
  KEY `as_status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `va_feed_rss_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_rss_link_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `add_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `va_feed_rss_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `add_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `actif` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `frl_active` (`actif`),
  KEY `frl_categorie` (`categorie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `va_feed_rss_link_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;