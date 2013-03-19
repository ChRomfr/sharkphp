<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:13:37
         compiled from "D:\wamp\www\sharkphp\app\view\blok\blokMENU.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136425147adb11a7386-40100243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e73bcc2b96512b091afb8af1afb59b8f2c955e94' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\app\\view\\blok\\blokMENU.tpl',
      1 => 1361983593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136425147adb11a7386-40100243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Menu' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adb13399c1_56109914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adb13399c1_56109914')) {function content_5147adb13399c1_56109914($_smarty_tpl) {?><div class="blok"><div class="bloc_gauche_titre"><?php echo $_smarty_tpl->tpl_vars['Menu']->value['name'];?>
</div><div class="bloc_gauche_corp"><ul class="menu"><?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Menu']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['link']->value['enabled']==1){?><?php if ($_smarty_tpl->tpl_vars['link']->value['visible_by']=='all'){?><li><a href="<?php if ($_smarty_tpl->tpl_vars['link']->value['internal']==1){?><?php echo getLink(((string)$_smarty_tpl->tpl_vars['link']->value['link']));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['link']->value['new_page']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li><?php }elseif($_smarty_tpl->tpl_vars['link']->value['visible_by']=='member'&&$_SESSION['utilisateur']['id']!='Visiteur'){?><li><a href="<?php if ($_smarty_tpl->tpl_vars['link']->value['internal']==1){?><?php echo getLink(((string)$_smarty_tpl->tpl_vars['link']->value['link']));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['link']->value['new_page']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li><?php }elseif($_smarty_tpl->tpl_vars['link']->value['visible_by']=='pilot'&&isset($_SESSION['utilisateur']['pilot'])&&$_SESSION['utilisateur']['pilot']==1){?><li><a href="<?php if ($_smarty_tpl->tpl_vars['link']->value['internal']==1){?><?php echo getLink(((string)$_smarty_tpl->tpl_vars['link']->value['link']));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['link']->value['new_page']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li><?php }elseif($_smarty_tpl->tpl_vars['link']->value['visible_by']=='administrateurs'&&$_SESSION['utilisateur']['isAdmin']>0){?><li><a href="<?php if ($_smarty_tpl->tpl_vars['link']->value['internal']==1){?><?php echo getLink(((string)$_smarty_tpl->tpl_vars['link']->value['link']));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['link']->value['new_page']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li><?php }?><?php }?><?php } ?></ul></div></div><br/><?php }} ?>