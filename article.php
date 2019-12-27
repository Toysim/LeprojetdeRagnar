
        <?php
        /* BIBLIOTHEQUES */
        require_once 'config/init.conf.php';
        require_once 'config/bdd.conf.php';
        require_once 'config/connexion.conf.php';
        include_once 'include/fonction.inc.php';
        /* SMARTY */
        require_once('vendor/libs/Smarty.class.php');




        if (isset($_POST['bouton'])) {//vérifie si une variable existe
            $titre = $_POST['titre']; //Creation des variables 
            $texte = $_POST['text'];
            $publie = isset($_POST['publie']) ? 1 : 0;
            $date = date('Y-m-d');

            $sth = $bdd->prepare("INSERT INTO article (titre,texte,publie,date) VALUES(:titre,:texte,:publie,:date)");//REQUETE VERS LA BASE DONNEE 
            $sth->bindValue(':titre', $titre, PDO::PARAM_STR);//Valeur definie par un parametre
            $sth->bindValue(':texte', $texte, PDO::PARAM_STR);//Valeur definie par un parametre
            $sth->bindValue(':publie', $publie, PDO::PARAM_INT);//Valeur definie par un parametre
            $sth->bindValue(':date', $date, PDO::PARAM_STR);//Valeur definie par un parametre
            //$sth->execute();

            $result_insert_article = $sth->execute();
            $id_insert = $bdd->lastInsertId();


            //Traitement de l'image 
            if ($_FILES['img']['error'] == 0) {
                $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
                move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $id_insert . '.jpg');
            }

            
               /* NOTIFICATION */
            if ($result_insert_article == TRUE) {
                $_SESSION['notifications']['result'] = 'success';
                $_SESSION['notifications']['result'] = '<br>gg </br>Par Odin il est publié !';
            } else {
                $_SESSION['notifications']['result'] = 'danger';
                $_SESSION['notifications']['result'] = '<br>Tu as échoué </br>';
            }
            
            //Redirection 
            header("Location: index.php");
            exit();
        } else {

            /* DEBUT DE LA VUE */
            $smarty = new Smarty();
            $smarty->setTemplateDir('templates/');
            $smarty->setCompileDir('templates_c/');
//$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
//$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');
            include_once 'include/header.inc.php';//Haut de page
            include_once 'include/menu.inc.php';//Menu de navigation
            $smarty->display('article.tpl');//Contenu du template 
            include_once 'include/footer.inc.php'; //bas de page 
        }
        ?>