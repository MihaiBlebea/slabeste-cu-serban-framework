<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-17 19:42:15
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59bed0171d8519_83118396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe572023c711fbe77fbeebf88db6dfccc39a8d7' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\index.tpl',
      1 => 1505677328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bed0171d8519_83118396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172298199059bed0171c3a00_56962537', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132161753359bed0171d7101_49465639', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login_layout.tpl');
}
/* {block "body"} */
class Block_172298199059bed0171c3a00_56962537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_172298199059bed0171c3a00_56962537',
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

                <a href="#" class="card-link">Cum pot sa-mi fac un cont?</a><br />
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login/recover" class="card-link">Ups, mi-am uitat parola!</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_132161753359bed0171d7101_49465639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_132161753359bed0171d7101_49465639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
