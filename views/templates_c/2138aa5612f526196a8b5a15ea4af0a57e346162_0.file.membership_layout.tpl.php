<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 14:22:19
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\membership\membership_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7bf9b295717_08630687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2138aa5612f526196a8b5a15ea4af0a57e346162' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\membership\\membership_layout.tpl',
      1 => 1506262936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/membership/membership_navigation.tpl' => 1,
  ),
),false)) {
function content_59c7bf9b295717_08630687 (Smarty_Internal_Template $_smarty_tpl) {
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
            .nav.top {
                background-color: #0A82C5;
                color:white;
                z-index: 3;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
            }
            .nav-item.top:hover {
                color: yellow;
            }
            .sidebar {
                position: fixed;
                padding: 50px 20px;
                border-right: solid 0.6px grey;
                background-color: white;
                height: 100%;
                text-align: center;
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
            .jumbotron {
                background-color:#ffffff;
            }
            .button-center {
                margin:auto;
                display:block;
            }
            .program-details {
                padding:5px 0px;
            }

            .program-section {
                max-width:80%;
                margin:auto;
                margin-bottom:30px;
            }
            .text-section {
                margin:20px auto;
            }
            .video-section {
                margin:20px auto;
            }
            .subtitle-section {

            }
            .exercise-section {
                list-style: none;
                padding:0;
            }
            .other-programs-section {

            }
            .download-card-img {
                display: block;
                margin: auto;
                max-width: 300px;
                max-height: 350px;
                transition: all 0.6s ease-in-out;
            }
            .download-card-img:hover {
                opacity: 0.6;
            }
            /* Mobile version */
            @media only screen and (max-width: 900px) {
                .sidebar {
                    display:none;
                }
            }
        </style>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/membership/membership_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar col-12 col-md-3 col-xl-2 bd-sidebar">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chapters']->value, 'chapter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->value) {
?>
                        <h5><?php echo $_smarty_tpl->tpl_vars['chapter']->value["name"];?>
</h5>
                        <nav class="nav flex-column">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chapter']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </nav>
                        <hr />
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </div>
                <div class="col-md-2 sidebar" style="z-index: -1;position: relative;">
                </div>
                <div class="col-md-10 col-sm-12 content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65419870559c7bf9b27e5c8_88989501', "body");
?>


                    <div class="other-programs-section">
                        <h4>Acest program aduce rezultate maxime impreuna cu:</h4>
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['program']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['program']->value->owned == false) {?>
                                    <div class="card program-card" style="width: 15rem;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_sales_page;?>
">
                                            <img class="card-img-top" style="filter: grayscale(100%);" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</h5>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_sales_page;?>
" class="btn btn-primary" style="display:block;margin:auto;">Afla mai multe</a>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<body>
<?php }
/* {block "body"} */
class Block_65419870559c7bf9b27e5c8_88989501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_65419870559c7bf9b27e5c8_88989501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                    <?php
}
}
/* {/block "body"} */
}
