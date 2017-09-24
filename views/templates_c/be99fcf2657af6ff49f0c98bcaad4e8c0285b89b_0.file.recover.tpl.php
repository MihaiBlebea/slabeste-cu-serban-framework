<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 17:27:25
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\recover.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7eafdd6d143_31424418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be99fcf2657af6ff49f0c98bcaad4e8c0285b89b' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\recover.tpl',
      1 => 1505860525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7eafdd6d143_31424418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10287124559c7eafdd52bf4_66589910', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95193669359c7eafdd6acb2_37126309', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login/login_layout.tpl');
}
/* {block "body"} */
class Block_10287124559c7eafdd52bf4_66589910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10287124559c7eafdd52bf4_66589910',
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
                <h4 class="card-title">Recupereaza parola</h4>
                <h6 class="card-subtitle mb-2 text-muted">Iti vom trimite parola ta pe email</h6>
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/recover-password">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Emailul tau">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Recupereaza parola">
                </form>

                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login" class="card-link">Inapoi la formular</a><br />
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_95193669359c7eafdd6acb2_37126309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_95193669359c7eafdd6acb2_37126309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
