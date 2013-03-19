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
            <h4>Bienvenu sur votre nouveau site</h4>
            <p>Pour modifier le contenu de cette page, editer le fichier app/view/index/index.tpl</p>
        </div><!-- /span8 -->
        <div class="span4 well">
            <p>&nbsp;</p>
        </div><!-- /span4 -->
    </div><!-- /row-fluid -->
</div><!-- /container -->
{/strip}