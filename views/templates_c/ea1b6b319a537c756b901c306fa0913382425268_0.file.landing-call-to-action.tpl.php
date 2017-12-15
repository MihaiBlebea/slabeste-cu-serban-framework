<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-15 21:52:47
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\landing-call-to-action.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a34442f151274_82167042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea1b6b319a537c756b901c306fa0913382425268' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\landing-call-to-action.tpl',
      1 => 1513374764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a34442f151274_82167042 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <h3 class="text-center mb-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
        <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 btn-lg"><?php echo $_smarty_tpl->tpl_vars['cta']->value;?>
</button>
    </div>
</div>
<?php }
}
