<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-08 12:12:03
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin\admin_pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59da16132ec6a2_60432182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc19ac28b628afc069c7fa6173b48a1a2448c6a6' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin\\admin_pagination.tpl',
      1 => 1507464718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59da16132ec6a2_60432182 (Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="row justify-content-center" aria-label="Page navigation example">
    <ul class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['previousPage']->value > 0) {?>
            <li class="page-item">
                <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['path_item']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['min'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['min']->step = 1;$_smarty_tpl->tpl_vars['min']->total = (int) ceil(($_smarty_tpl->tpl_vars['min']->step > 0 ? $_smarty_tpl->tpl_vars['paginateCount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['paginateCount']->value)+1)/abs($_smarty_tpl->tpl_vars['min']->step));
if ($_smarty_tpl->tpl_vars['min']->total > 0) {
for ($_smarty_tpl->tpl_vars['min']->value = 1, $_smarty_tpl->tpl_vars['min']->iteration = 1;$_smarty_tpl->tpl_vars['min']->iteration <= $_smarty_tpl->tpl_vars['min']->total;$_smarty_tpl->tpl_vars['min']->value += $_smarty_tpl->tpl_vars['min']->step, $_smarty_tpl->tpl_vars['min']->iteration++) {
$_smarty_tpl->tpl_vars['min']->first = $_smarty_tpl->tpl_vars['min']->iteration == 1;$_smarty_tpl->tpl_vars['min']->last = $_smarty_tpl->tpl_vars['min']->iteration == $_smarty_tpl->tpl_vars['min']->total;?>
            <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['path_item']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['min']->value;?>
</a></li>
        <?php }
}
?>

        <?php if ($_smarty_tpl->tpl_vars['nextPage']->value < $_smarty_tpl->tpl_vars['paginateCount']->value+1) {?>
            <li class="page-item">
                <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['path_item']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        <?php }?>
    </ul>
</nav>
<?php }
}
