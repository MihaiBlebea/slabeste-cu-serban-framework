<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-27 22:15:48
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\confirmation\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a441b94675172_77126359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9486c9431bec1490dab14160efde3a3b5940f5f7' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\confirmation\\index.tpl',
      1 => 1507324165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a441b94675172_77126359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21153797755a441b9461eaa4_30379654', "nav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14037112835a441b94623d20_87588870', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3991659045a441b946732e6_64294776', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/confirmation_layout.tpl');
}
/* {block "nav"} */
class Block_21153797755a441b9461eaa4_30379654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_21153797755a441b9461eaa4_30379654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
<?php
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_14037112835a441b94623d20_87588870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14037112835a441b94623d20_87588870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Felicitari <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
!</h1>
                <p class="lead">Ai achizitionat cu succes programul <?php echo $_smarty_tpl->tpl_vars['program_name']->value;?>
. Verifica datele tale de acces de mai jos.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;
echo $_smarty_tpl->tpl_vars['mainPage']->value;?>
" target="_blank">
                    <img style="max-width:100%;" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['programImage']->value;?>
" />
                </a>
            </div>
            <div class="col">
                <div class="card">
                    <div style="padding:20px;" class="card-block">
                        <h4 class="card-title">Datele tale private de access</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Verifica cu atentie datele de mai jos apoi apasa pe butonul "Acceseaza programul"</h6><br />
                        <p class="card-text">
                            Ti-am trimis date tale private de access si pe emailul tau (<strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>), asa ca le poti accesa oricand. Daca nu ai primit emailul cu datele de access in urmatoarele 5 minute, atunci verifica si casuta ta de SPAM. In 99% din cazurile in care "nu ai primit" emailul, acesta ajunge in sectiunea de SPAM.
                        </p>
                        <p class="card-text"><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
                        <p class="card-text"><strong>Parola:</strong> <?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</p>
                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;
echo $_smarty_tpl->tpl_vars['mainPage']->value;?>
" class="btn btn-primary" style="display:block; margin:auto;">Acceseaza programul</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_3991659045a441b946732e6_64294776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3991659045a441b946732e6_64294776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
