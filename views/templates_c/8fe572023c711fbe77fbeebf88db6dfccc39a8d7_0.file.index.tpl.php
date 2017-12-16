<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-16 09:14:00
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a34e3d8524052_91636820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe572023c711fbe77fbeebf88db6dfccc39a8d7' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\index.tpl',
      1 => 1512238627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a34e3d8524052_91636820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1295151795a34e3d8141813_38354424', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3165742995a34e3d8521ff9_90290007', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login/login_layout.tpl');
}
/* {block "body"} */
class Block_1295151795a34e3d8141813_38354424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1295151795a34e3d8141813_38354424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

            </div>
        <?php }?>
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Intra in contul tau</h4>
                <h6 class="card-subtitle mb-2 text-muted">Foloseste datele de logare</h6>
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Parola</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Acceseaza contul">
                </form>

                <a href="http://www.slabestecuserban.ro/servicii-si-produse-de-slabit/" class="card-link">Cum pot sa-mi fac un cont?</a><br />
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/recover-password" class="card-link">Ups, mi-am uitat parola!</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_3165742995a34e3d8521ff9_90290007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3165742995a34e3d8521ff9_90290007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
