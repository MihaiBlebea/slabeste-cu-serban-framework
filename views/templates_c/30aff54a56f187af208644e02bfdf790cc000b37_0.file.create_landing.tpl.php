<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-22 23:43:19
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\create_landing.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c5a017bda011_38095739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30aff54a56f187af208644e02bfdf790cc000b37' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\create_landing.tpl',
      1 => 1506123797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c5a017bda011_38095739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8424846459c5a017bbfcd2_68359903', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167327475259c5a017bd8254_00538908', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_8424846459c5a017bbfcd2_68359903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8424846459c5a017bbfcd2_68359903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Landing Page</h4>
                <h6 class="card-subtitle mb-2 text-muted">Create NEW landing page</h6>
                <hr />

                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/create" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Landing page name:</label>
                                <input name="name" type="text" class="form-control" value="" placeholder="Add a sugestive name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Code:</label>
                                <input name="code" type="text" class="form-control" value="" placeholder="Select a simple code">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Template:</label>
                                <!-- <input name="template" type="text" class="form-control" value="" placeholder="Select a template"> -->
                                <select name="template" class="form-control">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value["name"];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Link for CTA:</label>
                                <input name="link" type="text" class="form-control" value="" placeholder="Select a link for the call to action">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program tag:</label>
                                <select name="program_tag" class="form-control">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['program']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landings" class="card-link">Back to landing pages</a><br />
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
class Block_167327475259c5a017bd8254_00538908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_167327475259c5a017bd8254_00538908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
