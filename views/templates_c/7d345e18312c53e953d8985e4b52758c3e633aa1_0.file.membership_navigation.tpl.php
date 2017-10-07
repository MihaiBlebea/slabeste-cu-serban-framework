<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-07 16:18:29
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\membership\membership_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d8fe55431b72_46704667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d345e18312c53e953d8985e4b52758c3e633aa1' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\membership\\membership_navigation.tpl',
      1 => 1507393105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d8fe55431b72_46704667 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav top mr-auto">
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
