<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-16 21:43:53
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\membership\home_page_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a3593991c9a76_62085309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1874ce6c88f7f8e2c16fe9346b203bd5976c0c9' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\membership\\home_page_layout.tpl',
      1 => 1512219644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/membership/membership_home_navigation.tpl' => 1,
  ),
),false)) {
function content_5a3593991c9a76_62085309 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>

        <style>
            body {

            }
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
            }
            .sidebar {
                position: fixed;
                padding: 50px 20px;
                background-color: #DBDBD9;
                height: 100%;
            }
            .content {
                padding:70px 50px;
            }
            .footer {
                padding:5px;
                background-color:#1B6389;
                color:#fff;
            }
            .program-card {
                margin:10px;
            }
            .content {
                max-width: 1100px;
                display:block;
                margin:auto;
            }
            .jumbotron {
                background-color:#ffffff;
                padding-left:0px;
                padding-right:0px;
                margin:0;
            }
            .program-main-image {
                transition: all 0.6s ease-in-out;
            }
            .program-main-image:hover {
                opacity: 0.6;
            }
            .program-main-image-not-owned {
                filter: grayscale(100%);
                transition: all 0.8s ease-in-out;
            }
            .program-main-image-not-owned:hover {
                filter: grayscale(0%);
            }
        </style>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/membership/membership_home_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">
            <div class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16058558025a3593991c6b22_51712832', "body");
?>

            </div>
        </div>
        <footer class="footer">
            Slabeste cu Serban
        </footer>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2105097735a3593991c8725_37298153', "script");
?>

    </body>
<body>
<?php }
/* {block "body"} */
class Block_16058558025a3593991c6b22_51712832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16058558025a3593991c6b22_51712832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_2105097735a3593991c8725_37298153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2105097735a3593991c8725_37298153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "script"} */
}
