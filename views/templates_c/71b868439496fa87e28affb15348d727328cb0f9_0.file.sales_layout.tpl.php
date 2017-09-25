<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 21:52:02
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\landing\sales_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c97a823f2ba8_53324160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71b868439496fa87e28affb15348d727328cb0f9' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\landing\\sales_layout.tpl',
      1 => 1506376319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/landing/landing_navigation.tpl' => 1,
  ),
),false)) {
function content_59c97a823f2ba8_53324160 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/css/social-media-buttons.css">
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"><?php echo '</script'; ?>
>

        <style>
            a {
                text-decoration: none;
                color: inherit;
            }
            a:hover {
                color: inherit;
                cursor: pointer;
            }
            a.card-link {
                color: #0A82C5;
            }
            a.card-link:hover {
                color: #0A82C5;
                font-weight: bold;
            }
            .nav {
                /*background-color: #0A82C5;*/
                background-color: white;
                color:black;
                z-index: 3;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
                display: flex;
                align-items: center;
            }
            .nav-item {
                font-weight: bold;
            }
            .nav-item:hover {
                color: #0A82C5;
                padding:0px auto;
            }
            .container-fluid {
                margin-top:10px;
            }
            .btn {
                cursor: pointer;
            }
            .offer {
                margin:auto;
                max-width:900px;
            }
            .background-offer {

                margin-left: -15px;
                margin-right: -15px;
            }
            .card {
                position:relative;
                z-index:2;
                margin-top:70px;
                margin-bottom:70px;
            }
            .card-body {
                text-align: center;
                background-color:rgb(255,255,255,0.4);
                text-transform: uppercase;
            }
            .offer-text-1 {
                font-size:3em;
            }
            .offer-text-2 {
                font-size:2em;
            }
            .offer-text-3 {
                font-size:2em;
            }
            .close {
                cursor:pointer;
            }
            .row.steps {
                background-color: #1b6389;
                padding: 20px 0px;
            }
            .steps-container {
                max-width: 900px;
                width: 100%;
                display: flex;
                justify-content: space-around;
                margin: auto;
            }
            .step-number {
                font-size: 3.2em;
                color:yellow;
                font-weight:bold;
                padding-right:0;
            }
            .step-text {
                padding-left:2px;
            }
            .step-title {
                font-size: 1.5em;
                color:yellow;
            }
            .step-content {
                color:#fff;
            }
            .row.benefits {
                padding-top:50px;
                background-color: #0A82C5;
                color: #fff;
            }
            .bullet-point-benefits {
                max-width:900px;
                margin:auto;
            }
            .benefit-item {
                padding:15px 0px;
            }
            button {
                cursor:pointer;
            }
            .row.testimonials {
                padding: 50px 0px;
            }
            .testimonials {
                max-width:900px;
                margin: auto;
            }
            .testimonial-image {
                max-width: 200px;
            }
            hr {
                margin: 50px 0px;
            }
            .jumbotron {
                background-color:inherit;
                text-align: center;
            }
            .img-logo {
                max-height: 35px;
            }
            .text-center {
                text-align: center;
            }
            footer {
                height:60px;
                background-color: #0A82C5;
                color:white;
                padding:20px;
            }
            .social-buttons-container {
                display: flex;
                justify-content: flex-end;
            }
            .card {
                margin-top:0;
            }
        </style>
    </head>
    <body>
        <!-- Include the navigation component-->
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/landing/landing_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196324301159c97a823e9d90_70585000', "body");
?>


        <footer style="display:flex;align-items:center;" class="footer">
                <div class="col">
                    Slabeste Cu Serban
                </div>
                <div class="col social-buttons-container">
                    <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                    <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                    <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                    <a href="#" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>
                    <a href="#" class="icon-button pinterest"><i class="fa fa-pinterest"></i><span></span></a>
                </div>
        </footer>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/js/functions.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/js/localStorage.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/js/tracking.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63323123859c97a823efd32_56413734', "script");
?>

    </body>
<body>
<?php }
/* {block "body"} */
class Block_196324301159c97a823e9d90_70585000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_196324301159c97a823e9d90_70585000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_63323123859c97a823efd32_56413734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_63323123859c97a823efd32_56413734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "script"} */
}
