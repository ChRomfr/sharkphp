{strip}
<div class="well">
	{if isset($Error_login) && !empty($Error_login)}
		<div class="alert">
  			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<strong>{$Error_login}</strong>
		</div>
	{/if}
	<form method="post" action="" class="form-horizontal">
		<fieldset>
			<legend>{$lang.Identification}</legend>
			<div class="control-group">
				<label class="control-label" for="identifiant">{$lang.Identifiant}</label>
				<div class="controls">
					<input type="text" name="login[identifiant]" id="identifiant" required />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password">{$lang.Mot_de_passe}</label>
				<div class="controls">
					<input type="password" name="login[password]" id="password" required /><br/>
					<span><a href="{$Helper->getLink("connexion/lostPassword")}" title=""><small>{$lang.Mot_de_passe_perdu}</small></a></span>
				</div>
			</dl>

			<div style="text-align:center;">
				<button type="submit" name="send" class="btn">{$lang.Envoyer}</button>
				{if $config.register_open == 1}
				<button type="button" class="btn"><a href="{$Helper->getLink("utilisateur/register")}" title="{$lang.S_enregistrer}">{$lang.S_enregistrer}</a></button>
				{/if}
			</div>

		</fieldset>
	</form>
</div><!-- /well -->
{/strip}