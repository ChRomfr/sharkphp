<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 17:17:18
         compiled from "D:\wamp\www\sharkphp\themes\dashboard\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116765147adc96ca347-31500990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e93113377841287c11a121b7d1b741952bf41b' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\themes\\dashboard\\layout.tpl',
      1 => 1363713435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116765147adc96ca347-31500990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adc9a219e2_50326884',
  'variables' => 
  array (
    'config' => 0,
    'css_add' => 0,
    'v' => 0,
    'js_add' => 0,
    'Helper' => 0,
    'lang' => 0,
    'Bundle' => 0,
    'Row' => 0,
    'content' => 0,
    'FlashMessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adc9a219e2_50326884')) {function content_5147adc9a219e2_50326884($_smarty_tpl) {?><!DOCTYPE html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['config']->value['titre_site'];?>
 :: Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/sharkphp/images/sharkphp.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/sharkphp/images/sharkphp.ico" /><![endif]-->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/bootstrap/css/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/bootstrap/css/bootstrap-responsive.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/dashboard/css/opa-icons.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/dashboard/css/charisma-app.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/dashboard/css/uniform.default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/sharkphp/sharkphp.css" type="text/css" media="screen" />
<?php if (!empty($_smarty_tpl->tpl_vars['css_add']->value)){?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_add']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/css/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="text/css" media="screen" />
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = registry::$css_lib; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/lib/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="text/css" media="screen" />
<?php } ?>
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/js/javascript.js"></script>
<?php if (!empty($_smarty_tpl->tpl_vars['js_add']->value)){?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js_add']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/js/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"></script>
<?php } ?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = registry::$js_lib; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/lib/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar">
<!-- NAVBAR --><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><a class="btn btn-navbar" data-toggle="collapse" date-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("index");?>
" title="Retour au site">SHARKPHP</a><div class="nav-collapse"><ul class="nav"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("index");?>
"><i class="icon-home icon-white"></i></a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("news");?>
" title="News">News</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("article");?>
" title="Tutoriaux">Tutoriaux</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("download");?>
" title="Telechargement">Telechargement</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("contact");?>
" title="Contact">Contact</a></li></ul><ul class="nav pull-right"><?php if ($_SESSION['utilisateur']['id']!='Visiteur'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("utilisateur");?>
" title=""><i class="icon-user icon-white"></i></a><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("connexion/logout");?>
" title=""><i class="icon-off icon-white"></i></a><?php }?><?php if ($_SESSION['utilisateur']['isAdmin']>0){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
adm/" title="Administration"><i class="icon-wrench icon-white"></i></a></li><?php }?></ul></div></div></div></div><!-- /navbar --><!-- Header --><div id="header" style="padding-top:50px;"></div><!-- Conteneur centrale --><div class="container-fluid"><div class="row-fluid"><div class="span2 main-menu-span" style="padding-top:20px;"><div class="well nav-collapse sidebar-nav"><ul class="nav nav-tabs nav-stacked main-menu"><li class="nav-header hidden-tablet">Main</li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("index");?>
" title="">Dashboard</a></li><?php if ($_smarty_tpl->tpl_vars['config']->value['mod_annuaire']==1){?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Annuaire&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("annuaire");?>
">Annuaire</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("categorie?c=annuaire");?>
" title=""}>Categorie</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("annuaire/setting");?>
" title=""}>Configuration</a></li></ul></li><?php }?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Article&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("article");?>
">Article</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("categorie?c=article");?>
" title=""}>Categorie</a></li></ul></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("blok");?>
" title="">Blok</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("contact");?>
" title="Contact">Contact</a></li><?php if ($_smarty_tpl->tpl_vars['config']->value['mod_forum']==1){?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Forums&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("forum");?>
" title="">Forums</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("forum/alertes");?>
" title="">Alertes</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("forum/logs");?>
" title="">Logs</a></li></ul></li><?php }?><?php if ($_smarty_tpl->tpl_vars['config']->value['mod_feed_rss']==1){?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Flux&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("feedRss");?>
" title="">Flux RSS</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("categorie?c=feed_rss_link");?>
" title=""}>Categorie</a></li></ul></li><?php }?><?php if ($_smarty_tpl->tpl_vars['config']->value['mod_link']==1){?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Liens&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("link");?>
" title="">Liens</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("categorie?c=link");?>
" title=""}>Categorie</a></li></ul></li><?php }?><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("menu");?>
" title="">Menu</a></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">News&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("news");?>
" title="">News</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("categorie?c=news");?>
" title=""}>Categorie</a></li></ul></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("page");?>
" title="">Page</a></li><!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("configuration");?>
" title="">Préférences</a></li>--><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Téléchargements&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("download");?>
" title="">Téléchargements</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("categorie?c=download");?>
" title=""}>Categorie</a></li></ul></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Utilisateurs'];?>
&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("utilisateur");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Utilisateurs'];?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("utilisateur/groupe");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Groupes'];?>
</a></li></ul></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Système&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("systeme");?>
" title="">Système</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("filemanager");?>
" title="">File manager</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("viewEditor");?>
" title="">Editeur de vue</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("systeme/errorPhp");?>
" title="">Erreurs PHP</a></li></ul></li><!-- Traitements des bundles --><?php if (isset($_smarty_tpl->tpl_vars['Bundle']->value)&&is_array($_smarty_tpl->tpl_vars['Bundle']->value)){?><?php  $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bundle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Row']->key => $_smarty_tpl->tpl_vars['Row']->value){
$_smarty_tpl->tpl_vars['Row']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['Row']->value['menu_admin']==1){?><?php echo $_smarty_tpl->tpl_vars['Row']->value['menu_admin_code'];?>
<?php }?><?php } ?><?php }?></ul><!-- /nav --></div><!-- /well --></div><!-- /span2 --><div class="span10"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><!-- /span10 --></div><!-- /row-fluid --></div><!-- /container-fluid --><!-- Footer --><footer class="footer_site"><div class="container"><div class="row-fluid"><div class="span8"></div><!-- /span8 --><div class="span4"></div><!-- /span4 --></div><!-- /row-fluid--></div><!-- /container --><div class="container"><div class="row-fluid"><div class="span8"></div><div class="span4"></div></div><!-- /row-fluid --><hr/><div class="fleft"></div><div class="fright">Réaliser avec <a href="http://www.sharkphp.com" title="Another CMS/FRAMEWORK">Sharkphp <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/images/sharkphp.png" alt="" style="width:20px;" /></a></div><div class="clear"></div></div><!-- /container --></footer>
<script type="text/javascript">
<!--
$(document).ready(function() {
	$("a.fbimage").fancybox();
});
<?php if (isset($_smarty_tpl->tpl_vars['FlashMessage']->value)&&!empty($_smarty_tpl->tpl_vars['FlashMessage']->value)){?>
$(".breadcrumb").after('<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $_smarty_tpl->tpl_vars['FlashMessage']->value;?>
</div>');
<?php }?>
//-->
</script>
</body>
</html><?php }} ?>