<div style="padding-top:20px;"></div>

<div class="row-fluid">
	
	<a class="well span3 top-block" href="{$Helper->getLinkAdm("contact")}" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-color icon-envelope-closed"></span>
		<div>Contact</div>
		<div>{$NbContacts}</div>
	</a>

	<a class="well span3 top-block" href="{$Helper->getLinkAdm("utilisateur")}" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-red icon-user"></span>
		<div>Utilisateurs</div>
		<div>{$NbContacts}</div>
	</a>
	
	{if $config.mod_annuaire == 1}
	<a class="well span3 top-block" href="{$Helper->getLinkAdm("annuaire")}" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-color icon-web"></span>
		<div>Annuaire</div>
		<div>{$NbSites}</div>
		<span class="notification red">{$NbSitesNew}</span>
	</a>
	{/if}

	{if $config.mod_forum == 1}
	<a class="well span3 top-block" href="{$Helper->getLinkAdm("forum")}" data-rel="tooltip" data-original-title="" style="position: relative; left: 0px; top: 0px;">
		<div></div>
		<span class="icon32 icon-color icon-messages"></span>
		<div>Alerte Forum</div>
		<div>{$NbAlerteForum}</div>
		<span class="notification red">{$NbAlerteNonTraite}</span>
	</a>
	{/if}

</div><!-- /row-fluid -->