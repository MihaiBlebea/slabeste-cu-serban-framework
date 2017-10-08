<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-08 11:26:21
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\clients.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59da0b5d963888_97972831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ea9704e02802b4387350eab01235ac7184c7a8' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\clients.tpl',
      1 => 1507461978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/admin/admin_paginate_notification.tpl' => 1,
    'file:layouts/admin/admin_pagination.tpl' => 1,
  ),
),false)) {
function content_59da0b5d963888_97972831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105472604359da0b5d92cf09_82040569', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5948538659da0b5d962071_76985760', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_105472604359da0b5d92cf09_82040569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_105472604359da0b5d92cf09_82040569',
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
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Search by
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" onclick="sendSearch('id');">ID</a>
                                    <a class="dropdown-item" onclick="sendSearch('username');">Username</a>
                                    <a class="dropdown-item" onclick="sendSearch('email');">Email</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Products</th>
                            <th>Spent</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                            <tr>
                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value->index;?>
</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->programsBought;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->totalMoney;?>
 RON</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/id">Edit</a></td>
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
                <?php $_smarty_tpl->_subTemplateRender("file:layouts/admin/admin_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"clients"), 0, false);
?>

                <!-- Pagination end -->
                <hr />

                <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/create" class="card-link">Create a new client</a><br />
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        function getSearch()
        {
            return search = document.getElementById('search-input').value;
        }

        function sendSearch(mode)
        {
            var client = getSearch();
            return window.location="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/" + client + "/" + mode;
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_5948538659da0b5d962071_76985760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5948538659da0b5d962071_76985760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
