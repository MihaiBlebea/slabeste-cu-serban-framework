<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-17 20:12:17
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\membership\membership_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59bed721b96c10_20756858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d345e18312c53e953d8985e4b52758c3e633aa1' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\membership\\membership_navigation.tpl',
      1 => 1505679134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bed721b96c10_20756858 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav top">
    <li class="nav-item top">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/membership/index">Home</a>
    </li>
    <li class="nav-item top">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login/logout">Logout</a>
    </li>
    <!--
    <li class="nav-item top">
        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login/logout"></a>
    </li>
    -->
</ul>
<?php }
}
