<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-21 21:38:50
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\confirmation\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c4316a88b865_11521228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9486c9431bec1490dab14160efde3a3b5940f5f7' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\confirmation\\index.tpl',
      1 => 1503768554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c4316a88b865_11521228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140149961559c4316a87dd95_34101997', "nav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116188351759c4316a8802a7_39849672', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193705231659c4316a88a3e3_32774559', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/confirmation_layout.tpl');
}
/* {block "nav"} */
class Block_140149961559c4316a87dd95_34101997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_140149961559c4316a87dd95_34101997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
<?php
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_116188351759c4316a8802a7_39849672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_116188351759c4316a8802a7_39849672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <p><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['programImage']->value;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['mainPage']->value;?>
</p>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_193705231659c4316a88a3e3_32774559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_193705231659c4316a88a3e3_32774559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
