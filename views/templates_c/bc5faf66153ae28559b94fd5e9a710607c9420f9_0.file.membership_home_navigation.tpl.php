<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-10 20:13:53
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\membership\membership_home_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59dd2a01207de5_10858250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc5faf66153ae28559b94fd5e9a710607c9420f9' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\membership\\membership_home_navigation.tpl',
      1 => 1507666355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd2a01207de5_10858250 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav top menu-desktop">
    <li class="nav-item top">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/home">Home</a>
    </li>
    <li class="nav-item top">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/account">Contul Meu</a>
    </li>
    <li class="nav-item top">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/logout">Logout</a>
    </li>
</ul>
<?php }
}
