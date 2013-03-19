<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 18:33:26
         compiled from "D:\wamp\www\sharkphp\adm\app\view\navigationadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193785148af763f0c57-16516610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86c490966ef68d2370891352094bf89562b727ab' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\adm\\app\\view\\navigationadmin.tpl',
      1 => 1362298972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193785148af763f0c57-16516610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'Helper' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148af7692f7f7_18544541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148af7692f7f7_18544541')) {function content_5148af7692f7f7_18544541($_smarty_tpl) {?><?php if ($_SESSION['utilisateur']['isAdmin']>4){?><br/><div id="menu_adm"><div class="menu_admin_immo_titre bloc_gauche_titre">Navigation</div><div class="menu_admin_immo_navigation bloc_gauche_corp"><ul class="rang1"><li><a href="<?php echo getLinkAdm("index");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Administration'];?>
</a></li><!-- ARTICLES --><li class="smenu"><a href="<?php echo getLinkAdm("article");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Article'];?>
</a><ul class="rang2"><li><a href="<?php echo getLinkAdm("article/add");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li><li><a href="<?php echo getLinkAdm("categorie?c=article");?>
" title=""}><?php echo $_smarty_tpl->tpl_vars['lang']->value['Categorie'];?>
</a><ul class="rang3"><li><a href="javascript:getFormCategorie();" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li></ul></li></ul></li><!-- BLOK --><?php if (@constant('ADM_BLOK_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><li class="smenu"><a href="<?php echo getLinkAdm("blok");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Blok'];?>
</a><ul class="rang2"><li><a href="<?php echo getLinkAdm("blok/add");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Nouveau'];?>
</a></li></ul></li><?php }?><!-- MENU --><li><a href="<?php echo getLinkAdm("menu");?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Menu'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Menu'];?>
</a></li><!-- NEWS --><li class="smenu"><a href="<?php echo getLinkAdm("news");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['News'];?>
</a><ul class="rang2"><li><a href="<?php echo getLinkAdm("news/add");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li><li><a href="<?php echo getLinkAdm("categorie?c=news");?>
" title=""}><?php echo $_smarty_tpl->tpl_vars['lang']->value['Categorie'];?>
</a><ul class="rang3"><li><a href="javascript:getFormCategorie();" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li></ul></li></ul></li><!-- PAGE --><?php if (@constant('ADM_PAGE_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><li class="smenu"><a href="<?php echo getLinkAdm("page");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Page'];?>
</a><ul class="rang2"><li><a href="<?php echo getLinkAdm("page/add");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Nouvelle'];?>
</a></li></ul></li><?php }?><!-- PREFERENCES --><?php if (@constant('USE_TABLE_CONFIG')==1){?><?php if (@constant('ADM_PREFERENCE_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><li><a href="<?php echo getLinkAdm("configuration");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Preferences'];?>
</a></li><?php }?><?php }?><li class="smenu"><a href="<?php echo getLinkAdm("download");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Telechargement'];?>
</a><ul class="rang2"><li><a href="<?php echo getLinkAdm("download/add");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li><li><a href="<?php echo getLinkAdm("categorie?c=download");?>
" title=""}><?php echo $_smarty_tpl->tpl_vars['lang']->value['Categorie'];?>
</a><ul class="rang3"><li><a href="javascript:getFormCategorie();" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li></ul></li></ul></li><?php if (@constant('ADM_USER_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><li class="smenu"><a href="<?php echo getLinkAdm("utilisateur");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Utilisateurs'];?>
</a><ul class="rang2"><li><a href="<?php echo getLinkAdm("utilisateur/add");?>
" title=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ajouter'];?>
</a></li></ul></li><?php }?><li><a href="<?php echo getLinkAdm("systeme");?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Systeme'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Systeme'];?>
</a></li><?php if (@constant('ADM_VIEWEDITOR_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><!-- Edition des vues --><li><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("viewEditor");?>
" title="Editeur de vue">Editeur de vue</a></li><?php }?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
" title="Back"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Accueil_du_site'];?>
</a></li></ul></div></div><?php }?><?php }} ?>