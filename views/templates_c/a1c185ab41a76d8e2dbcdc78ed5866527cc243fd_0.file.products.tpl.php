<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:48:50
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a416432e45631_93247533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c185ab41a76d8e2dbcdc78ed5866527cc243fd' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\products.tpl',
      1 => 1514228829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-paginate-notification.tpl' => 1,
    'file:partials/admin-pagination.tpl' => 1,
  ),
),false)) {
function content_5a416432e45631_93247533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940949785a416432e18a46_56595858', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2213783475a416432e441e3_12631805', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_940949785a416432e18a46_56595858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_940949785a416432e18a46_56595858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['errorType']->value;?>
" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

            </div>
        <?php }?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All products</h4>
                <h6 class="card-subtitle mb-2 text-muted">Set up, edit and delete products</h6>
                <hr />

                <!-- Paginate notification start -->
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-paginate-notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Paginate notification end -->

                <div class="row d-none d-md-flex">
                    <div class="col-md-4 elipsis">
                        Name
                    </div>
                    <div class="col-md-4 elipsis">
                        Clients
                    </div>
                    <div class="col-md-4 elipsis">
                        Money
                    </div>
                </div>
                <hr />
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['program']->value) {
?>
                    <div class="row row-hover mb-2">
                        <div class="col-md-3 col-sm-6 elipsis">
                            <span class="mr-1"><?php echo $_smarty_tpl->tpl_vars['program']->value->index;?>
.</span> <?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>

                        </div>
                        <div class="col-md-2 col-sm-6 elipsis">
                            <span class="float-sm-right float-md-center"><?php echo $_smarty_tpl->tpl_vars['program']->value->sold;?>
<span class="ml-1 d-inline-flex d-sm-inline-flex d-md-none elipsis">clients</span></span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <hr />

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"programs"), 0, false);
?>

                <!-- Pagination end -->
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_2213783475a416432e441e3_12631805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2213783475a416432e441e3_12631805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
