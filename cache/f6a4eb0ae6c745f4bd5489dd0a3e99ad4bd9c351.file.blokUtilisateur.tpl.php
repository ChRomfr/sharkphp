<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:13:37
         compiled from "D:\wamp\www\sharkphp\app\view\blok\blokUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68375147adb1025480-46393441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a4eb0ae6c745f4bd5489dd0a3e99ad4bd9c351' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\app\\view\\blok\\blokUtilisateur.tpl',
      1 => 1361983593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68375147adb1025480-46393441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adb111c2d4_05775431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adb111c2d4_05775431')) {function content_5147adb111c2d4_05775431($_smarty_tpl) {?><?php if ($_SESSION['utilisateur']['id']=='Visiteur'){?><div class="blok"><div class="bloc_gauche_titre"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Identification'];?>
</div><div class="bloc_gauche_corp"><form method="post" action="<?php echo getLink("connexion");?>
"><div class="login center"><span class="login-pseudo"><input type="text" name="login[identifiant]" id="login" required /></span><span class="login-password"><input type="password" name="login[password]" id="mdp" required /></span></div><br/><div class="center" ><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Envoyer'];?>
" class="submit" /></div><br/><div class="center"><a href="<?php echo getLink("utilisateur/register");?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['S_enregistrer'];?>
" class="submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['S_enregistrer'];?>
</a></div></form><span>&nbsp;</span></div></div><?php }else{ ?><div class="blok"><div class="bloc_gauche_titre"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Utilisateur'];?>
</div><div class="bloc_gauche_corp"><span>Hello <?php echo $_SESSION['utilisateur']['identifiant'];?>
</span>&nbsp;&nbsp;<span><a href="<?php echo getLink("connexion/logout");?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Deconnexion'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Deconnexion'];?>
</a></span><?php if (empty($_SESSION['utilisateur']['avatar'])){?><p style="margin:0px; padding:0px; text-align:center;"><br/><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
web/images/avatar/avatar_default.png" style="width:75px;" /></p><?php }?><?php if ($_SESSION['utilisateur']['isAdmin']>0){?><ul class="menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['url_dir'];?>
adm/" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Administration'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Administration'];?>
</a></li></ul><?php }?><ul class="menu"><li><a href="<?php echo getLink("utilisateur");?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Profil'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Profil'];?>
</a></li></ul></div></div><?php }?><?php }} ?>