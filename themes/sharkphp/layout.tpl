<!DOCTYPE html>
<head>
<title>{$config.titre_site}{if isset($ctitre)} :: {$ctitre}{else} :: {$config.slogan_site}{/if}</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="{$config.titre_site} {if isset($ctitre)} :: {$ctitre}{/if}" />
<meta name="description" content="{if isset($Description_this_page)}{$Description_this_page}{else}{$config.description_site}{/if}" />
<meta name="keywords" content="{$config.keywords}" />	
<link rel="icon" type="image/png" href="{$config.url}{$config.url_dir}themes/sharkphp/images/sharkphp.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="{$config.url}{$config.url_dir}themes/sharkphp/images/sharkphp.ico" /><![endif]-->
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/bootstrap-responsive.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/sharkphp/css/opa-icons.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/sharkphp/sharkphp.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="News" href="{getLink("xml/fluxRSSNews?nohtml")}" />
<link rel="alternate" type="application/rss+xml" title="Tutoriaux" href="{getLink("xml/fluxRSSArticle?nohtml")}" />
<link rel="alternate" type="application/rss+xml" title="Telechargement" href="{getLink("xml/fluxRSSDownload?nohtml")}" />
{if !empty($css_add)}
{foreach $css_add as $k => $v}
<link rel="stylesheet" href="{$config.url}{$config.url_dir}web/css/{$v}" type="text/css" media="screen" />
{/foreach}
{/if}
{foreach registry::$css_lib as $k => $v}
<link rel="stylesheet" href="{$config.url}{$config.url_dir}web/lib/{$v}" type="text/css" media="screen" />
{/foreach}
<script type="text/javascript" src="{$config.url}{$config.url_dir}web/js/javascript.js"></script>
{if !empty($js_add)}
{foreach $js_add as $k => $v}
<script type="text/javascript" src="{$config.url}{$config.url_dir}web/js/{$v}"></script>
{/foreach}
{/if}
{foreach registry::$js_lib as $k => $v}
<script type="text/javascript" src="{$config.url}{$config.url_dir}web/lib/{$v}"></script>
{/foreach}
<script type="text/javascript" src="{$config.url}{$config.url_dir}themes/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar">
{strip}
	<!-- NAVBAR -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" date-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{getLink("index")}" title="Sharkphp CMS"><img style="height:25px;" src="{$config.url}{$config.url_dir}web/images/sharkphp_white.png" alt="Sharkphp" /></a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="{getLink("index")}"><i class="icon-home icon-white"></i></a></li>
						<li><a href="{getLink("article")}" title="Tutoriaux">Tutoriaux</a></li>
						<li><a href="{getLink("download")}" title="Telechargement">Telechargement</a></li>
						<li><a href="{getLink("contact")}" title="Contact">Contact</a></li>
					</ul>
					<ul class="nav pull-right">
						{if $smarty.session.utilisateur.id != 'Visiteur'}
						<li><a href="{getLink("utilisateur")}" title=""><i class="icon-user icon-white"></i></a>
						<li><a href="{getLink("connexion/logout")}" title=""><i class="icon-off icon-white"></i></a>
						{/if}

						{if $smarty.session.utilisateur.isAdmin > 0}
						<li><a href="{$config.url}{$config.url_dir}adm/" title="Administration"><i class="icon-wrench icon-white"></i></a></li>
						{/if}
					</ul>
					{if $smarty.session.utilisateur.id == 'Visiteur'}
					<form class="navbar-form pull-right" method="post" action="{getLink("connexion")}">
                		<div class="input-prepend">
                			<span class="add-on"><i class="icon-user"></i></span><input type="text" class="span2" placeholder="Login" name="login[identifiant]" required />
                		</div>
                		<div class="input-prepend input-append">
                			<span class="add-on"><i class="icon-keys"></i></span><input type="password" class="span2" placeholder="Password" name="login[password]" required /><button type="submit" class="btn"><i class="icon-ok"></i></button>
                		</div>
            		</form>
        			{/if}
				</div>
			</div>
		</div>
	</div><!-- /navbar -->
	<!-- Header -->
	<div id="header" style="padding-top:40px;">
		
	</div>

	<!-- Contenu -->
	<div class="container">
	<div class="row-fluid">		
		<div class="span12">
			{if isset($FlashMessage) && !empty($FlashMessage)}
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{$FlashMessage}
				</div>
			{/if}
			{$content}
		</div>
	</div>
	</div>
	<!-- Footer -->
	<footer class="footer_site">
		<div class="container">
			<div class="row-fluid">
				<div class="span8">
				
				</div><!-- /span8 -->
				<div class="span4">
				</div><!-- /span4 -->
			</div><!-- /row-fluid-->
		</div><!-- /container -->
		<div class="container">
			<div class="row-fluid">
				<div class="span4">
			
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-513c76ce59b7004a"></script>
					<!-- AddThis Button END -->				
				</div>
				<div class="span4">
					{if $smarty.session.utilisateur.id == 'Visiteur'}<div style="padding-bottom:2px;"><a href="{$Helper->getLink("utilisateur/register")}" title="" class="btn btn-small btn-info"><i class="icon-user icon-white"></i>&nbsp;Rejoingez-nous</a></div>{/if}
				</div>
				<div class="span4">
					<!-- Form recherche -->
					<form class="form-search" action="http://www.sharkphp.com/index.php/page/index/3" id="cse-search-box">
					  <div class="input-append">
						<input type="text" name="q" class="span2 search-query" style="width:140px;" placeholder="Recherche">
						<input type="hidden" name="cx" value="partner-pub-1710313297381782:6041762284" />
						<input type="hidden" name="cof" value="FORID:10" />
						<input type="hidden" name="ie" value="UTF-8" />
						<button type="submit" name="sa" class="btn"><i class="icon-search"></i></button>
					  </div>
					</form>
					
					<!-- Stats -->
					<ul class="unstyled">
						<li>Actualité : {$NbNews}</li>
						<li>Tutoriaux : {$NbArticle}</li>
						<li>Téléchargement : {$NbDownload}</li>
					</ul>			
				</div><!-- /span4 -->
			</div><!-- /row-fluid -->
			<hr/>
			<div class="fleft">
				<a href="{getLink("xml/fluxRSSNews?nohtml")}" title=""><img src="{$config.url}{$config.url_dir}web/images/rss2.png" alt="" style="width:20px;" /></a>
				<a href="https://www.facebook.com/pages/Sharkphp/111778145678381" title=""><img src="{$config.url}{$config.url_dir}web/images/facebook.png" alt="" style="width:20px;" /></a>
			</div>
			<div class="fright">
				Réaliser avec <a href="http://www.sharkphp.com" title="Another CMS/FRAMEWORK">Sharkphp <img src="{$config.url}{$config.url_dir}web/images/sharkphp.png" alt="" style="width:20px;" /></a>
			</div>
			<div class="clear"></div>
		</div><!-- /container -->
	</footer>
	
{/strip}
{$config.code_stat}
<script>
$(document).ready(function() {
	$("a.fbimage").fancybox();
});
</script>
</body>
</html>