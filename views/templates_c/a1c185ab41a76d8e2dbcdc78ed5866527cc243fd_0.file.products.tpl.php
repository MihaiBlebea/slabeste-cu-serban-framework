<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-08 11:54:25
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59da11f1ebfb44_15820677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c185ab41a76d8e2dbcdc78ed5866527cc243fd' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\products.tpl',
      1 => 1507463651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/admin/admin_paginate_notification.tpl' => 1,
    'file:layouts/admin/admin_pagination.tpl' => 1,
  ),
),false)) {
function content_59da11f1ebfb44_15820677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192209670659da11f1e849a9_32244772', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44930532559da11f1ebd9e0_65782862', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_192209670659da11f1e849a9_32244772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_192209670659da11f1e849a9_32244772',
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
                <?php $_smarty_tpl->_subTemplateRender("file:layouts/admin/admin_paginate_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Paginate notification end -->

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Clients</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['program']->value) {
?>
                            <tr>
                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['program']->value->index;?>
</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['program']->value->sold;?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/program/<?php echo $_smarty_tpl->tpl_vars['program']->value->id;?>
">Edit</a></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                <?php $_smarty_tpl->_subTemplateRender("file:layouts/admin/admin_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"programs"), 0, false);
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
class Block_44930532559da11f1ebd9e0_65782862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_44930532559da11f1ebd9e0_65782862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
