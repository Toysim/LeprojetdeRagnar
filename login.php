
<?php

/* BIBLIOTHEQUES */
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
include_once 'include/fonction.inc.php';
/* SMARTY */
require_once('vendor/libs/Smarty.class.php');


if (isset($_POST['bouton'])) {
    $email = $_POST['email']; //Creation des variables 
    $mdp = $_POST['mdp'];

    $verif = $bdd->prepare('SELECT * FROM utilisateurs WHERE mdp = :mdp AND email = :email'); // Je compte le nombre d'entrée ayant pour mot de passe et login ceux rentrés
    $verif->bindValue(':mdp', $_POST['mdp'], PDO::PARAM_STR);
    $verif->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $verif->execute();


    // Je teste la valeur de $data['membre_valide']

    if ($verif->rowCount() > 0) { // On as trouvé un membre avec ce couple mdp, login
        $donnees = $verif->fetch(PDO::FETCH_ASSOC);
        echo '<p>Vous êtes connecté</p>';
        $sid = $donnees['email'] . time();
        $sid_hache = md5($sid);
        setcookie('sid', $sid_hache, time() + 360);

        $sth_update = $bdd->prepare('UPDATE utilisateurs SET sid = :sid WHERE id = :id ');
        $sth_update->bindValue(':sid', $sid_hache, PDO::PARAM_STR); //Associe une valeur à un nom correspondant(sid)
        $sth_update->bindValue(':id', $donnees['id'], PDO::PARAM_INT);
        $result_connexion = $sth_update->execute();

        /* NOTIFICATION */
        if ($result_connexion == TRUE) {
            $_SESSION['notifications']['result'] = 'success';
            $_SESSION['notifications']['message'] = 'Yeah </br>Bravo !';
        } else {
            
        }
        //Redirection 
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['notifications']['result'] = 'danger';
        $_SESSION['notifications']['message'] = 'Attention ! Tu te trompe d email ou de mot de passe !</br>';
        header("Location: index.php");
    }
}

$smarty = new Smarty(); //Genere le code sous smarty

$smarty->setTemplateDir('templates/'); //On associe les variables a utiliser pour creer des paires et passer nos valeurs dans le template
$smarty->setCompileDir('templates_c/');
//$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
//$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');



/* DEBUT DE LA VUE */
include_once 'include/header.inc.php'; //Haut de page 
include_once 'include/menu.inc.php'; //Menu de navigation
$smarty->display('login.tpl'); //Contenu du template
include_once 'include/footer.inc.php'; //bas de page 
?>

