<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-16 21:43:48
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin\admin_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a359394888df0_89576224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b8bc34d1f340a3ccdb9d16c7efba4445566ac5' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin\\admin_navigation.tpl',
      1 => 1512215898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a359394888df0_89576224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/main">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/programs">Products</a>
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
/admin/landings">Landings</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/home">Go to membership</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/logout">Logout</a>
    </li>
</ul>
<?php }
}