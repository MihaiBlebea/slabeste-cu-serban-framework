<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-29 15:39:18
  from 'C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\admin\admin-navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4661a6bbaa21_23498156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '536ebc1682925a68f914009ff1f5face4282dacb' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\admin\\admin-navigation.tpl',
      1 => 1514235029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4661a6bbaa21_23498156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<ul class="nav top menu-desktop">
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
/admin/analytics">Analytics</a>
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

<div class="pos-f-t menu-mobile">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white mb-2">Menu:</h4>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/main">Home</a>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/programs">Products</a>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/clients">Clients</a>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/transactions">Transactions</a>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landings">Landings</a>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/analytics">Analytics</a>
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/home">Go to membership</a>
            <hr />
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13240369895a4661a6bb7c02_57575595', "mobile-menu");
?>

            <hr />
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/logout">Logout</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/account">Contul Meu</a>
        </div>
    </div>
    <nav class="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i style="color: white;" class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/home">Home</a>
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/logout">Logout</a>
    </nav>
</div>
<?php }
/* {block "mobile-menu"} */
class Block_13240369895a4661a6bb7c02_57575595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_13240369895a4661a6bb7c02_57575595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "mobile-menu"} */
}
