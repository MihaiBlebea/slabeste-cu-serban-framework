<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-10 21:53:22
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\checkout_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59dd4152732888_12159668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfbacbc6720df3ece1ac98b5e17d491155f31e0' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\checkout_layout.tpl',
      1 => 1507672156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd4152732888_12159668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
    <head>
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
        <?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <style>
            .nav {
                background-color: #e5e5e5;
            }
            .container-fluid {
                max-width:900px;
                padding: 20px;
            }
            .btn {
                cursor: pointer;
            }
            .program-name {
                font-size: 1.9em;
                font-weight: bold;
            }
            .discount-price {
                font-size: 3.2em;
                font-weight: bold;
                color: #0A82C5;
                line-height: 1;
            }
            .normal-price {
                font-size: 3.2em;
                font-weight: bold;
                line-height: 1;
            }
            .discount-label-text {
                font-size:2em;
                margin-bottom:0px;
            }
            .old-price {
                color:grey;
            }
            .strike {
                text-decoration: line-through;
            }
            .text-shadow {
                text-shadow: 1px 2px 2px black;
            }
            .footer {
                padding:5px;
                background-color:#1B6389;
                color:#fff;
            }
            .guarantee {
                background-color: #F1F1F1;
            }
            .business-details {
                display: block;
                margin: auto;
                margin-left: 30px;
                border-left: 1px solid #d8cece;
                padding-left: 30px;
                padding-top: 20px;
                padding-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213568738559dd415272bf28_87796232', "nav");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180709855259dd415272e7d4_36324505', "body");
?>


        <footer class="footer">
            Slabeste cu Serban
        </footer>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147003925859dd4152730728_19756227', "script");
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
class Block_213568738559dd415272bf28_87796232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_213568738559dd415272bf28_87796232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_180709855259dd415272e7d4_36324505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_180709855259dd415272e7d4_36324505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_147003925859dd4152730728_19756227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_147003925859dd4152730728_19756227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "script"} */
}
