<?php

$chrono1 = microtime(true);
define('IN_VA', TRUE);
define('IN_ADMIN', TRUE);
define('DS', DIRECTORY_SEPARATOR); 
define('ROOT_PATH', str_replace('adm'. DS .'index.php','',__FILE__));
define('APP_PATH', ROOT_PATH . 'adm' . DS . 'app' . DS);
define('CACHE_PATH', ROOT_PATH . 'cache' . DS);
define('VIEW_PATH', ROOT_PATH . 'adm' . DS . 'app' . DS . 'view' . DS);
define('CONTROLLER_PATH', ROOT_PATH . 'adm' . DS .  'app' . DS . 'controller' . DS);
define('MODEL_PATH', ROOT_PATH . 'adm' . DS .  'app' . DS . 'model' . DS);
define('UPLOAD_PATH', ROOT_PATH . 'web' . DS . 'upload' . DS);
define('ADM_MODEL_PATH',ROOT_PATH . 'adm' . DS . 'app' . DS . 'model' . DS);


# START CODE SPECIFIQUE APP

# END CODE SPECIFIQUE APP

require_once ROOT_PATH . 'kernel' . DS . 'core'. DS . 'core.php';

# Appel du model Logs
require_once MODEL_PATH . 'log.php';

$registry->router->setPath(ROOT_PATH . 'adm' . DS . 'app' . DS . 'controller' .DS);


# START CODE SPECIFIQUE APP APRES NOYAU
# END CODE SPECIFIQUE APP

# Si utilisation non identifie ou non admin on le redirige
if( !isset($_SESSION['utilisateur']['isAdmin']) || $_SESSION['utilisateur']['isAdmin'] == 0):
	header('location:' . $config['url'] . $config['url_dir'] . 'index.php/connexion');
	exit;
endif;

$registry->constructConstAdm();

$registry->smarty->assign('config',$config);

$registry->config = $config;

$registry->addJS('jquery-last.min.js');
$registry->addJS('jquery-migrate-1.1.0.min.js');
$registry->addJS('jquery-ui-last.custom.min.js');
$registry->addCSS('smoothness/jquery-ui-last.custom.css');
$registry->addJS('fancybox/jquery.mousewheel-3.0.4.pack.js');
$registry->addJS('fancybox/jquery.fancybox-1.3.4.pack.js');
$registry->addCSS('fancybox/jquery.fancybox-1.3.4.css');
$registry->addJS('jquery.maskedinput.min.js');
$registry->addJS('mustache.js');

$Content = $registry->router->loader();

if( !$registry->HTTPRequest->getExists('nohtml') ){
	$registry->smarty->assign('in_adm', true);
	$registry->smarty->assign('app', $registry);
    $BlocGauche = $registry->smarty->fetch(VIEW_PATH . 'navigationadmin.tpl');
	$registry->smarty->assign('blokGauche', $BlocGauche);
	$registry->smarty->assign('css_add', registry::$css);
	$registry->smarty->assign('js_add', registry::$js);
	$registry->smarty->assign('content', $Content);
	echo $registry->smarty->display(ROOT_PATH . 'themes' . DS . 'dashboard' . DS . 'layout.tpl');
}else
	echo $Content;

function getLinkAdm($link){
	global $config;
	
	return $config['url'] . $config['url_dir'] .'adm/index.php/'. $link;
}

if( !$registry->HTTPRequest->getExists('nohtml') ){
echo'<div style="size:9px; margin:auto; width:1000px;">';
echo'<div>
		Page generee en : '. round( microtime(true) - $chrono1, 6) . ' sec | 
		Requete SQL : '. $db->num_queries .' | 
		Utilisation memoire : ' . round(memory_get_usage() / (1024*1024),2) .' mo
	</div>';
}

// A SUPPRIMER
if( !isset($_REQUEST['nohtml']) && IN_PRODUCTION == false):
echo '<div class="fleft">';
echo '<pre>';
print_r($config);
echo '</pre>';
echo '</div>';
echo '<div class="fleft">';
echo '<pre>';
print_r($registry->db->queries);
echo '</pre>';
echo '</div>';
echo '<div class="clear"></div>';
endif;
