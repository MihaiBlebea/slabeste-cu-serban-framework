<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-12 23:25:03
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\modal-lead-two-fields-no-img.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a30654f875798_79025306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e283527edfd468a3a5a0abb76640fe46072b0571' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\modal-lead-two-fields-no-img.tpl',
      1 => 1513120973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a30654f875798_79025306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'modal_title');?>
</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="progress mb-4">
                    <div id="progress-bar" class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width: 25%"></div>
                </div>

                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/autoresponder/catch" method="POST">
                    <div class="mb-2">
                        <label class="form-control-label">Prenumele tau:</label>
                        <input id="name" onchange="Landing.validateName(event);" data-type="error" type="text" class="form-control" name="name" placeholder="Maria" required>
                        <div class="invalid-feedback">Numele nu poate fi mai scurt de 3 litere</div>
                    </div>

                    <div class="mb-2">
                        <label class="form-control-label">Emailul tau:</label>
                        <input id="email" data-error-message="Verifica adresa de email" onchange="Landing.validateEmail(event);" type="text" class="form-control" name="email" autocomplete="off" placeholder="@" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <input type="hidden" name="program_tag" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['landing']->value->program_tag)===null||$tmp==='' ? 'false' : $tmp);?>
">
                    <input type="hidden" name="code" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['landing']->value->code)===null||$tmp==='' ? 'false' : $tmp);?>
">
                    <input type="hidden" name="redirect" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['redirect']->value)===null||$tmp==='' ? 'false' : $tmp);?>
">

                    <div class="mt-3">
                        <button id="button-confirm" class="btn btn-primary" style="display:block;margin:auto;" type="submit"><?php echo $_smarty_tpl->tpl_vars['cta_modal']->value;?>
</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    // function validateName()
    // {
    //     let name = document.getElementById('name');
    //     name.classList.remove('is-invalid');
    //     activateButton();
    //
    //     if(name.value.length < 3)
    //     {
    //         name.classList.add('is-invalid');
    //         disableButton();
    //     }
    // }
    //
    // function validateEmail()
    // {
    //     let email = document.getElementById('email');
    //     email.classList.remove('is-invalid');
    //     activateButton();
    //
    //     if(email.value.length < 7)
    //     {
    //         email.classList.add('is-invalid');
    //         disableButton();
    //     }
    //
    //     if(email.value.includes('@') == false)
    //     {
    //         email.classList.add('is-invalid');
    //         disableButton();
    //     }
    // }
    //
    // function disableButton()
    // {
    //     let button = document.getElementById('button');
    //     button.disabled = true;
    // }
    //
    // function activateButton()
    // {
    //     let button = document.getElementById('button');
    //     button.disabled = false;
    // }
<?php echo '</script'; ?>
>
<?php }
}
