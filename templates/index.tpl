<!DOCTYPE html>
<html lang="fr">
    <!-- Navigation -->
    <body>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="mt-5">Mon super blog !</h1>  
                </div>
            </div>
            {if !empty($smarty.session.notifications)}
                <div class="row">
                    <div class="col-lg-12 text-block">
                        <div class="alert alert-{$smarty.session.notifications.result}" role="alert">
                            {$smarty.session.notifications.message}
                        </div>
                    </div>
                </div>
            {/if}
            <div class="row">
                {foreach from=$tab_articles item=value}
                    {* $value.titre *}
                    <div class="col-6">
                        <div class="card" style="width: 100%;">
                            <img src="img/{$value.id}.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{$value.titre}</h5>
                                <p class="card-text">{$value.texte}</p>
                                <a class="card-text">{$value.date_fr}</a>
                                <a href="article.php" class="btn btn-primary">Modifier</a>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
            <div class="row">
                <div class="col-12" style="margin-top:10px;">
                    <nav aria-label="">
                        <ul class="pagination pagination-lg">
                            {for $index1=1 to $nb_total_pages}
                                <li class="page-item"><a class="page-link" href="http://localhost/LP_ASR/index.php?p={$index1}">{$index1}</a></li>
                            {/for}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>