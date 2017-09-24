<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 17:49:19
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\confirmation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7f01f368e02_63043983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8142d2b54f31a9fcebd49d735b0a11f4335844ee' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\confirmation.tpl',
      1 => 1506275352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7f01f368e02_63043983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168251977259c7f01f354505_74368017', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127890748659c7f01f3672a0_79996986', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login/login_layout.tpl');
}
/* {block "body"} */
class Block_168251977259c7f01f354505_74368017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_168251977259c7f01f354505_74368017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" style="width:100%;margin-top:100px;" role="alert">
                <h6 style="text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
!</h6>
                <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

            </div>
        <?php }?>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_127890748659c7f01f3672a0_79996986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_127890748659c7f01f3672a0_79996986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
