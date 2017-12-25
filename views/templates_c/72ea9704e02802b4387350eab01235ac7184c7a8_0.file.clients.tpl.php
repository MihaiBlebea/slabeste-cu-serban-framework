<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:49:04
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\clients.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a416440bb8cf2_90777300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ea9704e02802b4387350eab01235ac7184c7a8' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\clients.tpl',
      1 => 1514226690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin/search.tpl' => 1,
    'file:partials/admin-paginate-notification.tpl' => 1,
    'file:partials/admin-pagination.tpl' => 1,
  ),
),false)) {
function content_5a416440bb8cf2_90777300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18926632755a416440b877e1_91848763', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8383992375a416440b906f9_80031463', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19963576785a416440b92931_50420529', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "mobile-menu"} */
class Block_18926632755a416440b877e1_91848763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_18926632755a416440b877e1_91848763',
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
class Block_8383992375a416440b906f9_80031463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_8383992375a416440b906f9_80031463',
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
class Block_19963576785a416440b92931_50420529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19963576785a416440b92931_50420529',
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
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-lg-6">
                        <h4 class="card-title">Manage clients</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Clients database</h6>
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
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-paginate-notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <div class="row row-hover mb-2" onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
'">
                        <div class="col-md-3 col-sm-6 elipsis">
                            <span class="mr-1"><?php echo $_smarty_tpl->tpl_vars['user']->value->index;?>
.</span> <?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>

                        </div>
                        <div class="col-md-2 col-sm-6 elipsis">
                            <span class="float-sm-right float-md-left"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
                        </div>
                        <div class="col-md-4 col-sm-4 elipsis">
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                        </div>
                        <div class="col-md-1 col-sm-4 d-flex">
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->programsBought;?>
<span class="ml-1 d-inline-flex d-sm-inline-flex d-md-none elipsis">products</span>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <span class="float-sm-right"><?php echo $_smarty_tpl->tpl_vars['user']->value->totalMoney;?>
 RON</span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <hr />
                <!-- Pagination start -->
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"clients"), 0, false);
?>

                <!-- Pagination end -->

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
