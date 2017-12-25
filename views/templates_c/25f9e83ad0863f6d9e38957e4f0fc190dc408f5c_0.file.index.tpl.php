<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 21:03:04
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a41678825c959_02921682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f9e83ad0863f6d9e38957e4f0fc190dc408f5c' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\index.tpl',
      1 => 1505860465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a41678825c959_02921682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3636045665a416788252ed5_95286845', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12588736995a41678825b537_08549721', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_3636045665a416788252ed5_95286845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3636045665a416788252ed5_95286845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Admin zone</h4>
                <h6 class="card-subtitle mb-2 text-muted">Foloseste datele de logare</h6>
                <hr />


                <a href="#" class="card-link">Cum pot sa-mi fac un cont?</a><br />
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/login/recover" class="card-link">Ups, mi-am uitat parola!</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_12588736995a41678825b537_08549721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12588736995a41678825b537_08549721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
