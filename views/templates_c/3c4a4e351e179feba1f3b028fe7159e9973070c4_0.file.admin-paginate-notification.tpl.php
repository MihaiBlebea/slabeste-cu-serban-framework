<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:46:51
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\admin-paginate-notification.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a4163bba1cc96_31854305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c4a4e351e179feba1f3b028fe7159e9973070c4' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\admin-paginate-notification.tpl',
      1 => 1512914301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4163bba1cc96_31854305 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['previousPage']->value > 0) {?>
    <div class="alert alert-info" style="width:100%;" role="alert">
        <strong>Page <?php echo $_smarty_tpl->tpl_vars['previousPage']->value+1;?>
</strong>
    </div>
<?php }
}
}
