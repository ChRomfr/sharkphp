-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 17 Mars 2013 à 14:35
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sharkphp_sharkphp_20130317`
--

-- --------------------------------------------------------

--
-- Structure de la table `va_acl_admin`
--

CREATE TABLE IF NOT EXISTS `va_acl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(100) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `va_acl_admin`
--

INSERT INTO `va_acl_admin` (`id`, `module`, `level`) VALUES
(4, 'BLOK', 2),
(6, 'CONTACT', 2),
(7, 'DOWNLOAD', 2),
(9, 'NEWS', 2),
(10, 'PAGE', 2),
(12, 'PREFERENCE', 2),
(14, 'USER', 2),
(17, 'VIEWEDITOR', 5),
(16, 'ARTICLE', 2);

-- --------------------------------------------------------

--
-- Structure de la table `va_annuaire_categorie`
--

CREATE TABLE IF NOT EXISTS `va_annuaire_categorie` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_annuaire_site`
--

CREATE TABLE IF NOT EXISTS `va_annuaire_site` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_article`
--

CREATE TABLE IF NOT EXISTS `va_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `article` text NOT NULL,
  `author` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `creat_on` int(11) NOT NULL,
  `edit_on` int(11) DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `commentaire` int(1) DEFAULT '1',
  `image` varchar(100) DEFAULT NULL,
  `fichier` varchar(100) DEFAULT NULL,
  `fichier_for` varchar(10) DEFAULT 'all',
  `visible` int(1) DEFAULT '1',
  `video` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `author` (`author`,`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_article_categorie`
--

CREATE TABLE IF NOT EXISTS `va_article_categorie` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_article_commentaire`
--

CREATE TABLE IF NOT EXISTS `va_article_commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `post_on` int(11) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `news_id` (`model_id`),
  KEY `auteur_id` (`auteur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_blok`
--

CREATE TABLE IF NOT EXISTS `va_blok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) DEFAULT NULL,
  `fichier` varchar(100) DEFAULT NULL,
  `call_fonction` varchar(100) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `contenu` text,
  `type` varchar(100) DEFAULT NULL,
  `visible` int(1) NOT NULL DEFAULT '1',
  `ordre` int(2) NOT NULL DEFAULT '99',
  `param` int(1) NOT NULL DEFAULT '0',
  `only_index` int(1) NOT NULL DEFAULT '0',
  `visible_by` varchar(50) NOT NULL DEFAULT 'all',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_blok_available`
--

CREATE TABLE IF NOT EXISTS `va_blok_available` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(150) NOT NULL,
  `function_call` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contient les blok disponible' AUTO_INCREMENT=7 ;

--
-- Contenu de la table `va_blok_available`
--

INSERT INTO `va_blok_available` (`id`, `name`, `description`, `file`, `function_call`) VALUES
(4, 'Coup de coeur', 'Affiche une annonce coup de coeur de maniere aleatoire. Ce blok ne peut s affiche que sur les cotes du site', 'blokCoupDeCoeur.php', 'blokCoupDeCoeur'),
(3, 'Recherche', '', 'blokRechercheBien.php', 'blokRechercheBien'),
(5, 'Actualité', 'Affiche les dernieres actualité saisie sur le site', 'blokActualite.php', 'blokActualite'),
(6, 'Exclusivité', 'Affiche une annonce exclusive de maniere aleatoire. Ce blok ne peut s affiche que sur les cotes du site', 'blokExclusivite.php', 'blokExclusivite');

-- --------------------------------------------------------

--
-- Structure de la table `va_commun_cp_ville`
--

CREATE TABLE IF NOT EXISTS `va_commun_cp_ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cp` varchar(10) NOT NULL,
  `ville` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_commun_form`
--

CREATE TABLE IF NOT EXISTS `va_commun_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cf_code_form` varchar(50) NOT NULL,
  `cf_name` varchar(250) NOT NULL,
  `cf_value` text,
  `cf_type` int(2) NOT NULL DEFAULT '1',
  `cf_required` int(1) NOT NULL DEFAULT '0',
  `cf_actif` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_commun_form_data`
--

CREATE TABLE IF NOT EXISTS `va_commun_form_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cf_id` int(11) NOT NULL,
  `cfd_id` int(11) NOT NULL,
  `cfd_value` text,
  PRIMARY KEY (`id`),
  KEY `cf_id` (`cf_id`,`cfd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_commun_liste`
--

CREATE TABLE IF NOT EXISTS `va_commun_liste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(5) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `value` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`,`value`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Contient les listes communes.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_config`
--

CREATE TABLE IF NOT EXISTS `va_config` (
  `cle` varchar(200) NOT NULL,
  `valeur` text,
  PRIMARY KEY (`cle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `va_contact`
--

CREATE TABLE IF NOT EXISTS `va_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(50) NOT NULL,
  `post_on` int(15) NOT NULL,
  `lu` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_discussion`
--

CREATE TABLE IF NOT EXISTS `va_discussion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(150) NOT NULL,
  `reply` int(1) NOT NULL DEFAULT '1',
  `last_update` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_download`
--

CREATE TABLE IF NOT EXISTS `va_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `apercu` varchar(255) NOT NULL,
  `vue` int(11) DEFAULT '0',
  `downloaded` int(11) DEFAULT '0',
  `download_for` varchar(10) DEFAULT 'all',
  `add_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `add_by` int(11) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `download_categorie` (`categorie_id`),
  KEY `download_user` (`add_on`),
  KEY `download_visible` (`visible`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_download_categorie`
--

CREATE TABLE IF NOT EXISTS `va_download_categorie` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_feed_rss_item`
--

CREATE TABLE IF NOT EXISTS `va_feed_rss_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_rss_link_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `add_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_feed_rss_link`
--

CREATE TABLE IF NOT EXISTS `va_feed_rss_link` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_feed_rss_link_categorie`
--

CREATE TABLE IF NOT EXISTS `va_feed_rss_link_categorie` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum`
--

CREATE TABLE IF NOT EXISTS `va_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `ordre` int(4) DEFAULT '0',
  `niveau` int(2) DEFAULT '0',
  `admin` int(1) DEFAULT '0',
  `add_on` datetime DEFAULT NULL,
  `add_by` int(11) DEFAULT NULL,
  `edit_on` datetime DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `niveau_poll` int(2) DEFAULT '1',
  `niveau_vote` int(2) DEFAULT '1',
  `visible` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum_categorie`
--

CREATE TABLE IF NOT EXISTS `va_forum_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text,
  `image` varchar(200) DEFAULT NULL,
  `niveau` int(11) DEFAULT '0' COMMENT 'Niveau a partir du quel les membres peuvent voir la categorie 0 tout le monde 1,2,3 ... depent du niveau du membre',
  `ordre` int(4) DEFAULT '0' COMMENT 'Ordre d\\''affiche des categorie 0 categorie la plus haute dans l affichage',
  `admin` int(1) DEFAULT '0' COMMENT 'Permet de definir que cette categorie n est visible que par les administrateurs du site.',
  `add_on` datetime DEFAULT NULL COMMENT 'Date d ajout dans la base',
  `add_by` int(11) DEFAULT NULL COMMENT 'id de l utilisateur qui a ajoute la categorie',
  `edit_on` datetime DEFAULT NULL COMMENT 'Date de la derniere modifications de la categorie',
  `edit_by` int(11) DEFAULT NULL COMMENT 'Id de l utilisateur qui a modifie la categorie',
  `visible` int(1) DEFAULT '0' COMMENT 'Determine si la categorie est visible. Si a 0 celle ci ne sera pas afficher meme en fonction du niveau et admin',
  `parent_id` int(11) DEFAULT '0',
  `rght` int(5) DEFAULT NULL,
  `lft` int(5) DEFAULT NULL,
  `level` int(5) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `forumcat_visible` (`visible`),
  KEY `forumcat_ordre` (`ordre`),
  KEY `forumcat_niveau` (`niveau`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table contenant les categories du forum' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum_log_moderation`
--

CREATE TABLE IF NOT EXISTS `va_forum_log_moderation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_action` datetime NOT NULL,
  `moderateur_id` int(11) NOT NULL,
  `thread_id` int(11) DEFAULT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL,
  `action` text NOT NULL,
  `detail` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum_message`
--

CREATE TABLE IF NOT EXISTS `va_forum_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `add_on` datetime NOT NULL,
  `edit_on` datetime DEFAULT NULL,
  `edit` int(1) DEFAULT '0',
  `auteur_signature` int(1) DEFAULT '0',
  `email_notify` int(1) DEFAULT '0',
  `auteur_ip` varchar(50) NOT NULL,
  `bbcodeoff` int(1) DEFAULT '0',
  `fichier` varchar(200) DEFAULT NULL,
  `visible` int(1) DEFAULT '1',
  `valid` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum_message_alerte`
--

CREATE TABLE IF NOT EXISTS `va_forum_message_alerte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `date_alerte` datetime DEFAULT NULL,
  `traite` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum_thread`
--

CREATE TABLE IF NOT EXISTS `va_forum_thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `add_on` datetime NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `view` int(11) DEFAULT '0',
  `annonce` int(1) DEFAULT '0',
  `sondage` int(1) DEFAULT '0',
  `closed` int(1) DEFAULT '0',
  `last_auteur_id` int(11) NOT NULL COMMENT 'id auteur dernier message',
  `last_message_date` datetime NOT NULL COMMENT 'date dernier message',
  `visible` int(1) NOT NULL DEFAULT '1' COMMENT 'defini si le sujet est visible ou non',
  PRIMARY KEY (`id`),
  KEY `ft_forum_id` (`forum_id`),
  KEY `ft_auteur_id` (`auteur_id`),
  KEY `ft_visible` (`visible`),
  KEY `ft_forum_visible` (`forum_id`,`visible`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_forum_thread_user_follow`
--

CREATE TABLE IF NOT EXISTS `va_forum_thread_user_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_last_visite` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_groupe`
--

CREATE TABLE IF NOT EXISTS `va_groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `principal` int(1) DEFAULT '1',
  `systeme` int(1) NOT NULL DEFAULT '0' COMMENT 'Permet de definir si le groupe est system ou non. Un groupe systeme ne peut pas etre supprimer ',
  `ouvert` int(1) DEFAULT '0' COMMENT 'Permet de definir si le groupe est ouvert.',
  `visible` int(1) DEFAULT '1' COMMENT 'Rend le groupe visible ou non',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contient les groupes utilisateurs' AUTO_INCREMENT=6 ;

--
-- Contenu de la table `va_groupe`
--

INSERT INTO `va_groupe` (`id`, `name`, `description`, `image`, `principal`, `systeme`, `ouvert`, `visible`) VALUES
(1, 'visiteurs', 'groupe par defaut pour les visiteur', NULL, 0, 1, 0, 0),
(2, 'membres', 'groupe contenant tout les membres', NULL, 1, 1, 0, 0),
(3, 'moderateurs', 'groupe contenant les moderateurs du forums', NULL, 0, 1, 0, 0),
(4, 'administrateur', 'groupe contenant les administrateur du site', NULL, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `va_link`
--

CREATE TABLE IF NOT EXISTS `va_link` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table contenant les liens' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_link_available`
--

CREATE TABLE IF NOT EXISTS `va_link_available` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `va_link_available`
--

INSERT INTO `va_link_available` (`id`, `name`, `link`) VALUES
(1, 'Accueil', 'index/index'),
(31, 'TEST', 'article/read/8'),
(10, 'Telechagement', 'download/index'),
(11, 'Contact', 'contact/index'),
(32, 'TEST', 'article/read/9'),
(30, 'TEST', 'article/read/0'),
(25, 'Annonces', 'annonce'),
(24, 'Agence', 'agence'),
(27, 'Test', 'article/read/7'),
(26, 'dfgdfg', 'page/index/5'),
(33, 'Traiter facilement vos formulaires et générer vos requetes', 'article/read/1'),
(36, 'gfdgdfgdfg', 'article/read/4'),
(37, 'fghgfhfgh', 'article/read/5'),
(38, 'kjgjkdlfjgdfklgjldkjgl', 'article/read/6'),
(39, 'aze', 'article/read/7'),
(40, 'mustache', 'article/read/8'),
(41, 'ma page', 'page/index/1');

-- --------------------------------------------------------

--
-- Structure de la table `va_link_categorie`
--

CREATE TABLE IF NOT EXISTS `va_link_categorie` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_log_admin`
--

CREATE TABLE IF NOT EXISTS `va_log_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` text NOT NULL,
  `log_by` int(11) NOT NULL,
  `log_at` int(15) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  `link_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_mailing`
--

CREATE TABLE IF NOT EXISTS `va_mailing` (
  `id` int(11) NOT NULL,
  `sujet` varchar(150) DEFAULT NULL,
  `message` text,
  `destinataires` varchar(45) DEFAULT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `date_mailing` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `va_menu`
--

CREATE TABLE IF NOT EXISTS `va_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `creat_on` int(15) NOT NULL,
  `creat_by` int(11) NOT NULL,
  `links` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `va_menu`
--

INSERT INTO `va_menu` (`id`, `name`, `creat_on`, `creat_by`, `links`) VALUES
(3, 'gdgdfgdg', 0, 0, 'a:2:{i:0;a:6:{s:4:"name";s:10:"gfdgdfgdfg";s:4:"link";s:14:"article/read/4";s:10:"visible_by";s:3:"all";s:7:"enabled";i:1;s:8:"new_page";i:0;s:8:"internal";i:1;}i:1;a:6:{s:4:"name";s:6:"Agence";s:4:"link";s:6:"agence";s:10:"visible_by";s:6:"member";s:7:"enabled";i:0;s:8:"new_page";i:0;s:8:"internal";i:1;}}');

-- --------------------------------------------------------

--
-- Structure de la table `va_messbox`
--

CREATE TABLE IF NOT EXISTS `va_messbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destinataire_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `lu` int(1) NOT NULL DEFAULT '0',
  `post_on` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_news`
--

CREATE TABLE IF NOT EXISTS `va_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(150) DEFAULT NULL,
  `contenu` text NOT NULL,
  `contenu_suite` text,
  `post_on` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL DEFAULT '0',
  `source` varchar(200) DEFAULT NULL,
  `source_link` varchar(200) DEFAULT NULL,
  `commentaire` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_news_categorie`
--

CREATE TABLE IF NOT EXISTS `va_news_categorie` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_news_commentaire`
--

CREATE TABLE IF NOT EXISTS `va_news_commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `post_on` int(11) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `news_id` (`model_id`),
  KEY `auteur_id` (`auteur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_page`
--

CREATE TABLE IF NOT EXISTS `va_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `contenu` text NOT NULL,
  `creat_on` int(15) NOT NULL,
  `edit_on` int(15) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_sessions`
--

CREATE TABLE IF NOT EXISTS `va_sessions` (
  `session_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ip` varchar(50) CHARACTER SET latin1 NOT NULL,
  `create_on` int(11) NOT NULL,
  `last_used` int(11) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `va_template_available`
--

CREATE TABLE IF NOT EXISTS `va_template_available` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `chemin` varchar(200) NOT NULL,
  `call_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_user`
--

CREATE TABLE IF NOT EXISTS `va_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `isAdmin` int(1) NOT NULL DEFAULT '0',
  `actif` int(1) NOT NULL DEFAULT '0',
  `register_on` int(15) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `last_connexion` int(15) NOT NULL,
  `token_activation` varchar(100) DEFAULT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `prenom` varchar(200) DEFAULT NULL,
  `portable` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `signature` text,
  `groupe_id` int(11) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `facebook_id` varchar(50) DEFAULT NULL,
  `tweeter` varchar(200) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `ville` varchar(150) DEFAULT NULL,
  `pays` varchar(150) DEFAULT NULL,
  `lang` varchar(30) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `newsletter` int(1) DEFAULT NULL,
  `mailing` int(1) DEFAULT NULL,
  `date_edit_profil` timestamp NULL DEFAULT NULL,
  `date_changepassword` timestamp NULL DEFAULT NULL,
  `uniq_id` varchar(50) DEFAULT NULL,
  `niveau` int(2) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifiant` (`identifiant`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `va_user`
--

INSERT INTO `va_user` (`id`, `identifiant`, `email`, `password`, `isAdmin`, `actif`, `register_on`, `avatar`, `last_connexion`, `token_activation`, `nom`, `prenom`, `portable`, `telephone`, `signature`, `groupe_id`, `url`, `facebook`, `facebook_id`, `tweeter`, `date_naissance`, `ville`, `pays`, `lang`, `sexe`, `newsletter`, `mailing`, `date_edit_profil`, `date_changepassword`, `uniq_id`, `niveau`) VALUES
(1, 'admin', 'monemail@domaine.com', '83f32e5ec1e192be2bcc58add7f17bb94f887040', 9, 1, 1343389430, NULL, 1363430435, NULL, 'Drouche', 'Romain', NULL, NULL, 'jghjhghfghfhfghfgh\r\njghjhghfghfhfghfgh\r\njghjhghfghfhfghfgh\r\njghjhghfghfhfghfgh', NULL, '', 'http://www.facebook.fr/roumain', NULL, 'http://www.tw.fr/roumain', '2013-03-06', 'Bourges', '', NULL, 'f', 1, 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `va_user_groupe`
--

CREATE TABLE IF NOT EXISTS `va_user_groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `groupe_id` int(11) NOT NULL,
  `principal` varchar(20) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL COMMENT 'Permet de definir un role a l utilisateur au sein du groupe. admin, membre ...',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Liaison entre les utilisateurs et ses groupes' AUTO_INCREMENT=9 ;

--
-- Contenu de la table `va_user_groupe`
--

INSERT INTO `va_user_groupe` (`id`, `user_id`, `groupe_id`, `principal`, `role`) VALUES
(1, 1, 4, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(8, 16, 3, NULL, NULL),
(6, 16, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `va_user_notification`
--

CREATE TABLE IF NOT EXISTS `va_user_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_notification` datetime NOT NULL,
  `notification` text NOT NULL,
  `read` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_user_reset_password`
--

CREATE TABLE IF NOT EXISTS `va_user_reset_password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(200) NOT NULL,
  `time_on_demand` int(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `va_view_template`
--

CREATE TABLE IF NOT EXISTS `va_view_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `real_dir` varchar(150) NOT NULL,
  `tpl` text NOT NULL,
  `creat_on` int(11) NOT NULL,
  `edit_on` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `template_id` int(11) DEFAULT NULL COMMENT 'Id #template_available',
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
