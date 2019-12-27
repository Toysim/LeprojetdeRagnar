
<?php

/* BIBLIOTHEQUES */
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
include_once 'include/fonction.inc.php';
/* SMARTY */
require_once('vendor/libs/Smarty.class.php');

$page_courant = !empty($_GET['p']) ? $_GET['p'] : 1; //Pagination

$nb_total_articles = nb_total_article($bdd); //Pagination

$index = pagination($page_courant, _nb_art_par_page); //Calcul de l'index de départ pour la pagination

$nb_total_pages = ceil($nb_total_articles / _nb_art_par_page); //Pagination

/* @var $bdd PDO */
$sth = $bdd->prepare("SELECT id,titre,texte,DATE_FORMAT(date,'%d/%m/%Y')AS date_fr,publie "
        . "FROM article "
        . "WHERE publie = :publie  LIMIT :index ,:nb_art_par_page"); //REQUETE VERS LA BASE DONNEE 
$sth->bindValue(':publie', 1, PDO::PARAM_BOOL); //Valeur definie par un parametre 
$sth->bindValue(':index', $index, PDO::PARAM_INT); //Valeur definie par un parametre
$sth->bindValue(':nb_art_par_page', _nb_art_par_page, PDO::PARAM_INT); //Valeur definie par un parametre
$sth->execute(); //Execute la requete 
$tab_articles = $sth->fetchAll(PDO::FETCH_ASSOC); //retourne un tableau
//print_r2($tab_articles);

$smarty = new Smarty(); //Genere le code sous smarty

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
//$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
//$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');

$smarty->assign('tab_articles', $tab_articles); //On associe les variables a utiliser pour creer des paires et passer nos valeurs dans le template
$smarty->assign('nb_total_pages', $nb_total_pages);
//** un-comment the following line to show the debug console
//$smarty->debugging = true;

/* DEBUT DE LA VUE */
include_once 'include/header.inc.php'; //Haut de page 
include_once 'include/menu.inc.php'; //Menu de navigation
$smarty->display('index.tpl'); //Contenu du template 
include_once 'include/footer.inc.php'; //bas de page 
unset($_SESSION['notifications']); //detruit la variable
