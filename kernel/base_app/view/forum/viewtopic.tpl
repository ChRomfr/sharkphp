{strip}
<ul class="breadcrumb">
	<li><a href="{$Helper->getLink("index")}" title="{$lang.Accueil}">{$lang.Accueil}</a><span class="divider">/</span></li>
	<li><a href="{$Helper->getLink("forum")}" title="Forums">Forums</a><span class="divider">/</span></li>
	<li><a href="{$Helper->getLink("forum/viewforum/{$Thread.forum_id}")}" title="">{$Forum.name}</a><span class="divider">/</span></li>
	<li>{$Thread.titre}</li>
</ul>

<div class="well">
	<div class="pagination">{$Pagination->render()}</div>
	<table class="table table-hover table-striped table-condensed">
		{foreach $Messages as $Message name=loopmessage}
		<tr>
			<td>
				<!-- Auteur -->
				<span>{$Message.auteur}</span>
			</td>
			<td>
				<!-- Message -->
				<a name="message-{$Message.id}"><span class="muted"><small>Le {$Message.add_on}</small></span></a>
				<p>{BBCode2Html($Message.message)}</span>
			</td>
			{if $config.forum_pub_after_1_message == 1 && !empty($config.forum_pub_code) && $smarty.foreach.loopmessage.iteration == 1}
			<tr>
				<td colspan="2" style="text-align: center">{$config.forum_pub_code}</td>
			</tr>
			{/if}
		{/foreach}
	</table>

	{if $smarty.session.utilisateur.id != 'Visiteur'}
	<hr/>
	<form method="post" action="{$Helper->getLink("forum/addReply/{$Thread.id}")}" id="formReply" class="form-horizontal">
		<div class="control-group">
			<label class="control-label">Réponse :</label>
			<div class="controls">
				<textarea name="reply[message]" id="message" class="input-xxlarge" rows="5"></textarea>
			</div>
		</div>
		<div class="form-actions">
			<button class="btn btn-primary">Répondre</button>
		</div>
	</form>
	{/if}
	<div class="pagination">{$Pagination->render()}</div>
	{if $smarty.session.utilisateur.isAdmin > 0}
	<hr/>
	<div class="pull-right">
		{if $Thread.closed == 0}
		<a href="javascript:lockSujet({$Thread.id});" title="Fermer le sujet"><span class="icon32 icon-locked"/></a>
		{/if}
	</div>
	<div class="clearfix"></div>
	{/if}
</div>
{/strip}
{if $smarty.session.utilisateur.id != 'Visiteur'}
<script type="text/javascript">
<!--
jQuery(document).ready(function(){
	// binds form submission and fields to the validation engine
	$("#formReply").validate({
		rules:{
			'reply[message]':{
				required:true,
				minlength:20,
			},
		},
		messages:{
			'reply[message]':{
				required:'Champ obligatoire',
				minlength:'Votre réponse est trop courte, 20 caractères mini',
			},
		},
		highlight:function(element)
        {
            $(element).parents('.control-group').removeClass('success');
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element)
        {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
	});
});
$(document).ready(function()	{
    $('#message').markItUp(mySettings);
});

function lockSujet(thread_id){
	if( confirm('Etes vous sur de vouloir verouiller le sujet') ){
		window.location.href = '{$Helper->getLink("forum/locksujet/'+ thread_id +'")}';
	}
}

//-->
</script>
{/if}