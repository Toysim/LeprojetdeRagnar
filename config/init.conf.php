<?php
session_start();
//Affiichge erreurs 
error_reporting(E_ALL);
ini_set("display_errors",1);

date_default_timezone_set('Europe/Paris');//Heure de reference par defaut

function print_r2($ma_variable){
    echo'<pre>';
    print_r($ma_variable);
    echo '</pre>';
     
    return true;
}

define('_nb_art_par_page' , 2);
