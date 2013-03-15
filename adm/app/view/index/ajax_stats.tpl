{strip}
<div class="well">
    <legend>{$lang.Statistique}</legend>
    
        <table class="table table-condensed">
            <tr>
                <td>{$lang.Biens} :</td>
                <td>{$NbBien}</td>
            </tr>

            <tr>
                <td>{$lang.Visites} :</td>
                <td>{$NbVisite}</td>
            </tr>

            <tr>
                <td>{$lang.Prospects} :</td>
                <td>{$NbProspect}</td>
            </tr>

            <tr>
                <td>Bien saisie mois en cour :</td>
                <td>{$NbBienSaisieMois}</td>
            </tr>
            {if $InfoInstall.install_type != 'bronze'}
            <tr>
                <td>Bien vendu mois en cour :</td>
                <td>{$NbBienVenduMois}</td>
            </tr>
            
            <tr>
                <td>Total des ventes mois en cour :</td>
                <td>{number_format({$TotalVente},0,',',' ')}</td>
            </tr>

            <tr>
                <td>Frais agence mois en cour :</td>
                <td>{number_format({$TotalFraisAgence},0,',',' ')}</td>
            </tr>

            <tr>
                <td>Commission vendeur mois en cour :</td>
                <td>{number_format({$TotalComVendeur},0,',',' ')}</td>
            </tr>
            {/if}
        </table>

    <hr/>

    <div class="index_graph_contener">
        <div class="fleft" style="width:48%">
            <legend><small>Repartition des biens dans les Categories</small></legend>
            <img src="{getLinkAdm("graph/repartitionBienCategorie?nohtml")}" title="Repartition Categories" />
        </div>
        <div class="fleft" style="width:3%">&nbsp;</div>
        <div class="fleft" style="width:48%">
            <legend><small>Bien visible sur le site</small></legend>
            <img src="{getLinkAdm("graph/bienVisible?nohtml")}" title="Repartition Categories" />
        </div>
        <div class="clear"></div>
    </div>
</div>
{/strip}