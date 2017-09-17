<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-17 21:52:53
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\login\confirmation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59beeeb53405a7_75182371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8142d2b54f31a9fcebd49d735b0a11f4335844ee' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\login\\confirmation.tpl',
      1 => 1503858549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59beeeb53405a7_75182371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125077155659beeeb533cbe7_86143724', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9607195759beeeb533f184_94191267', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/login_layout.tpl');
}
/* {block "body"} */
class Block_125077155659beeeb533cbe7_86143724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_125077155659beeeb533cbe7_86143724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="alert alert-success" style="width:100%;margin-top:100px;" role="alert">
            <h6>Succes!</h6>
            Ti-am trimis un email de confirmare pe adresa furnizata. Verifica-ti emailul si apasa pe link-ul de confirmare pentru a reseta parola.
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_9607195759beeeb533f184_94191267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9607195759beeeb533f184_94191267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
