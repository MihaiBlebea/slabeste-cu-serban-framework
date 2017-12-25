<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:57:43
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\analytics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a41664700a936_20970076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7e08351102f9764f3fcee5b99d5e1b19f1fa55' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\analytics.tpl',
      1 => 1514235456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin/search.tpl' => 1,
  ),
),false)) {
function content_5a41664700a936_20970076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13248580105a416646f2e243_77559047', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12983588285a416646f362d8_34284654', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8767936055a416646f384c4_25652758', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "mobile-menu"} */
class Block_13248580105a416646f2e243_77559047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_13248580105a416646f2e243_77559047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/create/new" class="nav-link active">Create a new client</a>
<?php
}
}
/* {/block "mobile-menu"} */
/* {block "sidebar"} */
class Block_12983588285a416646f362d8_34284654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_12983588285a416646f362d8_34284654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/create/new" class="card-link">Create a new client</a>
<?php
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_8767936055a416646f384c4_25652758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8767936055a416646f384c4_25652758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value == true) {?>
            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['errorType']->value;?>
" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

            </div>
        <?php }?>
        <div class="card">
            <div class="card-body">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-lg-6">
                        <h4 class="card-title">Analytics</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Manage traffic and events</h6>
                    </div>
                    <div class="col-lg-6">
                        <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:partials/admin/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/admin/clients",'options'=>$_smarty_tpl->tpl_vars['options']->value), 0, false);
?>

                        <?php }?>
                    </div>
                </div>
                <hr />

                <!-- Paginate notification start -->
                
                <!-- Paginate notification end -->

                <div class="row d-none d-md-flex">
                    <div class="col-md-3 elipsis">
                        Name
                    </div>
                    <div class="col-md-2 elipsis">
                        Username
                    </div>
                    <div class="col-md-4 elipsis">
                        Email
                    </div>
                    <div class="col-md-1 elipsis">
                        Prod.
                    </div>
                    <div class="col-md-2 elipsis">
                        <span class="float-md-right">Spent</span>
                    </div>
                </div>
                <hr />
                


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
