<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:13:52
         compiled from "D:\wamp\www\sharkphp\app\view\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93955147adc08d9409-07226183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ebd3e3889462eb0da41cd7b85501859e6323916' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\app\\view\\index\\index.tpl',
      1 => 1363534632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93955147adc08d9409-07226183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'News' => 0,
    'Row' => 0,
    'Helper' => 0,
    'Articles' => 0,
    'Downloads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adc09acc31_32498598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adc09acc31_32498598')) {function content_5147adc09acc31_32498598($_smarty_tpl) {?><!--
    index/index.tpl
-->
<div style="padding-top:10px;"></div><div class="container"><div class="row-fluid"><div class="span4 well"><h4>News</h4><ul class="unstyled"><?php  $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['News']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Row']->key => $_smarty_tpl->tpl_vars['Row']->value){
$_smarty_tpl->tpl_vars['Row']->_loop = true;
?><li><a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['Row']->value['sujet']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("news/view/".((string)$_smarty_tpl->tpl_vars['Row']->value['id'])."/".$_tmp1);?>
" title=""><?php echo $_smarty_tpl->tpl_vars['Row']->value['sujet'];?>
</a></li><?php } ?></ul><div style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("news");?>
" title="" class="btn">Plus</a></div><div style="clear:both"></div></div><!-- /span4 --><div class="span4 well"><h4>Tutoriaux</h4><ul class="unstyled"><?php  $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Row']->key => $_smarty_tpl->tpl_vars['Row']->value){
$_smarty_tpl->tpl_vars['Row']->_loop = true;
?><li><a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['Row']->value['title']);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("article/read/".((string)$_smarty_tpl->tpl_vars['Row']->value['id'])."/".$_tmp2);?>
" title=""><?php echo $_smarty_tpl->tpl_vars['Row']->value['title'];?>
</a></li><?php } ?></ul><div style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("article");?>
" title="" class="btn">Plus</a></div><div style="clear:both"></div></div><!-- /span4 --><div class="span4 well"><h4>Téléchargement</h4><ul class="unstyled"><?php  $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Downloads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Row']->key => $_smarty_tpl->tpl_vars['Row']->value){
$_smarty_tpl->tpl_vars['Row']->_loop = true;
?><li><a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['Row']->value['name']);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("download/detail/".((string)$_smarty_tpl->tpl_vars['Row']->value['id'])."/".$_tmp3);?>
" title=""><?php echo $_smarty_tpl->tpl_vars['Row']->value['name'];?>
</a></li><?php } ?></ul><div style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("download");?>
" title="" class="btn">Plus</a></div><div style="clear:both"></div></div><!-- /span4 --></div><!-- /row-fluid --></div><!-- /container --><div class="container"><div class="row-fluid"><div class="span8 well"><h4>Bienvenu sur votre nouveau site</h4><p>Pour modifier le contenu de cette page, editer le fichier app/view/index/index.tpl</p></div><!-- /span8 --><div class="span4 well"><p>&nbsp;</p></div><!-- /span4 --></div><!-- /row-fluid --></div><!-- /container --><?php }} ?>