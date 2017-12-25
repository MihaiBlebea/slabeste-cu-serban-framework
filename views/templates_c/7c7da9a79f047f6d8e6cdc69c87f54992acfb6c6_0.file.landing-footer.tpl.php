<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 22:51:58
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\landing-footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a41810edf1e88_29119247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c7da9a79f047f6d8e6cdc69c87f54992acfb6c6' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\landing-footer.tpl',
      1 => 1514241842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a41810edf1e88_29119247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer" style="padding-bottom:50px;">
    <div class="row align-items-center">
        <div class="col">
            Slabeste Cu Serban
        </div>
        <div class="col social-buttons-container">
            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['social']->value['facebook'];?>
" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['social']->value['youtube'];?>
" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>
            <a href="#" class="icon-button pinterest"><i class="fa fa-pinterest"></i><span></span></a>
        </div>
    </div>
</footer>
<?php }
}
