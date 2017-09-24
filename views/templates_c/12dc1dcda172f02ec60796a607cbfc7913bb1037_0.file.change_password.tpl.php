<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 17:36:48
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\change_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7ed307fbcc0_28736720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12dc1dcda172f02ec60796a607cbfc7913bb1037' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\change_password.tpl',
      1 => 1506274604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7ed307fbcc0_28736720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149225208059c7ed307ec2b3_43635394', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148344331959c7ed307f9838_78324750', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login/login_layout.tpl');
}
/* {block "body"} */
class Block_149225208059c7ed307ec2b3_43635394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_149225208059c7ed307ec2b3_43635394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Schimba parola</h4>
                <h6 class="card-subtitle mb-2 text-muted">Introdu de 2 ori parola ta</h6>
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/change-password">
                    <div class="form-group row">
                        <label class="col-form-label">Username: <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong></label>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Seteaza noua parola</label>
                        <input onkeyup="getFormData();" id="password1" type="password" name="password1" class="form-control" placeholder="Noua parola">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Repeta parola</label>
                        <input onkeyup="getFormData();" id="password2" type="password" name="password2" class="form-control" placeholder="Noua parola">
                    </div>
                    <input type="hidden" name="username" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
                    <input disabled id="submit-button" type="submit" class="btn btn-primary btn-lg btn-block" value="Parola nu coincide">
                </form>

                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login" class="card-link">Inapoi la formular</a><br />
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        function getFormData()
        {
            var password1 = document.getElementById('password1').value;
            var password2 = document.getElementById('password2').value;
            if(password1 == password2)
            {
                document.getElementById("submit-button").disabled = false;
                document.getElementById("submit-button").value = "Salveaza parola";
            } else {
                document.getElementById("submit-button").disabled = true;
                document.getElementById("submit-button").value = "Parola nu coincide";
            }
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_148344331959c7ed307f9838_78324750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_148344331959c7ed307f9838_78324750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
