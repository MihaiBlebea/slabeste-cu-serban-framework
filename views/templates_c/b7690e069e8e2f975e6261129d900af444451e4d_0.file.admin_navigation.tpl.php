<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-19 22:32:19
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c19af3d30440_19208680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7690e069e8e2f975e6261129d900af444451e4d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin_navigation.tpl',
      1 => 1504046213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c19af3d30440_19208680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/index">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/product/products">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/client/clients">Clients</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/transaction/get-transactions">Transactions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login/logout">Logout</a>
    </li>
</ul>
<?php }
}
