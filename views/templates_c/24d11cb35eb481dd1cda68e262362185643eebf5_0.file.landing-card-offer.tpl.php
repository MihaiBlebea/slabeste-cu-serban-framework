<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 22:43:29
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\landing-card-offer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a417f115a8258_58573642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d11cb35eb481dd1cda68e262362185643eebf5' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\landing-card-offer.tpl',
      1 => 1513435135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a417f115a8258_58573642 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card-body">
    <h4 class="offer-text-1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
    <h4 class="offer-text-2"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</h4>
    <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-primary btn-lg" style="margin:auto;margin-top:30px;display:block;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_page');?>
</button>
</div>
<?php }
}
