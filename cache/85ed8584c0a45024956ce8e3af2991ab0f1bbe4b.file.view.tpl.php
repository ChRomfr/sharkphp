<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 00:13:36
         compiled from "D:\wamp\www\sharkphp\kernel\base_app\view\news\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222525147adb0b078a1-36780540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ed8584c0a45024956ce8e3af2991ab0f1bbe4b' => 
    array (
      0 => 'D:\\wamp\\www\\sharkphp\\kernel\\base_app\\view\\news\\view.tpl',
      1 => 1361989430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222525147adb0b078a1-36780540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lang' => 0,
    'new' => 0,
    'Helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147adb0de5094_00455804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147adb0de5094_00455804')) {function content_5147adb0de5094_00455804($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\sharkphp\\kernel\\lib\\smarty\\plugins\\modifier.date_format.php';
?><!--
                                     _,,                                   ,dW 
                                   ,iSMP                                  JIl; 
                                  sPT1Y'                                 JWS:' 
                                 sIl:l1                                 fWIl?  
                                dIi:Il;                                fW1"    
                               dIi:l:I'                               fWI:     
                              dIli:l:I;                              fWI:      
                            .dIli:I:S:S                     .       fWIl`      
                          ,sWSSIIIiISIIS w,_             .sMW     ,MWIl;       
                     _.,sWWW*"'*" , SWW' MWWMm mu,,._  .iSYISb, ,MM*SI!:       
                 _,s YMMWW'',sd,'MM WMMi "*MW* WWWMWMb MMS WWP`,MW' S1!`       
            _,os,'MMi YW' m,'WW; WWb`SWM Im,,  SIS ISW SISIP*  WSi  II!.       
         .osSMWMW,'WSi ',MMP SSb WSW ISII`SYYi III !Il lIi,ui:,*1:li:l1!       
      ,sSMMWWWSSSS,'SWbdWW*  *YSbiSS:'IlI 7llI il1: l! 'l:+'+l; `''+1i:1i      
   ,sYSMWMWY**"""'` 'WWSSIIiu,'**Y11';IIIb ?!li ?l:i,         `      `'l!:     
  sPITMWMW'`.M.wdWWb,'YIi `YT" ,u!1",ISIWWm,'+?+ `'+Ili                `'l:,   
  YIi1lTYfPSkyLinedI!i`I!" .,:!1"',iSWWMMMMMmm,                                
    "T1l1lI**"'`.2006? ',o?*'``  ```""**YSWMMMWMm,                             
         "*:iil1I!I!"` '                 ``"*YMMWWM,                           
               ii!                             '*YMWM,                         
               I'                                  "YM                         
 -->
<?php if (!isset($_smarty_tpl->tpl_vars['config']->value['bread'])||$_smarty_tpl->tpl_vars['config']->value['bread']){?><ul class="breadcrumb"><li><a href="<?php echo getLink("index");?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Accueil'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Accueil'];?>
</a><span class="divider">/</span></li><li><a href="<?php echo getLink("news");?>
" title="<?php echo $_smarty_tpl->tpl_vars['config']->value['news_nom'];?>
"><?php echo $_smarty_tpl->tpl_vars['config']->value['news_nom'];?>
</a><span class="divider">/</span></li><li><?php echo $_smarty_tpl->tpl_vars['new']->value['sujet'];?>
</li></ul><?php }?><div class="well"><h3><?php echo $_smarty_tpl->tpl_vars['new']->value['sujet'];?>
</h3><div><?php echo $_smarty_tpl->tpl_vars['new']->value['contenu'];?>
</div><hr/><div><div class="fleft"><i class="icon-user"></i>&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['new']->value['identifiant'];?>
&nbsp;&nbsp;<i class="icon-calendar"></i>&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['post_on'],$_smarty_tpl->tpl_vars['config']->value['format_date']);?>
</div><div class="fright"><?php if ($_smarty_tpl->tpl_vars['new']->value['source']!=''&&$_smarty_tpl->tpl_vars['new']->value['source_link']!=''){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['Source'];?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['source_link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['new']->value['source'];?>
</a> - <?php }?><?php if (!empty($_smarty_tpl->tpl_vars['new']->value['categorie'])){?><i class="icon-tag"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['new']->value['categorie'];?>
<?php }?></div><div class="clear"></div></div></div><!-- /well --><div class="clear"></div><hr/><?php if ($_smarty_tpl->tpl_vars['config']->value['news_commentaire']==1){?><table class="table table-striped table-condensed" id="tableauCommentaires"><thead><th>Membre</th><th>Discution</th></thead><tbody><tr><td></td><?php if ($_smarty_tpl->tpl_vars['new']->value['commentaire']==1&&@constant('ADM_NEWS_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><td class="right"><a href="javascript:lockCommentaire(<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
)" class="btn">Lock</a></td><?php }elseif($_smarty_tpl->tpl_vars['new']->value['commentaire']==0&&@constant('ADM_NEWS_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><td class="right"><a href="javascript:unlockCommentaire(<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
)" class="btn">Unlock</a></td><?php }?></tr></tbody></table><!-- Formulaire nouveau commentaire --><?php if ($_SESSION['utilisateur']['id']!='Visiteur'&&$_smarty_tpl->tpl_vars['new']->value['commentaire']==1){?><form method="post" action="<?php echo getLink("commentaire/post");?>
" class="form-horizontal well"><div class="control-group"><label class="control-label" for="commentaire"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Commentaire'];?>
 :</label><div class="controls"><textarea name="com[commentaire]" id="commentaire" cols="50" rows="5" class="input-xxlarge"></textarea></div></div><div><input type="hidden" name="com[auteur_id]" value="<?php echo $_SESSION['utilisateur']['id'];?>
" /><input type="hidden" name="com[model_id]" value="<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
" /><input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>
" /><input type="hidden" name="com_model" value="news" /><button type="submit" name="send" class="btn"><i class="icon-comment"></i><?php echo $_smarty_tpl->tpl_vars['lang']->value['Envoyer'];?>
</button></div></form><?php }?><?php }else{ ?><?php if (@constant('ADM_NEWS_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?><div class="alert alert-block"><h4>Warning!</h4>Les commentaires pour les news ont ete desactives</div><?php }?><?php }?>
<script>
<!--
(function($){
$.get(
    '<?php echo $_smarty_tpl->tpl_vars['Helper']->value->getLink("news/getCommentaires/".((string)$_smarty_tpl->tpl_vars['new']->value['id']));?>
', 
    {nohtml:'nohtml'},
    function(data){ 
        var tplCommentaire = '<tr><td>{{identifiant}}<br/><small>{{date_commentaire}}</small></td><td><p>{{commentaire}}</p>{{#administrateur}}<div class="fright"><a href="javascript:deleteCommentaire({{id}});" title=""><i class="icon-trash"></i></a></div><div class="clear"></div>{{/administrateur}}</td></tr>';

        for( var i in data ){      	
        	$('#tableauCommentaires').prepend( Mustache.render(tplCommentaire, data[i]) );
        }
	;
    },'json'); 
})(jQuery);

function deleteCommentaire(id){
	if( confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['Confirm_suppression_commentaire'];?>
 ?') ){
		window.location.href='<?php echo getLink("commentaire/delete/'+ id +'?com_model=news");?>
';
	}
}
<?php if (isset($_SESSION['utilisateur']['isAdmin'])&&@constant('ADM_NEWS_LEVEL')<$_SESSION['utilisateur']['isAdmin']){?>
function lockCommentaire(id){
	if( confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['Confirm_lock_commentaire'];?>
 ?') ){
		window.location.href='<?php echo getLink("news/lockCommentaire/");?>
' + id;
	}
}

function unlockCommentaire(id){
	if( confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['Confirm_unlock_commentaire'];?>
 ?') ){
		window.location.href='<?php echo getLink("news/unlockCommentaire/");?>
' + id;
	}
}
<?php }?>
//-->
</script><?php }} ?>