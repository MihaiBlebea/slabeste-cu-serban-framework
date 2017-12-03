<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-03 14:49:35
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\landing-testimonial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a240effa58ca4_73220552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0aaedb93ee718eba9505edd606c4bb5a4715472' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\landing-testimonial.tpl',
      1 => 1512312565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a240effa58ca4_73220552 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="media">
    <img class="testimonial-image d-flex <?php echo (($tmp = @$_smarty_tpl->tpl_vars['align']->value)===null||$tmp==='' ? 'align-self-start' : $tmp);?>
 mr-3" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="Generic placeholder image">
    <div class="media-body">
        <h5 class="mt-0"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h5>
        <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
    </div>
</div>
<?php }
}
