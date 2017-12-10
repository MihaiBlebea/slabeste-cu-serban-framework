<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-10 17:03:21
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\edit_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a2d68d9cf14d9_34388607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a71f9cddb098511e3521367bfd5afea0c8fc76f0' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\edit_product.tpl',
      1 => 1512925399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d68d9cf14d9_34388607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3627207085a2d68d9cdb701_72296100', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17345587495a2d68d9cf0115_36672699', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_3627207085a2d68d9cdb701_72296100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3627207085a2d68d9cdb701_72296100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</h4>
                <h6 class="card-subtitle mb-2 text-muted">Last updated <?php echo $_smarty_tpl->tpl_vars['program']->value->regdate;?>
</h6>
                <hr />
                <img src="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
" class="program-image"/>
                <hr />
                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/program/update" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program name:</label>
                                <input name="program_name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program tag:</label>
                                <input name="program_tag" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program price:</label>
                                <input name="program_price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program sales page:</label>
                                <input name="program_sales_page" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_sales_page;?>
">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Braintree plan ID:</label>
                                <input name="plan_id" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->plan_id;?>
" placeholder="NULL if product is not subscription">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program status:</label>
                                <select name="program_status" class="form-control">
                                    <option value="0">Disable</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program type:</label>
                                <select name="program_type" class="form-control">
                                    <option value="simple">Simple</option>
                                    <option value="subscription">Subscription</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program image:</label>
                                <input name="program_image" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Main page:</label>
                                <input name="main_page" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->main_page;?>
">
                            </div>
                        </div>
                    </div>
                    <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->id;?>
">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/programs" class="card-link">Back to products</a><br />
                    </div>
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/program/delete/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
" class="card-link" style="color:red;float: right;">Delete program</a><br />
                    </div>
                <div class="row">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_17345587495a2d68d9cf0115_36672699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17345587495a2d68d9cf0115_36672699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
