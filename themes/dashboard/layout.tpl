<!DOCTYPE html>
<head>
<title>{$config.titre_site} :: Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="{$config.url}{$config.url_dir}themes/sharkphp/images/sharkphp.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="{$config.url}{$config.url_dir}themes/sharkphp/images/sharkphp.ico" /><![endif]-->
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/bootstrap/css/bootstrap-responsive.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/dashboard/css/opa-icons.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/dashboard/css/charisma-app.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{$config.url}{$config.url_dir}themes/sharkphp/sharkphp.css" type="text/css" media="screen" />
{if !empty($css_add)}
{foreach $css_add as $k => $v}
<link rel="stylesheet" href="{$config.url}{$config.url_dir}web/css/{$v}" type="text/css" media="screen" />
{/foreach}
{foreach registry::$css_lib as $k => $v}
<link rel="stylesheet" href="{$config.url}{$config.url_dir}web/lib/{$v}" type="text/css" media="screen" />
{/foreach}
{/if}
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
				<a class="brand" href="{getLink("index")}">SHARKPHP</a>
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
	<div id="header" style="padding-top:50px;">
		
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2 main-menu-span" style="padding-top:20px;">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a href="{$Helper->getLinkAdm("index")}" title="">Dashboard</a></li>

						{if $config.mod_annuaire == 1}
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Annuaire&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("annuaire")}">Annuaire</a></li>
								<li><a href="{$Helper->getLinkAdm("categorie?c=annuaire")}" title=""}>Categorie</a></li>
							</ul>
						</li>
						{/if}

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Article&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("article")}">Article</a></li>
								<li><a href="{$Helper->getLinkAdm("categorie?c=article")}" title=""}>Categorie</a></li>
							</ul>
						</li>
						<li><a href="{$Helper->getLinkAdm("contact")}" title="Contact">Contact</a></li>
						<li><a href="{$Helper->getLinkAdm("blok")}" title="">Blok</a></li>
						{if $config.mod_feed_rss == 1}
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Flux&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("feedRss")}" title="">Flux RSS</a></li>
								<li><a href="{$Helper->getLinkAdm("categorie?c=feed_rss_link")}" title=""}>Categorie</a></li>
							</ul>
						</li>
						{/if}

						{if $config.mod_link == 1}
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Liens&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("link")}" title="">Liens</a></li>
								<li><a href="{$Helper->getLinkAdm("categorie?c=link")}" title=""}>Categorie</a></li>
							</ul>
						</li>
						{/if}

						<li><a href="{$Helper->getLinkAdm("menu")}" title="">Menu</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">News&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("news")}" title="">News</a></li>
								<li><a href="{$Helper->getLinkAdm("categorie?c=news")}" title=""}>Categorie</a></li>
							</ul>
						</li>
						<li><a href="{$Helper->getLinkAdm("page")}" title="">Page</a></li>
						<!--<li><a href="{$Helper->getLinkAdm("configuration")}" title="">Préférences</a></li>-->
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Téléchargements&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("download")}" title="">Téléchargements</a></li>
								<li><a href="{$Helper->getLinkAdm("categorie?c=download")}" title=""}>Categorie</a></li>
							</ul>
						</li>
						<li><a href="{$Helper->getLinkAdm("utilisateur")}" title="">Utilisateurs</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">Système&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$Helper->getLinkAdm("systeme")}" title="">Système</a></li>
								<li><a href="{$Helper->getLinkAdm("filemanager")}" title="">File manager</a></li>
								<li><a href="{$Helper->getLinkAdm("viewEditor")}" title="">Editeur de vue</a></li>
								<li><a href="{$Helper->getLinkAdm("systeme/errorPhp")}" title="">Erreurs PHP</a></li>
							</ul>
						</li>

					</ul><!-- /nav -->
				</div><!-- /well -->
			</div><!-- /span2 -->
			<div class="span10">
				{$content}
			</div><!-- /span10 -->
		</div><!-- /row-fluid -->
	</div><!-- /container-fluid -->

	<!-- Footer -->
	<footer class="footer_site">
		<div class="container">
			<div class="row-fluid">
				<div class="span8">
				{if $smarty.session.utilisateur.id == 'Visiteur'}<a href="{$Helper->getLink("utilisateur/register")}" title="">S'enregistrer</a>{/if}
				</div><!-- /span8 -->
				<div class="span4">
				</div><!-- /span4 -->
			</div><!-- /row-fluid-->
		</div><!-- /container -->
		<div class="container">
			<div class="row-fluid">
				<div class="span8">	
				</div>
				<div class="span4">					
				</div>
			</div><!-- /row-fluid -->
			<hr/>
			<div class="fleft">
				
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