<?php

setcookie('sid','', -1);//Supprime le sid contenu das la page
header("Location: index.php");//Redirection
exit();