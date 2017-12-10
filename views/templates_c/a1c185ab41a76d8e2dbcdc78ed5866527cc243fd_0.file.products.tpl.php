<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-10 17:00:02
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a2d68122c9135_69421471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c185ab41a76d8e2dbcdc78ed5866527cc243fd' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\products.tpl',
      1 => 1512925195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-paginate-notification.tpl' => 1,
    'file:partials/admin-pagination.tpl' => 1,
  ),
),false)) {
function content_5a2d68122c9135_69421471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2513493195a2d68115c3c33_66175359', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1350902625a2d68122c74a0_42449346', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_2513493195a2d68115c3c33_66175359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2513493195a2d68115c3c33_66175359',
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
/admin/program/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
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
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"programs"), 0, false);
?>

                <!-- Pagination end -->

                <hr />
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/program/create" class="card-link">Create a new program</a><br />
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_1350902625a2d68122c74a0_42449346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1350902625a2d68122c74a0_42449346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
