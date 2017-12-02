<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 19:11:54
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\download-card.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a22fafa656170_41731043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759de356a9d0db8aa609d03d5a47c7ba4b0373d6' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\download-card.tpl',
      1 => 1512241761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22fafa656170_41731043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card mb-4">
    <div class="row">
        <div class="col-md-6 col-sm-4 col-xs-12 p-3">
            <a href="<?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
">
                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['image_link']->value;?>
">
            </a>
        </div>
        <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
" class="btn btn-primary"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['button_text']->value)===null||$tmp==='' ? 'Descarca' : $tmp);?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }
}
