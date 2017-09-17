<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-17 21:47:02
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\recover.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59beed56a5c012_28153880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be99fcf2657af6ff49f0c98bcaad4e8c0285b89b' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\recover.tpl',
      1 => 1505684818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59beed56a5c012_28153880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143601709959beed56a4b2b4_70311938', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200341248959beed56a5acb3_87230873', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login_layout.tpl');
}
/* {block "body"} */
class Block_143601709959beed56a4b2b4_70311938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_143601709959beed56a4b2b4_70311938',
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
class Block_200341248959beed56a5acb3_87230873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_200341248959beed56a5acb3_87230873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
