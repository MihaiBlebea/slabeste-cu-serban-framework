<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 22:30:20
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\landing\modal_name_email.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c9837c054647_31270739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48548098052c817838ac53eed166a1f3e20d213a' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\landing\\modal_name_email.tpl',
      1 => 1506378615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c9837c054647_31270739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'modal_title');?>
</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/autoresponder/catch" method="POST">
                    <div class="form-group">
                        <label class="form-control-label" for="formGroupExampleInput">Prenumele tau:</label>
                        <input onkeyup="getInput('name');validate('name');" name="name" type="text" class="form-control" id="name" autocomplete="off" placeholder="Introdu doar prenumele tau">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="formGroupExampleInput2">Emailul tau principal:</label>
                        <input onkeyup="getInput('email');validate('email');" name="email" type="text" class="form-control" id="email" autocomplete="off" placeholder="Introdu emailul tau pe care vrei sa primesti materialele">
                    </div>
                    <input type="hidden" name="page_code" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
">
                    <div class="form-group" style="display: flex;justify-content: center;">
                        <input id="submit" type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_modal');?>
">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
