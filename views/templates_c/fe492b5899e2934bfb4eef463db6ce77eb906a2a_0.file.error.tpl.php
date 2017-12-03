<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-03 14:32:03
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\misc\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a240ae3ef0345_52363762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe492b5899e2934bfb4eef463db6ce77eb906a2a' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\misc\\error.tpl',
      1 => 1504039117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a240ae3ef0345_52363762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2412139985a240ae3eea601_13069781', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20730158935a240ae3eed913_09379180', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/misc/misc_layout.tpl');
}
/* {block "body"} */
class Block_2412139985a240ae3eea601_13069781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2412139985a240ae3eea601_13069781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h4 class="card-title">404 - Un cod ciudat</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Nu intra in panica,asta inseamna doar ca pagina pe care o cauti nu exista</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button type="button" class="btn btn-primary btn-lg">Vreau sa ajung acasa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_20730158935a240ae3eed913_09379180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20730158935a240ae3eed913_09379180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
