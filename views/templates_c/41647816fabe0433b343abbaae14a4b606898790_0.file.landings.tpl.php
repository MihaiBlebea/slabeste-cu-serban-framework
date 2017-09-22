<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-22 20:23:28
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\landings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c57140077675_75386608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41647816fabe0433b343abbaae14a4b606898790' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\landings.tpl',
      1 => 1506111805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c57140077675_75386608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88748957359c57140049395_19265827', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174725001259c57140075797_00199178', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_88748957359c57140049395_19265827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_88748957359c57140049395_19265827',
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

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Code</th>
                            <th>Template</th>
                            <th>Count</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['landings']->value, 'landing', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['landing']->value) {
?>
                            <tr>
                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->program_tag;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->template;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['landing']->value->count;?>
</td>
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
                <hr />
                <div class="row">
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
class Block_174725001259c57140075797_00199178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_174725001259c57140075797_00199178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
