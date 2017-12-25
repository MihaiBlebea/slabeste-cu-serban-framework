<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 22:43:29
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\modal-lead-two-fields-no-img.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a417f1138dab8_91795128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e283527edfd468a3a5a0abb76640fe46072b0571' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\modal-lead-two-fields-no-img.tpl',
      1 => 1513441719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/notification.tpl' => 1,
    'file:partials/landing-loading.tpl' => 1,
  ),
),false)) {
function content_5a417f1138dab8_91795128 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width: 25%"></div>
                </div>

                <div id="error" style="display:none;">
                    <?php $_smarty_tpl->_subTemplateRender('file:partials/notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'message'=>"Din pacate ceva nu a functionat corect. Te rugam sa incerci din nou."), 0, false);
?>

                </div>

                <div id="loading" style="display:none;">
                    <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>

                <form data-redirect="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'redirect');?>
"
                      data-list="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'list');?>
"
                      data-automation="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'automation');?>
"
                      data-tag="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tag');?>
"
                      data-post="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/api/autoresponder/catch"
                      data-query="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'query');?>
">

                    <div class="mb-2">
                        <label class="form-control-label">Prenumele tau:</label>
                        <input id="name" onkeyup="Landing.validateName(event);" data-type="error" type="text" class="form-control" name="name" placeholder="Maria" required>
                        <div class="invalid-feedback">Numele nu poate fi mai scurt de 3 litere</div>
                    </div>

                    <div class="mb-2">
                        <label class="form-control-label">Emailul tau:</label>
                        <input id="email" data-error-message="Verifica adresa de email" onkeyup="Landing.validateEmail(event);" type="text" class="form-control" name="email" autocomplete="off" placeholder="@" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mt-3">
                        <button onclick="Landing.addSubscriber(event);"
                                id="button-confirm"
                                class="btn btn-warning"
                                style="display:block;margin:auto;"><?php echo $_smarty_tpl->tpl_vars['cta_modal']->value;?>
</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
