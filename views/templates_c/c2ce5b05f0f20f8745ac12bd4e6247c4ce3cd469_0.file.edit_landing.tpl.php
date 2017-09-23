<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-23 14:58:49
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\edit_landing.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c676a978c0c0_34526975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2ce5b05f0f20f8745ac12bd4e6247c4ce3cd469' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\edit_landing.tpl',
      1 => 1506178727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c676a978c0c0_34526975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169164359759c676a9756cb7_49636698', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34665489059c676a978ac97_17289567', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_169164359759c676a9756cb7_49636698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_169164359759c676a9756cb7_49636698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['landing']->value->name;?>
</h4>
                <h6 class="card-subtitle mb-2 text-muted">Last updated <?php echo $_smarty_tpl->tpl_vars['landing']->value->start_time;?>
</h6>
                <hr />

                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/update" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Landing page name:</label>
                                <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->name;?>
">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Code:</label>
                                <input name="code" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Template:</label>
                                <!-- <input name="template" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->template;?>
"> -->
                                <select name="template" class="form-control">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['template']->value["name"] == $_smarty_tpl->tpl_vars['landing']->value->template) {?>
                                            <option selected value="<?php echo $_smarty_tpl->tpl_vars['template']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value["name"];?>
</option>
                                        <?php } else { ?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value["name"];?>
</option>
                                        <?php }?>
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
                                <input name="link" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->link;?>
">
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
                                        <?php if ($_smarty_tpl->tpl_vars['program']->value->program_tag == $_smarty_tpl->tpl_vars['landing']->value->program_tag) {?>
                                            <option selected value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</option>
                                        <?php } else { ?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</option>
                                        <?php }?>
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
                                <label for="exampleFormControlInput1">Autoresponder list ID</label>
                                <input name="autoresponder_list" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->autoresponder_list;?>
">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Automation ID string</label>
                                <input name="autoresponder_automation" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->autoresponder_automation;?>
" placeholder="Add id's as strings">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tags string</label>
                                <input name="tags" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->tags;?>
" placeholder="Add tags's as strings">
                            </div>
                        </div>
                    </div>
                    <hr />
                    <?php if ($_smarty_tpl->tpl_vars['landing']->value->lead_count !== '') {?>
                        <strong>Conversion Rate: <?php echo $_smarty_tpl->tpl_vars['landing']->value->conversionRate();?>
%</strong>
                    <?php }?>
                    <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['landing']->value->id;?>
">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>
                <hr />
                <div class="row">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landings" class="card-link">Back to landing pages</a><br />
                    </div>
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/landing/delete/<?php echo $_smarty_tpl->tpl_vars['landing']->value->code;?>
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
class Block_34665489059c676a978ac97_17289567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_34665489059c676a978ac97_17289567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
