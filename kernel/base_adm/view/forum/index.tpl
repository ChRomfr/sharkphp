<ul class="breadcrumb">
	<li><a href="{$Helper->getLinkAdm("index")}" title="">{$lang.Administration}</a><span class="divider">/</span></li>
	<li>Forum</li>
</ul>

	<div class="row-fluid">
		<!-- Log moderation -->	
		<div class="span4 well">
			<table class="table">
				<caption><h4>Logs modération</h4></caption>
				<thead>
					<tr>
						<th>Date</th>
						<th>Moderateur</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				{foreach $Logs as $Log}
					<tr>
						<td>{$Log.date_action}</td>
						<td>{$Log.moderateur}</td>
						<td>{$Log.action}</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</div>
		
		{if count($Alertes) > 0}
		<div class="span4 well">
			<table class="table">
				<caption><h4>Logs modération</h4></caption>
				<thead>
					<tr>
						<th>Date</th>
						<th>Message</th>
						<th>Auteur</th>
						<th>Rapporteur</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				{foreach $Alertes as $Alerte}
					<tr>
						<td>{$Alerte.date_alerte}</td>
						<td><a href="{$Helper->getLink("forum/viewtopic/{$Alerte.thread_id}#message-{$Alerte.message_id}")}" target="_blank" title="Voir">#{$Alerte.message_id}</a></td>
						<td>{$Alerte.identifiant}</td>
						<td>{$Alerte.rapporteur}</td>
						<td style="text-align:center;"><a href="{$Helper->getLinkAdm("forum/traitealerte/{$Alerte.id}")}" title="" class="btn btn-warning">Traiter</a></td>
				{/foreach}
				</tbody>
			</table>
		</div>
		{/if}

		<!-- Categorie et forum -->
		<div class="span4">
			{foreach $ForumsData as $Data}
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th colspan="2">{$Data.name}</th>
					</tr>
				</thead>
				<tbody>
				{foreach $Data.forums as $Forum}
				<tr>
					{if empty($Forum.image)}
					<td colspan="2"><a href="{$Helper->getLink("forum/viewforum/{$Forum.id}")}" title="{$Forum.name}">{$Forum.name}</a></td>
					{else}
					<td></td>
					<td><a href="{$Helper->getLink("forum/viewforum/{$Forum.id}")}" title="{$Forum.name}">{$Forum.name}</a></td>
					{/if}
				</tr>
				{/foreach}
				<tbody>
			</table>
			<br/>
		{/foreach}
		</div>
	</div><!-- /row-fluid -->

