<?php
/* Smarty version 3.1.33, created on 2019-12-03 14:51:47
  from 'C:\xampp\htdocs\LP_ASR\templates\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de66873492129_91813670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f96f8d67404028ba63e6869b6a0ba9d0206044b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LP_ASR\\templates\\article.tpl',
      1 => 1575381104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de66873492129_91813670 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE html>
<html lang="fr">
    <body>
    <!-- Navigation -->

<!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="mt-5">
                    <h2> Ajoute un article </h2><br/>

                    <form method="post" enctype='multipart/form-data'action="article.php">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" required id="titre" aria-describedby="Titre" name="titre" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="texte">Texte</label>
                            <textarea type="text" class="form-control" required id="texte" name="text"rows="3" placeholder="Texte"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fichier">Ficher</label>
                            <input type="file" class="form-control" required id="img" name="img">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" required id="publie"name="publie">
                            <label class="form-check-label" for="publie">Publié ?</label>
                        </div>
                        <button type="submit" class="btn btn-primary"name="bouton">Envoyer</button>
                    </form>
                </div>
            </div>
            </body>

    </html><?php }
}
