<!DOCTYPE html>
<head>
	<title>{$config.titre_site} :: {$lang.Administration}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/bootstrap-responsive.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/sharkphp/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/sharkphp/style_admin.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/default/design.css" type="text/css" media="screen" />
	{if !empty($css_add)}
    {foreach $css_add as $k => $v}
    <link rel="stylesheet" href="{$config.url}{$config.url_dir}web/css/{$v}" type="text/css" media="screen" />
    {/foreach}
	{/if}
	<script type="text/javascript" src="{$config.url}{$config.url_dir}web/js/javascript.js"></script>
	{if !empty($js_add)}
    {foreach $js_add as $k => $v}
    <script type="text/javascript" src="{$config.url}{$config.url_dir}web/js/{$v}"></script>
    {/foreach}
	{/if}
	<script type="text/javascript" src="{$config.url}{$config.url_dir}themes/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$config.url}{$config.url_dir}web/js/validation/jquery.validate.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="contenu">
		<div id="header">
            <div style="padding-top: 5px;">
                <span style="font-size: 24px; color:#fff; font-weight: bolder;">{$config.titre_site}</span>
            </div>
            <div style="padding-top: 5px; padding-left: 25px;">
                <span style="font-size: 14px; color:#fff; font-weight: bolder;">{$config.slogan_site}</span>
            </div>
        </div>

        <div class="container">
        <div class="row-fluid">
        	<div class="span3">{$blokGauche}</div>
        	<div class="span9">
        		<div>{$content}</div>


        	</div><!-- /span9 -->
        </div><!-- /row-fluid -->
    </div>
	</div>
		


	<div id="footer">
        <div id="footer_contener">
            <div class="footer_agences">              
            </div>
            <div class="footer_biens">               
            </div>
            <div class="footer_links">               
            </div>
        </div>
	</div>
	<div class="clear"></div>{/strip}
	<div id="diag-utils"></div>
	{$config.code_stat}
</html>