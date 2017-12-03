<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-03 15:16:11
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\landing-steps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a24153bc890b3_58948580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fee66b83c302e2c963f5c21fe24096a5a4ee41d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\landing-steps.tpl',
      1 => 1512314168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a24153bc890b3_58948580 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="steps" class="row steps">
    <div class="steps-container row">
        <div class="step row col-md-4 col-sm-12 col-xs-12 align-items-center">
            <div class="step-number col-2">
                1
            </div>
            <div class="step-text col-10">
                <div class="step-title">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_1_title');?>

                </div>
                <div class="step-content">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_1_subtitle');?>

                </div>
            </div>
        </div>
        <div class="step row col-md-4 align-items-center">
            <div class="step-number col-2">
                2
            </div>
            <div class="step-text col-10">
                <div class="step-title">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_2_title');?>

                </div>
                <div class="step-content">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_2_subtitle');?>

                </div>
            </div>
        </div>
        <div class="step row col-md-4 align-items-center">
            <div class="step-number col-2">
                3
            </div>
            <div class="step-text col-10">
                <div class="step-title">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_3_title');?>

                </div>
                <div class="step-content">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_3_subtitle');?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
