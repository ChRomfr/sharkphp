<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:13:37
         compiled from "D:\wamp\www\sharkphp\themes\sharkphp\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301685147adb141e763-34749494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cca3eb4c874c549f12059a999f5bfc56746b3133' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\themes\\sharkphp\\layout.tpl',
      1 => 1363446485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301685147adb141e763-34749494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'ctitre' => 0,
    'Description_this_page' => 0,
    'css_add' => 0,
    'v' => 0,
    'js_add' => 0,
    'FlashMessage' => 0,
    'content' => 0,
    'Helper' => 0,
    'NbNews' => 0,
    'NbArticle' => 0,
    'NbDownload' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adb1614345_62708422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adb1614345_62708422')) {function content_5147adb1614345_62708422($_smarty_tpl) {?><!DOCTYPE html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['config']->value['titre_site'];?>
<?php if (isset($_smarty_tpl->tpl_vars['ctitre']->value)){?> :: <?php echo $_smarty_tpl->tpl_vars['ctitre']->value;?>
<?php }else{ ?> :: <?php echo $_smarty_tpl->tpl_vars['config']->value['slogan_site'];?>
<?php }?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['config']->value['titre_site'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['ctitre']->value)){?> :: <?php echo $_smarty_tpl->tpl_vars['ctitre']->value;?>
<?php }?>" />
<meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['Description_this_page']->value)){?><?php echo $_smarty_tpl->tpl_vars['Description_this_page']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['config']->value['description_site'];?>
<?php }?>" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['config']->value['keywords'];?>
" />	
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
themes/sharkphp/css/opa-icons.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
themes/sharkphp/sharkphp.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="News" href="<?php echo getLink("xml/fluxRSSNews?nohtml");?>
" />
<link rel="alternate" type="application/rss+xml" title="Tutoriaux" href="<?php echo getLink("xml/fluxRSSArticle?nohtml");?>
" />
<link rel="alternate" type="application/rss+xml" title="Telechargement" href="<?php echo getLink("xml/fluxRSSDownload?nohtml");?>
" />
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
<?php }?>
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
<!-- NAVBAR --><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><a class="btn btn-navbar" data-toggle="collapse" date-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a class="brand" href="<?php echo getLink("index");?>
" title="Sharkphp CMS"><img style="height:25px;" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/images/sharkphp_white.png" alt="Sharkphp" /></a><div class="nav-collapse"><ul class="nav"><li><a href="<?php echo getLink("index");?>
"><i class="icon-home icon-white"></i></a></li><li><a href="<?php echo getLink("article");?>
" title="Tutoriaux">Tutoriaux</a></li><li><a href="<?php echo getLink("download");?>
" title="Telechargement">Telechargement</a></li><li><a href="<?php echo getLink("contact");?>
" title="Contact">Contact</a></li></ul><ul class="nav pull-right"><?php if ($_SESSION['utilisateur']['id']!='Visiteur'){?><li><a href="<?php echo getLink("utilisateur");?>
" title=""><i class="icon-user icon-white"></i></a><li><a href="<?php echo getLink("connexion/logout");?>
" title=""><i class="icon-off icon-white"></i></a><?php }?><?php if ($_SESSION['utilisateur']['isAdmin']>0){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
adm/" title="Administration"><i class="icon-wrench icon-white"></i></a></li><?php }?></ul><?php if ($_SESSION['utilisateur']['id']=='Visiteur'){?><form class="navbar-form pull-right" method="post" action="<?php echo getLink("connexion");?>
"><div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input type="text" class="span2" placeholder="Login" name="login[identifiant]" required /></div><div class="input-prepend input-append"><span class="add-on"><i class="icon-keys"></i></span><input type="password" class="span2" placeholder="Password" name="login[password]" required /><button type="submit" class="btn"><i class="icon-ok"></i></button></div></form><?php }?></div></div></div></div><!-- /navbar --><!-- Header --><div id="header" style="padding-top:40px;"></div><!-- Contenu --><div class="container"><div class="row-fluid"><div class="span12"><?php if (isset($_smarty_tpl->tpl_vars['FlashMessage']->value)&&!empty($_smarty_tpl->tpl_vars['FlashMessage']->value)){?><div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $_smarty_tpl->tpl_vars['FlashMessage']->value;?>
</div><?php }?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div></div></div><!-- Footer --><footer class="footer_site"><div class="container"><div class="row-fluid"><div class="span8"></div><!-- /span8 --><div class="span4"></div><!-- /span4 --></div><!-- /row-fluid--></div><!-- /container --><div class="container"><div class="row-fluid"><div class="span4"><!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-513c76ce59b7004a"></script><!-- AddThis Button END --></div><div class="span4"><?php if ($_SESSION['utilisateur']['id']=='Visiteur'){?><div style="padding-bottom:2px;"><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("utilisateur/register");?>
" title="" class="btn btn-small btn-info"><i class="icon-user icon-white"></i>&nbsp;Rejoingez-nous</a></div><?php }?></div><div class="span4"><!-- Form recherche --><form class="form-search" action="http://www.sharkphp.com/index.php/page/index/3" id="cse-search-box"><div class="input-append"><input type="text" name="q" class="span2 search-query" style="width:140px;" placeholder="Recherche"><input type="hidden" name="cx" value="partner-pub-1710313297381782:6041762284" /><input type="hidden" name="cof" value="FORID:10" /><input type="hidden" name="ie" value="UTF-8" /><button type="submit" name="sa" class="btn"><i class="icon-search"></i></button></div></form><!-- Stats --><ul class="unstyled"><li>Actualité : <?php echo $_smarty_tpl->tpl_vars['NbNews']->value;?>
</li><li>Tutoriaux : <?php echo $_smarty_tpl->tpl_vars['NbArticle']->value;?>
</li><li>Téléchargement : <?php echo $_smarty_tpl->tpl_vars['NbDownload']->value;?>
</li></ul></div><!-- /span4 --></div><!-- /row-fluid --><hr/><div class="fleft"><a href="<?php echo getLink("xml/fluxRSSNews?nohtml");?>
" title=""><span class="icon icon-orange icon-rssfeed"/></a>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['fb_url'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['fb_url'];?>
" target="_blank" title=""><i class="icon icon-facebook-sign"></i></a>&nbsp;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['config']->value['twitter_url'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['twitter_url'];?>
" target="_blank" title=""><i class="icon icon-twitter-sign"></i></a>&nbsp;<?php }?></div><div class="fright">Réaliser avec <a href="http://www.sharkphp.com" title="Another CMS/FRAMEWORK">Sharkphp <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/images/sharkphp.png" alt="" style="width:20px;" /></a></div><div class="clear"></div></div><!-- /container --></footer>
<?php echo $_smarty_tpl->tpl_vars['config']->value['code_stat'];?>

<script type="text/javascript">
<!--
$(document).ready(function() {
	$("a.fbimage").fancybox();
});

$(function (){
   $('a').tooltip();
});
//-->
</script>
</body>
</html><?php }} ?>