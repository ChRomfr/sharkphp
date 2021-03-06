<?php if( !defined('IN_VA') ) exit;

// DONNEE DE CONNEXION A LA BASE DE DONNEES
$DB_Configuration = array(
'type'			=>	'mysqli',
'serveur' 		=> '127.0.0.1',
'utilisateur' 	=> 'root',
'password' 		=> '',
'base' 			=> 'sharkphp',
);

define('PREFIX', 'va_');		// Prefix des tables
define('IN_PRODUCTION', false);	// Active le mode developpeur
define('BREAD_SEP','&nbsp;<&nbsp;');
# On definie si les sessions sont stocke en base de donnee
define('SESSION_IN_DB',true);
# Permet l identification d un utilisateur plusieurs fois
define('SESSION_MULTI',false);
define('USE_TABLE_CONFIG',false);

$jquery_theme = 'overcast';

$config_file = array(
'format_date'				=>	"%d/%m/%Y - %H:%M",
'format_date_day'			=>	"%d/%m/%Y",
//'url'						=>	'http://127.0.0.1/',
//'url_dir'					=>	'sharkphp/',
'rewrite_url'				=>	0,
# News
'news_commentaire'			=>	0,
'news_nom'					=>	'News',	
'news_per_page'				=>	5,
'news_truncate_in_index'	=>	1,
# Utilisateur
'register_open'				=>	1,
#Article
'article_nom'				=>	'Articles',
'article_pager'				=>	0,
'article_commentaire'		=>	1,
'article_per_page'			=>	5,
# Download
'download_per_page'			=>	10,
'download_view_by'			=>	'all',
# Annuaire
'annuaire_submit_onlymember'		=>	1,	# Soumission que pour les membres
'annuaire_site_rss'					=>	0,	# Autoriser les flux rss dans la soumission
'annuaire_site_keyword'				=>	0,	# Mot clé
'annuaire_site_backlink_required'	=>	1, 	# Oblige ou non le rien de retour
'annuaire_pub_afert_first'			=>	0,	# Difni si on affiche un pub apres le 1er site
'annuaire_code_pub'					=>	'',
'annuaire_code_backlink'			=> '<a href="http://www.sharkphp.com/annuaire" title="Annuaire de lien en dur sharkphp">Sharkphp annuaire</a>',
'annuaire_min_length_resume'		=>	100,	# Nb caractere mini resume
'annuaire_min_length_description'	=>	600,	# Nb caractere mini description
'annuaire_regle_soumission'			=>	'',		# Regle de soumission a l annuaire peut etre du code HTML
# Utilisateur
'user_use_group'				=>	1, 			# Utilisateur des groupes utilisateurs
'user_activation'				=>	'auto',		# Valeur possible : auto|mail|admin
'user_id'						=>	'int',		# Valeur possible : int|uniq dans le cas uniq modifier le type dans la base de donnee en varchar(50)
'user_edit_profil'				=>	1,			# Affiche ou non le lien d edition de profil
'user_register_by_fb'			=>	0,			# Determine si on peut s enregistrer via FB
'user_avatar'					=>	1,			# Defini si le membre peut upload un avatar	
'user_delete_account'			=>	0,			# Defini si l utilisateur peut supprimer mon compte
'user_group_default_visiteur'	=>	1, 			# Groupe par defaut pour les visiteurs
'user_group_default_membre'		=>	2, 			# Groupe par defaut pour les membres
'user_group_default_admin'		=> 	4, 			# Groupe par defaut pour les administrateurs
 # General
'titre_site'					=>	'Sharkphp',
'slogan_site'					=>	'Encore un site sur le php',
'email'							=>	'email@domaine.com',
'description_site'				=>	'',
'keywords'						=>	'',
'code_stat'						=>	'',
'theme'							=>	'sharkphp',
'use_ckeditor'					=>	0,
'use_sh'						=>	1,
'fb_app_id'						=>	'', # Id application facebook
'fb_url'						=>	'',	
'twitter_url'					=>	'',	
'print_stat_page'				=>	1, # Affiche ou non les stats sur la generation de la page		
#Forums
'forum_name'					=>	'Forum',					# Nom de votre forum
'forum_description'				=>	'Description du forum',	# Description du forum qui sera mit dans la gestion du site
'forum_group_modo'				=>	3,						# Tous les membres du groupe #3 seront moderateurs global du forum
'forum_pub_after_1_message'		=>	1,
'forum_pub_code'				=>	'',
# Activation des modules pour administration
'mod_feed_rss'					=>	1,
'mod_link'						=>	1,
'mod_annuaire'					=>	1,
'mod_forum'						=>	1,
'mod_download'					=>	1,
'mod_news'						=>	1,
'mod_page'						=>	1,
'mod_article'					=>	1,
);