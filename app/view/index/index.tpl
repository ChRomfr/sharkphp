<!--
    index/index.tpl
-->
{strip}
<div style="padding-top:10px;"></div>
<div class="container">
    <div class="row-fluid">
        <div class="span4 well">
            <h4>News</h4>
            <ul class="unstyled">
                {foreach $News as $Row}
                <li><a href="{$Helper->getLink("news/view/{$Row.id}/{$Row.sujet|urlencode}")}" title="">{$Row.sujet}</a></li>
                {/foreach}
            </ul>
            <div style="float:right">
                <a href="{$Helper->getLink("news")}" title="" class="btn">Plus</a>
            </div>
            <div style="clear:both"></div>
        </div><!-- /span4 -->
        <div class="span4 well">
            <h4>Tutoriaux</h4>
            <ul class="unstyled">
                {foreach $Articles as $Row}
                <li><a href="{$Helper->getLink("article/read/{$Row.id}/{$Row.title|urlencode}")}" title="">{$Row.title}</a></li>
                {/foreach}
            </ul>
            <div style="float:right">
                <a href="{$Helper->getLink("article")}" title="" class="btn">Plus</a>
            </div>
            <div style="clear:both"></div>
        </div><!-- /span4 -->
        <div class="span4 well">
            <h4>Téléchargement</h4>
            <ul class="unstyled">
                {foreach $Downloads as $Row}
                <li><a href="{$Helper->getLink("download/detail/{$Row.id}/{$Row.name|urlencode}")}" title="">{$Row.name}</a></li>
                {/foreach}
            </ul>
            <div style="float:right">
                <a href="{$Helper->getLink("download")}" title="" class="btn">Plus</a>
            </div>
            <div style="clear:both"></div>
        </div><!-- /span4 -->
    </div><!-- /row-fluid -->
</div><!-- /container -->
<div class="container">
    <div class="row-fluid">
        <div class="span8 well">
            <h4>Présentation</h4>
            <p>Sharkphp est un cms/framework qui vous permet de créer votre site. Sharkphp n'est pas vraiment un CMS car il n'est pas possible de créer son site internet sans editer le code des pages. Sharkphp est conçu sur le modèle MCV et integrer différente controller de base que vous pouvez surcharger pour créer les votres</p>
        </div><!-- /span8 -->
        <div class="span4 well">
            <h4>Ils utilisent Sharkphp</h4>
            <p>Quelques site basé sur Sharkphp</p>
            <ul class="unstyled">
                <li><a href="http://www.carpbook.fr" title="Livre de session en ligne" target="_blank">www.carpbook.fr</a></li>
                <li><a href="http://www.immophp.fr" title="CMS pour les agences immobilieres" target="_blank">www.immophp.fr</a></li>
                <li><a href="http://www.goliath-software.com" title="Logiciel de gestion de club/centre sportif et de suivi de la performance" target="_blank">www.goliath-software.com</a></li>
                <li><a href="http://va.sharkphp.com" title="CMS pour les compagnies virtuel" target="_blank">va.sharkphp.com</a></li>
            </ul>
        </div><!-- /span4 -->
    </div><!-- /row-fluid -->
</div><!-- /container -->
{/strip}