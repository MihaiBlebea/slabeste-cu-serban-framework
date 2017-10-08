<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-08 11:23:38
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin\admin_paginate_notification.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59da0abac3eec3_23197391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29eae505938d3f257ee93f7b4673cd4bc8c5f52d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin\\admin_paginate_notification.tpl',
      1 => 1507461746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59da0abac3eec3_23197391 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['previousPage']->value > 0) {?>
    <div class="alert alert-info" style="width:100%;" role="alert">
        <strong>Page <?php echo $_smarty_tpl->tpl_vars['previousPage']->value+1;?>
</strong>
    </div>
<?php }
}
}
