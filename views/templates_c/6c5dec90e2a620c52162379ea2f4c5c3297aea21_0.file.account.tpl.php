<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-07 17:19:19
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\home\account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d90c97186b89_84129326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c5dec90e2a620c52162379ea2f4c5c3297aea21' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\home\\account.tpl',
      1 => 1507396757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d90c97186b89_84129326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39056804259d90c9715b928_44467850', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128379553559d90c97184831_81175666', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/home_page_layout.tpl');
}
/* {block "body"} */
class Block_39056804259d90c9715b928_44467850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_39056804259d90c9715b928_44467850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" role="alert">
            <strong><?php echo $_smarty_tpl->tpl_vars['errorTitle']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
.
        </div>
    <?php }?>
    <div class="card">
        <div class="card-header">
            Contul meu
        </div>
        <div style="padding:20px;" class="card-block">
            <div class="row">
                <div class="col">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/account" method="POST">
                        <h4 class="card-title">Modifica setarile contului tau</h4>
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username:</label>
                                <input type="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">
                                <small class="form-text text-muted">Username-ul tau este unic si nu poate fi modificat</small>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div id="password-error" class="alert alert-danger" role="alert">
                                <strong>Atentie!</strong> Cele 2 campuri cu parole nu coincid.
                            </div>
                            <label for="exampleInputEmail1">Schimba parola:</label>
                            <input id="password1" onkeyup="checkIfPasswordMatch();" name="password1" type="password" class="form-control" id="password1" placeholder="Introdu noua parola">
                            <small class="form-text text-muted">Completeaza doar daca doresti sa modifici parola.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Repeta noua parola:</label>
                            <input id="password2" onkeyup="checkIfPasswordMatch();" name="password2" type="password" class="form-control" id="password2" placeholder="Repeta noua parola">
                            <small class="form-text text-muted">Repeta parola de mai sus</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Introdu emailul tau" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                            <small id="emailHelp" class="form-text text-muted">Schimba-ti emailul activ de pe site</small>
                        </div>
                        <button id="submit-button" type="submit" class="btn btn-primary" style="cursor:pointer;">Salveaza modificarile</button>
                    </form>
                    </div>
                    <div class="col">
                        <h4 class="card-title">Programele mele</h4>
                        <ul class="list-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['program']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['program']->value->owned == true) {?>
                                    <li class="list-group-item"><a class="card-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;
echo $_smarty_tpl->tpl_vars['program']->value->main_page;?>
"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</a></li>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </ul>
                    </div>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/home" class="card-link">Inapoi la pagina principala</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_128379553559d90c97184831_81175666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_128379553559d90c97184831_81175666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        document.getElementById("password-error").style.display = "none";
        function checkIfPasswordMatch()
        {
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;

            if(password1 !== password2)
            {
                document.getElementById("password-error").style.display = "block";
                document.getElementById("submit-button").disabled = true;
            } else {
                document.getElementById("password-error").style.display = "none";
                document.getElementById("submit-button").disabled = false;
            }
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
