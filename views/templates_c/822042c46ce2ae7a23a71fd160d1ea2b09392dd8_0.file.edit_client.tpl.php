<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-29 16:46:23
  from 'C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\edit_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a46715fd6ce65_02863561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '822042c46ce2ae7a23a71fd160d1ea2b09392dd8' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\edit_client.tpl',
      1 => 1514227219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a46715fd6ce65_02863561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2359893855a46715fd172d6_66324103', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10520132585a46715fd298e6_75549128', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2396812505a46715fd2e672_42694382', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "mobile-menu"} */
class Block_2359893855a46715fd172d6_66324103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_2359893855a46715fd172d6_66324103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/clients" class="nav-link active">Back to clients</a>
    <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="nav-link active" style="color:red;">Delete client</a>
    <?php }
}
}
/* {/block "mobile-menu"} */
/* {block "sidebar"} */
class Block_10520132585a46715fd298e6_75549128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_10520132585a46715fd298e6_75549128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/clients" class="card-link">Back to clients</a><br />
    <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="card-link" style="color:red;">Delete client</a>
    <?php }
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_2396812505a46715fd2e672_42694382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2396812505a46715fd2e672_42694382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Last updated <?php echo $_smarty_tpl->tpl_vars['user']->value->regdate;?>
</h6>
                <?php } else { ?>
                    <h4 class="card-title">Create a new client</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Take your time, no hurry</h6>
                <?php }?>
                <hr />

                <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/update" method="POST">
                <?php } else { ?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/create" method="POST">
                <?php }?>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">First name:</label>
                                <input name="first_name" type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->first_name)===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Last name:</label>
                                <input name="last_name" type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->last_name)===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password:</label>
                                <input name="password" type="text" class="form-control" placeholder="Leave empty if you don't want to change it">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email:</label>
                                <input name="email" type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->email)===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleSelect2">Add more programs</label>
                                <select multiple class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                            <option ondblclick="addTag('<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleSelect2">Current owned programs</label>
                                <textarea class="form-control" id="owned-tags" name="accounts" style="resize: none;" rows="4" fixed><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->programString)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                    </div>

                    <input name="id" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->id)===null||$tmp==='' ? '' : $tmp);?>
">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/clients" class="card-link">Back to clients</a><br />
                    </div>
                    <div class="col">
                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="card-link" style="color:red;float: right;">Delete client</a><br />
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>

        function addTag(tag)
        {
            var tags = document.getElementById('owned-tags').value;
            var splitTags = tags.split('&');
            if(checkTagExist(splitTags, tag) == false)
            {
                if(tags == "")
                {
                    tags += tag;
                } else {
                    tags += '&' + tag;
                }
                document.getElementById('owned-tags').value = tags;
            }
        }

        function checkTagExist(tags, tag)
        {
            if(tags.indexOf(tag) < 0)
            {
                return false;
            }
            return true;
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
