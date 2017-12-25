<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:48:54
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\admin\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a4164360b9b15_16510759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb809042ce9bbf2ce3931bcb6c86d99e332cf154' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\admin\\search.tpl',
      1 => 1514226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4164360b9b15_16510759 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" method="GET">
            <div class="input-group">
                <select name="mode" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"><span style="text-transform:capitalize;"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</span></option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" style="cursor:pointer;">Search</button></button>
                </span>
            </div>
        </form>
    </div>
</div>
<?php }
}
