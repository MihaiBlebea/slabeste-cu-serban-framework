<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-27 20:57:07
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\checkout_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a4409237b98b1_23341567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfbacbc6720df3ece1ac98b5e17d491155f31e0' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\checkout_layout.tpl',
      1 => 1514408044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/membership-footer.tpl' => 1,
  ),
),false)) {
function content_5a4409237b98b1_23341567 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"><?php echo '</script'; ?>
>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/css/checkout.css">

    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1821740065a4409237af335_14027877', "nav");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11122130135a4409237b20b5_87627743', "body");
?>


        <?php $_smarty_tpl->_subTemplateRender('file:partials/membership-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15896457355a4409237b62f3_90850775', "script");
?>

        <?php echo '<script'; ?>
>
            braintree.setup("<?php echo $_smarty_tpl->tpl_vars['braintree_token']->value;?>
", 'dropin', {
                container: 'dropin-container',
                form: 'checkout-form',
            });
        <?php echo '</script'; ?>
>
    </body>
<body>
<?php }
/* {block "nav"} */
class Block_1821740065a4409237af335_14027877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_1821740065a4409237af335_14027877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_11122130135a4409237b20b5_87627743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11122130135a4409237b20b5_87627743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_15896457355a4409237b62f3_90850775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15896457355a4409237b62f3_90850775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
