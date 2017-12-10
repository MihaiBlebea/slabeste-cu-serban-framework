<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-10 14:01:59
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\landings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a2d3e5705e4f5_14876384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41647816fabe0433b343abbaae14a4b606898790' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\landings.tpl',
      1 => 1512914463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-paginate-notification.tpl' => 1,
    'file:partials/admin-pagination.tpl' => 1,
  ),
),false)) {
function content_5a2d3e5705e4f5_14876384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_467158595a2d3e5702bdd7_29111196', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19772462825a2d3e5705d045_27682963', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_467158595a2d3e5702bdd7_29111196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_467158595a2d3e5702bdd7_29111196',
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
                        <h4 class="card-title">Manage landing pages</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Edit landing pages</h6>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Search by
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" onclick="sendSearch('program_tag');">Product</a>
                                    <a class="dropdown-item" onclick="sendSearch('code');">Code</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>
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
                            <th>Program</th>
                            <th>Code</th>
                            <th>Template</th>
                            <th>Traffic</th>
                            <th>Conv %</th>
                            <th>Reset</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['landings']->value, 'landing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['landing']->value) {
?>
                            <tr>
                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['landing']->value->index;?>
</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->program_tag;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/landing/<?php echo $_smarty_tpl->tpl_vars['landing']->value->program_tag;?>
/<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['landing']->value->template;?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->count;?>
</td>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['landing']->value->conversionRate();?>
%</strong></td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/reset/<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
">Reset</a></td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
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
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"landings"), 0, false);
?>

                <!-- Pagination end -->

                <hr />
                <div class="row">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/create" class="card-link">Create a new landing</a><br />
                    </div>
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landings" class="card-link" style="color:red;float: right;">Reset search</a><br />
                    </div>
                </div>
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
/admin/landing/search/" + search + "/" + mode;
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_19772462825a2d3e5705d045_27682963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19772462825a2d3e5705d045_27682963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
