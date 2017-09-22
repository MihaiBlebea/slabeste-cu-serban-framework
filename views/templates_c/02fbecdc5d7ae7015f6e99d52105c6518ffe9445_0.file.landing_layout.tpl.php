<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-22 19:36:49
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\landing\landing_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c566510176a9_99646705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02fbecdc5d7ae7015f6e99d52105c6518ffe9445' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\landing\\landing_layout.tpl',
      1 => 1504038276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/landing/landing_navigation.tpl' => 1,
  ),
),false)) {
function content_59c566510176a9_99646705 (Smarty_Internal_Template $_smarty_tpl) {
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
            a {
                text-decoration: none;
                color: inherit;
            }
            a:hover {
                color: inherit;
            }
            a.card-link {
                color: #0A82C5;
            }
            a.card-link:hover {
                color: #0A82C5;
                font-weight: bold;
            }
            .nav {
                background-color: #0A82C5;
                color:white;
                z-index: 3;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
            }
            .nav-item:hover {
                color: yellow;
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
                background-image: url('https://image.freepik.com/free-photo/sport-active-running-fitness-background_1220-1011.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
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
            }
        </style>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/landing/landing_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174810532659c56651013da2_95366328', "body");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40387300059c56651015fe5_44135449', "footer");
?>

    </body>
<body>
<?php }
/* {block "body"} */
class Block_174810532659c56651013da2_95366328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_174810532659c56651013da2_95366328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_40387300059c56651015fe5_44135449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_40387300059c56651015fe5_44135449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "footer"} */
}
