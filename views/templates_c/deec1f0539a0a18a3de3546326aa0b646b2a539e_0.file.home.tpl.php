<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-17 18:54:08
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59bec4d03bc2c7_95498360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deec1f0539a0a18a3de3546326aa0b646b2a539e' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\home.tpl',
      1 => 1505558389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bec4d03bc2c7_95498360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209638628459bec4d0225f22_82214681', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191842629459bec4d03ba792_55082707', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "body"} */
class Block_209638628459bec4d0225f22_82214681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_209638628459bec4d0225f22_82214681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_191842629459bec4d03ba792_55082707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_191842629459bec4d03ba792_55082707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
