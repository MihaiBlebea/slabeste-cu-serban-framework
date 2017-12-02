<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 18:46:23
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\notification.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a22f4ffe74133_75359400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b235f1380236a2eb22828f811e4e21c0904cde2e' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\notification.tpl',
      1 => 1512240025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22f4ffe74133_75359400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
