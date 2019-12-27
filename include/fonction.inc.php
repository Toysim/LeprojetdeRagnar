<?php

function pagination($page_courante, $nb_articles_par_page) {//Fonction calcul de la page par rapport au nombre d'articles
    $index = ($page_courante - 1) * $nb_articles_par_page;
    return $index;
}

function nb_total_article($bdd) {//Fonction compte le nombre total articles
    $sth = $bdd->prepare("SELECT COUNT(*)as total_articles FROM article WHERE publie = :publie");
    $sth->bindValue('publie', 1, PDO::PARAM_BOOL);
    $sth->execute();

    $result = $sth->fetch(PDO::FETCH_ASSOC);
    $total_articles = $result['total_articles'];
    return $total_articles;
}
