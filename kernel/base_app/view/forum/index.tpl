<!--
	base_app/view/forum/index.tpl
-->
<pre>
{$ForumsData|print_r}
</pre>

{foreach $ForumsData as $Data}
	<table class="table table-bordered table-striped table-condensed table-hover">
		<thead>
			<tr>
				<th colspan="2">{$Data.name}</th>
				<th>Sujets</th>
				<th>Messages</th>
				<th>Dernier message</th>
			</tr>
		</thead>
		<tbody>
		{foreach $Data.forums as $Forum}
		<tr>
			<td>&nbsp;</td>
			<td><a href="{$Helper->getLink("forum/viewforum/{$Forum.id}")}" title="{$Forum.name}">{$Forum.name}</a></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		{/foreach}
		<tbody>
	</table>
	<br/>
{/foreach}