<ul class="breadcrumb">
	<li><a href="{getLinkAdm('index')}" title="{$lang.Administration}">{$lang.Administration}</a><span class="divider">/</span></li>
	<li><a href="{getLinkAdm('utilisateur')}" title="{$lang.Utilisateurs}">{$lang.Utilisateurs}</a><span class="divider">/</span></li>
	<li><a href="{getLinkAdm('utilisateur/groupe')}" title="{$lang.Groupes}">{$lang.Groupes}</a><span class="divider">/</span></li>
	<li>{$lang.Nouveau}</li>
</ul>

<form method="post" action="#" class="form-horizontal well">
	<fieldset>
		<legend>{$lang.Nouveau_groupe}</legend>
		<div class="control-group">
			<label class="control-label">{$lang.Nom} :</label>
			<div class="controls">
				<input type="text" name="groupe[name]" id="name" class="input-xxlarge" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">{$lang.Description} :</label>
			<div class="controls">
				<textarea type="text" name="groupe[description]" id="description" class="input-xxlarge"></textarea>
			</div>
		</div>
		
		<div class="form-actions">
			<input type="hidden" name="groupe[systeme]" value="0" />
			<input type="hidden" name="groupe[ouvert]" value="0" />
			<input type="hidden" name="groupe[visible]" value="1" />
			<input type="hidden" name="groupe[systeme]" value="0" />
			<button class="btn btn-primary">{$lang.Enregistrer}</button>
		</div>
	</fieldset>
</form>