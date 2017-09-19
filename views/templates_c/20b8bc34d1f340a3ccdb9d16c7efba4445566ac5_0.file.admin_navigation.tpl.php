<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-19 22:41:49
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin\admin_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c19d2d61d937_17705137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b8bc34d1f340a3ccdb9d16c7efba4445566ac5' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin\\admin_navigation.tpl',
      1 => 1505860713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c19d2d61d937_17705137 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/products">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/clients">Clients</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/transactions">Transactions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/logout">Logout</a>
    </li>
</ul>
<?php }
}
