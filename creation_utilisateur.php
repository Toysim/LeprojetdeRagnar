
<?php

/* BIBLIOTHEQUES */
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
include_once 'include/fonction.inc.php';
/* SMARTY */
require_once('vendor/libs/Smarty.class.php');

if (isset($_POST['bouton'])) {
    $nom = $_POST['nom']; //Creation des variables 
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sth = $bdd->prepare("INSERT INTO utilisateurs (nom,prenom,email,mdp) VALUES(:nom,:prenom,:email,:mdp)"); //
    $sth->bindValue(':nom', $nom, PDO::PARAM_STR);
    $sth->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $sth->bindValue(':email', $email, PDO::PARAM_STR);
    $sth->bindValue(':mdp', $mdp, PDO::PARAM_STR);
    $sth->execute();

    //$result_insert_utilisateur = $sth->execute();
    $id_insert = $bdd->lastInsertId();//requete de PDO qui ajoute en fonction du dernier id enregistrée
       /* NOTIFICATION */
    if ($sth == TRUE) {
        $_SESSION['notifications']['result'] = 'success';
        $_SESSION['notifications']['result'] = '<br> </br>Bienvenue dans notre peuple !';
    } else {
        $_SESSION['notifications']['result'] = 'danger';
        $_SESSION['notifications']['result'] = '<br>Tu as oublié quelque chose</br>';
    }
    //Redirection 
    header("Location: index.php");
} else {
    $smarty = new Smarty();//Genere le code sous smarty

    $smarty->setTemplateDir('templates/');
    $smarty->setCompileDir('templates_c/');
//$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
//$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');

    /* DEBUT DE LA VUE */
    include_once 'include/header.inc.php';//Haut de page 
    include_once 'include/menu.inc.php';//Menu de navigation
    $smarty->display('creation_utilisateur.tpl');//Contenu du template 
    include_once 'include/footer.inc.php';//bas de page 
}
?>

