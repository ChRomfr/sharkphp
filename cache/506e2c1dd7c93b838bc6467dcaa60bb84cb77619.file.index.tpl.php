<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:14:01
         compiled from "D:\wamp\www\sharkphp\adm\app\view\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36945147adc93e2517-09255669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506e2c1dd7c93b838bc6467dcaa60bb84cb77619' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\adm\\app\\view\\index\\index.tpl',
      1 => 1363363217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36945147adc93e2517-09255669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Helper' => 0,
    'NbContacts' => 0,
    'config' => 0,
    'NbSites' => 0,
    'NbSitesNew' => 0,
    'NbAlerteForum' => 0,
    'NbAlerteNonTraite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adc94b8f89_68173105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adc94b8f89_68173105')) {function content_5147adc94b8f89_68173105($_smarty_tpl) {?><div style="padding-top:20px;"></div>

<div class="row-fluid">
	
	<a class="well span3 top-block" href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("contact");?>
" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-color icon-envelope-closed"></span>
		<div>Contact</div>
		<div><?php echo $_smarty_tpl->tpl_vars['NbContacts']->value;?>
</div>
	</a>

	<a class="well span3 top-block" href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("utilisateur");?>
" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-red icon-user"></span>
		<div>Utilisateurs</div>
		<div><?php echo $_smarty_tpl->tpl_vars['NbContacts']->value;?>
</div>
	</a>
	
	<?php if ($_smarty_tpl->tpl_vars['config']->value['mod_annuaire']==1){?>
	<a class="well span3 top-block" href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("annuaire");?>
" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-color icon-web"></span>
		<div>Annuaire</div>
		<div><?php echo $_smarty_tpl->tpl_vars['NbSites']->value;?>
</div>
		<span class="notification red"><?php echo $_smarty_tpl->tpl_vars['NbSitesNew']->value;?>
</span>
	</a>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['config']->value['mod_forum']==1){?>
	<a class="well span3 top-block" href="<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLinkAdm("forum");?>
" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-color icon-messages"></span>
		<div>Alerte Forum</div>
		<div><?php echo $_smarty_tpl->tpl_vars['NbAlerteForum']->value;?>
</div>
		<span class="notification red"><?php echo $_smarty_tpl->tpl_vars['NbAlerteNonTraite']->value;?>
</span>
	</a>
	<?php }?>

</div><!-- /row-fluid --><?php }} ?>