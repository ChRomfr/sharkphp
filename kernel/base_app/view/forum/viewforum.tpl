<!-- 
	base_app/forum/viewforum.tpl
-->
<ul>
	
</ul>

<div class="well">

	<h3>{$Forum.name}</h3>
	<!-- Bouton nouveau sujet -->
	<div class="pull-right">
		{if $smarty.session.utilisateur.id != 'Visiteur'}
		<a href="{$Helper->getLink("forum/newthread/{$Forum.id}")}" title="Nouveau sujet" class="btn">Créer un sujet</a>
		{/if}
	</div>
	<div class="clearfix"></div>
	<div style="padding-bottom: 3px;"></div>

	<!-- Tableau des threads -->
	<table class="table table-striped table-condensed table-hover">
		<tbody>
			{foreach $Threads as $Thread}
			<tr>
				<td>					
					<h4><a href="{$Helper->getLink("forum/viewtopic/{$Thread.id}")}" title="Voir le sujet">{$Thread.titre}</h4></a>
					<a href="{$Helper->getLink("forum/viewtopic/{$Thread.id}")}" title="Voir le sujet"><span class="muted">Par {$Thread.auteur} le {$Thread.add_on}</span></a>
				</td>
				<td style="vertical-align: middle;"><span class="muted">{$Thread.nb_message} message(s)</span></td>
				<td style="vertical-align: middle;"><span class="muted">Dernier message par {$Thread.last_auteur}</span><br/><span class="muted">Le {$Thread.last_message_date}</span></td>
			</tr>
			{/foreach}
		</tbody>
	</table>
	<div class="pull-right">
		<a href="{$Helper->getLink("xml/fluxRSSForum/{$Forum.id}")}" title="Rss" target="_blank"><span class="icon icon-rssfeed"/></a>
	</div>
	<div class="clearfix"></div>
</div>