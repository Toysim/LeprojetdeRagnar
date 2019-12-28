<?php
/* Smarty version 3.1.33, created on 2019-11-19 16:14:09
  from 'C:\xampp\htdocs\LP_ASR\templates\creation_utilisateur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd406c12fe1d7_37749103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78ff5f1a9101119f99769e5066d0ed0a22f5cd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LP_ASR\\templates\\creation_utilisateur.tpl',
      1 => 1574176380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd406c12fe1d7_37749103 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <body>
    <!-- Navigation -->
      <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="mt-5">
            <h1> </h1>
            <h2> Rejoins nous !!! </h2><br/>
 
            <form method="post" enctype='multipart/form-data'action="creation_utilisateur.php">
                <div class="form-group">
                    <label for="nom">Ton Nom</label>
                    <input type="text" class="form-control" required id="nom" aria-describedby="Nom" name="nom" placeholder="">
                </div>
                <div class="form-group">
                    <label for="prenom">Ton Prenom</label>
                    <textarea type="text" class="form-control" required id="prenom" name="prenom"rows="3" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label for="prenom">Ton email</label>
                    <textarea type="email" class="form-control" required id="email" name="email"rows="3" placeholder=""></textarea>
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
