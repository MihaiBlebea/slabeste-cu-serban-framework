<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-16 10:58:02
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\landing\landing_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a34fc3a25d891_12270089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02fbecdc5d7ae7015f6e99d52105c6518ffe9445' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\landing\\landing_layout.tpl',
      1 => 1513421878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/landing-navigation.tpl' => 1,
    'file:partials/landing-footer.tpl' => 1,
  ),
),false)) {
function content_5a34fc3a25d891_12270089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
    <head>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/popper.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"><?php echo '</script'; ?>
>

        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/css/social-media-buttons.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/css/landing-page.css">
    </head>
    <body>
        <!-- Include the navigation component-->
        <?php $_smarty_tpl->_subTemplateRender('file:partials/landing-navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5576875405a34fc3a2579b1_89160416', "body");
?>


        <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7732153015a34fc3a25af01_22951395', "script");
?>

    </body>
<body>
<?php }
/* {block "body"} */
class Block_5576875405a34fc3a2579b1_89160416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5576875405a34fc3a2579b1_89160416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_7732153015a34fc3a25af01_22951395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7732153015a34fc3a25af01_22951395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "script"} */
}
