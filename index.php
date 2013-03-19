<?php
/**
 *	IMMOPHP
 *	@author Romain DROUCHE
 *	@link http://www.immophp.fr
 */

# Debut chrono page
$chrono1 = microtime(true);

# Definition des constantes
define('IN_VA', TRUE);
define('ROOT_PATH', str_replace('index.php','',__FILE__));
define('DS', DIRECTORY_SEPARATOR); 
define('APP_PATH', ROOT_PATH . 'app' . DS);
define('CACHE_PATH', ROOT_PATH . 'cache' . DS);
define('VIEW_PATH', ROOT_PATH . 'app' . DS . 'view' . DS);
define('CONTROLLER_PATH', ROOT_PATH . 'app' . DS . 'controller' . DS);
define('MODEL_PATH', ROOT_PATH . 'app' . DS . 'model' . DS);
define('LOG_ACCESS', false);	# Permet de logge tout les requetes HTTP et de le enregistre dans un fichier

# START CODE SPECIFIQUE APP

# END CODE SPECIFIQUE APP

require_once ROOT_PATH . 'kernel' . DS . 'core'. DS . 'core.php';

$registry->constructConstAdm();
$registry->smarty->assign('config',$config->config);
//$registry->config = $config;

# Envoie du JS & CSS
$registry->addJS('jquery-last.min.js');				# Jquery
$registry->addJS('jquery-migrate-1.1.0.min.js'); 	# Jquery BC
$registry->addJS('jquery-ui-last.custom.min.js');	# Jquery ui
$registry->addCSS($jquery_theme . '/jquery-ui-last.custom.min.css');
$registry->addJS('fancybox/jquery.mousewheel-3.0.4.pack.js');
$registry->addJS('fancybox/jquery.fancybox-1.3.4.pack.js');
$registry->addCSS('fancybox/jquery.fancybox-1.3.4.css');
$registry->addJS('jquery.maskedinput.min.js');

# Difinition des chemins des applications par ordre d appel
$registry->router->setPath(array(ROOT_PATH . 'MyApp' . DS . 'controller' .DS,  ROOT_PATH . 'app' . DS . 'controller' .DS) );

# Execution de la requete et recuperation du resultat
$Content = $registry->router->loader();

$registry->smarty->assign('App',$registry);

if( !$registry->HTTPRequest->getExists('nohtml') && !$registry->HTTPRequest->getExists('print') ):

	# Stats
	$NbArticles = $registry->db->count(PREFIX . 'article');
	$NbNews = $registry->db->count(PREFIX . 'news');
	$NbDownload = $registry->db->count(PREFIX . 'download');
    
    $BlocGauche = $registry->getBlok('left');    
    
	# Affichage du resultat dans le template
	$registry->smarty->assign(array(
		'blokTop'		=>	$registry->getBlok('top'),
		'blokGauche'	=>	$BlocGauche,
		'blokFoot'		=>	$registry->getBlok('foot'),
		'css_add'		=>	registry::$css,
		'js_add'		=>	registry::$js,
		'content'		=>	$Content,
		'NbArticle'		=>	$NbArticles,
		'NbNews'		=>	$NbNews,
		'NbDownload'	=>	$NbDownload
	));
	
	# Affichage du resultat
	echo $registry->smarty->display(ROOT_PATH . 'themes' . DS . $config->config['theme'] . DS . 'layout.tpl');
	
	if( $config->config['print_stat_page'] == 1 ):
		# Affichage dy chrono et information sur execution et site en non production
		echo'<div style="size:9px; margin:auto; width:1000px;">
			Page generee en : '. round( microtime(true) - $chrono1, 6) . ' sec | 
			Requete SQL : '. $db->num_queries .' | 
			Utilisation memoire : ' . round(memory_get_usage() / (1024*1024),2) .' mo
			</div>';
	endif;

elseif( $registry->Http->getExists('print') && !$registry->Http->getExists('nohtml')):
	# Affichage specifique pour les impressions
	$registry->smarty->assign('css_add', registry::$css);
	$registry->smarty->assign('js_add', registry::$js);
	$registry->smarty->assign('content', $Content);
	echo $registry->smarty->display(ROOT_PATH . 'themes' . DS . $config['theme'] . DS . 'layout_print.tpl');	
else:
	# Affichage du resultat seul sans code HTML AJAX
	echo $Content;
endif;

//////////////////////////////////////////////////////
// FOR DVLP											//
// Affichage du mod DEBUG si site non prod			//
/////////////////////////////////////////////////////
if( !isset($_REQUEST['nohtml']) && IN_PRODUCTION == false ):
	echo"<div style=\"width:1000px; size:9px;\"><div style=\"float:left;\"><pre style=\"font-size:9px;\">"; 
	print_r($_SESSION); 
	echo"</pre></div><div style=\"float:right;\"><pre style=\"font-size:9px;\">"; 
	print_r($registry->smarty->tpls_used); 
	echo"</pre></div><div style=\"clear:both\"></div></div>";
	echo"REQUETES SQL : <pre>";
	print_r($registry->db->queries);
	echo"</pre>";
    echo"SERVER<pre>";
    print_r($_SERVER);
    echo"</pre>";
    echo"<pre>";
    print_r($registry->config);
    echo"</pre>";
endif;