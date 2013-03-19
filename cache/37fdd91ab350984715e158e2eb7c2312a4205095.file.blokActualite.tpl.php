<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:13:37
         compiled from "D:\wamp\www\sharkphp\app\view\blok\blokActualite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278355147adb13a9b95-40856209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37fdd91ab350984715e158e2eb7c2312a4205095' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\app\\view\\blok\\blokActualite.tpl',
      1 => 1361983593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278355147adb13a9b95-40856209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'News' => 0,
    'Row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adb13dfc27_97618531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adb13dfc27_97618531')) {function content_5147adb13dfc27_97618531($_smarty_tpl) {?><!-- START BLOK COUP DE COEUR --><div class="blok"><div class="bloc_gauche_titre">Actualités</div><div class="bloc_gauche_corp center"><div class="bloc_actualite" style="text-align:left;"><ul><?php  $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['News']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Row']->key => $_smarty_tpl->tpl_vars['Row']->value){
$_smarty_tpl->tpl_vars['Row']->_loop = true;
?><li><a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['Row']->value['sujet']);?>
<?php $_tmp1=ob_get_clean();?><?php echo getLink("news/view/".((string)$_smarty_tpl->tpl_vars['Row']->value['id'])."/".$_tmp1);?>
" title="<?php echo $_smarty_tpl->tpl_vars['Row']->value['sujet'];?>
"><?php echo $_smarty_tpl->tpl_vars['Row']->value['sujet'];?>
</a></li><?php } ?></ul></div></div></div><br/><!-- END BLOK COUP DE COEUR --><?php }} ?>