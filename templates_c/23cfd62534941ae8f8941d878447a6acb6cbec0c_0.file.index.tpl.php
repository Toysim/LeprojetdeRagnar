<?php
/* Smarty version 3.1.33, created on 2019-12-03 14:53:27
  from 'C:\xampp\htdocs\LP_ASR\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de668d7c8a2a6_43342877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23cfd62534941ae8f8941d878447a6acb6cbec0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LP_ASR\\templates\\index.tpl',
      1 => 1575381200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de668d7c8a2a6_43342877 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <!-- Navigation -->
    <body>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="mt-5">Mon super blog !</h1>  
                </div>
            </div>
            <?php if (!empty($_SESSION['notifications'])) {?>
                <div class="row">
                    <div class="col-lg-12 text-block">
                        <div class="alert alert-<?php echo $_SESSION['notifications']['result'];?>
" role="alert">
                            <?php echo $_SESSION['notifications']['message'];?>

                        </div>
                    </div>
                </div>
            <?php }?>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <div class="col-6">
                        <div class="card" style="width: 100%;">
                            <img src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
</p>
                                <a class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</a>
                                <a href="article.php" class="btn btn-primary">Modifier</a>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="row">
                <div class="col-12" style="margin-top:10px;">
                    <nav aria-label="">
                        <ul class="pagination pagination-lg">
                            <?php
$_smarty_tpl->tpl_vars['index1'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index1']->step = 1;$_smarty_tpl->tpl_vars['index1']->total = (int) ceil(($_smarty_tpl->tpl_vars['index1']->step > 0 ? $_smarty_tpl->tpl_vars['nb_total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['index1']->step));
if ($_smarty_tpl->tpl_vars['index1']->total > 0) {
for ($_smarty_tpl->tpl_vars['index1']->value = 1, $_smarty_tpl->tpl_vars['index1']->iteration = 1;$_smarty_tpl->tpl_vars['index1']->iteration <= $_smarty_tpl->tpl_vars['index1']->total;$_smarty_tpl->tpl_vars['index1']->value += $_smarty_tpl->tpl_vars['index1']->step, $_smarty_tpl->tpl_vars['index1']->iteration++) {
$_smarty_tpl->tpl_vars['index1']->first = $_smarty_tpl->tpl_vars['index1']->iteration === 1;$_smarty_tpl->tpl_vars['index1']->last = $_smarty_tpl->tpl_vars['index1']->iteration === $_smarty_tpl->tpl_vars['index1']->total;?>
                                <li class="page-item"><a class="page-link" href="http://localhost/LP_ASR/index.php?p=<?php echo $_smarty_tpl->tpl_vars['index1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index1']->value;?>
</a></li>
                            <?php }
}
?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
