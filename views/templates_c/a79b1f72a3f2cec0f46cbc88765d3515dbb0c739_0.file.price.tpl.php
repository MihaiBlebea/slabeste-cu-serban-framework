<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-27 21:28:40
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\checkout\price.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a4410885ff1a0_09507493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a79b1f72a3f2cec0f46cbc88765d3515dbb0c739' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\checkout\\price.tpl',
      1 => 1514410117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4410885ff1a0_09507493 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['mode']->value == 'ribbon') {?>
    <h1 class="ribbon">
        <strong class="ribbon-content"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 RON</strong>
    </h1>
<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'new-price') {?>
<p class="text-center" style="color:#0A82C5;text-shadow: 1px 2px 2px black;font-size: 2em;font-weight: bold;line-height: 1em;"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
<p class="text-center" style="color:#0A82C5;text-shadow: 1px 2px 2px black;font-size: 2.5em;font-weight: bold;line-height: 1em;"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 RON</p>
<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'old-price') {?>
    <p class="text-center" style="color:red;text-shadow: 1px 2px 2px black;font-size: 2em;font-weight: bold;line-height: 1em;"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
    <p class="text-center" style="color:red;text-shadow: 1px 2px 2px black;font-size: 2.5em;font-weight: bold;line-height: 1em;text-decoration:line-through;"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 RON</p>
<?php }
}
}
