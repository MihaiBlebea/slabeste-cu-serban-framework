<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-19 22:37:27
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\login\login_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c19c27803b60_71218459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac558a805565d912e396d78f4454a4575d55d72' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\login\\login_layout.tpl',
      1 => 1505860607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/login/login_navigation.tpl' => 1,
  ),
),false)) {
function content_59c19c27803b60_71218459 (Smarty_Internal_Template $_smarty_tpl) {
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

        <style>
            body {
                background-image: url('http://www.50jahre30.de/wp-content/uploads/2016/03/O7MF4F0.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            a {
                text-decoration: none;
                /* color: #fff; */
            }
            a:hover {
                /* color: yellow; */
            }
            .nav {
                background-color: #0A82C5;
            }
            .container-fluid {
                max-width:900px;
                padding: 50px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .btn {
                cursor: pointer;
            }
            .row {
                margin-right: 0px;
                margin-left: 0px;
            }
            .card {
                position:relative;
                z-index:2;
            }
            .alert {
                width: 20rem;
                margin-bottom:10px;
            }
        </style>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/login/login_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72839726159c19c277fe485_27047824', "body");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35873698359c19c278018f0_16897698', "footer");
?>

    </body>
<body>
<?php }
/* {block "body"} */
class Block_72839726159c19c277fe485_27047824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_72839726159c19c277fe485_27047824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_35873698359c19c278018f0_16897698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_35873698359c19c278018f0_16897698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "footer"} */
}