<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-22 21:55:10
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\create_action.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c586be6084f8_26368046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f06317d4a36a62b1f596ada4a6427fb63c20c3c' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\create_action.tpl',
      1 => 1506117283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c586be6084f8_26368046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168405988159c586be5e8443_66977374', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167001007759c586be606173_17791045', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_168405988159c586be5e8443_66977374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_168405988159c586be5e8443_66977374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create a NEW action</h4>
                <h6 class="card-subtitle mb-2 text-muted">Create new action for landing page <?php echo $_smarty_tpl->tpl_vars['landing']->value->name;?>
</h6>
                <hr />
                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/action/create" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Action name:</label>
                                <input name="name" type="text" class="form-control" value="" placeholder="Place a name for your new action">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Code:</label>
                                <input name="code" type="text" class="form-control" value="" placeholder="Give a unique code for your action">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Start from count:</label>
                                <input name="count" type="text" class="form-control" value="0">
                            </div>
                        </div>
                    </div>
                    <input name="landing_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
">

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
" class="card-link">Back to landing</a><br />
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
class Block_167001007759c586be606173_17791045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_167001007759c586be606173_17791045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
