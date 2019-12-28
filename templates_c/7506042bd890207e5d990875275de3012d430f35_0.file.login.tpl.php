<?php
/* Smarty version 3.1.33, created on 2019-11-19 15:35:31
  from 'C:\xampp\htdocs\LP_ASR\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd3fdb381a3d4_75279539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7506042bd890207e5d990875275de3012d430f35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LP_ASR\\templates\\login.tpl',
      1 => 1574173025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd3fdb381a3d4_75279539 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<body>
<html lang="fr">
    
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <h1> </h1>
                <h2> Odin veille sur toi, connecte toi </h2><br/>
 
                <form method="post" enctype='multipart/form-data'action="login.php">
                    <div class="form-group">
                        <label for="email">Ton Nom</label>
                        <input type="email" class="form-control" required id="email" aria-describedby="email" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Le mot de passe</label>
                        <input type="password" class="form-control" required id="mdp" name="mdp"rows="3" placeholder="">
                    </div>
                        <button type="submit" class="btn btn-primary"name="bouton">Rejoins !</button>
                </form>
            </div>
        </div><?php }
}
