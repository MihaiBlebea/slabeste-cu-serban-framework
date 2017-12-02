<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 20:36:25
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\membership\membership_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a230ec90471d2_82997440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2138aa5612f526196a8b5a15ea4af0a57e346162' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\membership\\membership_layout.tpl',
      1 => 1512246904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/membership/membership_navigation.tpl' => 1,
    'file:partials/notification.tpl' => 1,
  ),
),false)) {
function content_5a230ec90471d2_82997440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <!-- Fonts -->
        

        <?php echo '<script'; ?>
 src="https://unpkg.com/popper.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"><?php echo '</script'; ?>
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
            @import url('https://fonts.googleapis.com/css?family=Kaushan+Script');

            .small-title {
                /*font-family: 'Indie Flower', cursive;*/
            }

            .page-title {
                font-family: 'Kaushan Script', cursive;
            }

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
            .sidebar-link-item {
                transition: all 0.3s ease-in-out;
            }
            .sidebar-link-item:hover {
                color: #1B6389;
                font-weight: bold;
            }
            .sidebar {
                position: fixed;
                /*padding: 50px 20px;*/
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
            .display-3 {
                font-size: 3rem;
            }
            .img-content {
                max-width:700px;
            }
            .content-link {
                color:blue;
                margin-bottom:20px;
            }
            .image-program-footer {
                filter: grayscale(100%);
                transition: all 0.8s ease-in-out;
            }
            .image-program-footer:hover {
                filter: grayscale(0%);
            }
            #sticky-sidebar {
            	margin-top:10px;
            	position:fixed;
            	max-width: 20%;
            	border-right: solid 1px grey;
            	height:100%;
            	z-index:2;
            }
            #main {
                max-width: 80%;
                margin-left: 20%;
            }
            .sidebar-content {
                height: 60%;
                overflow: auto;
                overflow-x: hidden;
            }
            .sidebar-program-image {
                max-width: 100%;
            }
            .menu-desktop {
                display:flex;
            }
            .menu-mobile {
                display:none
            }
            /* Mobile version */
            @media only screen and (max-width: 1000px) {
                .sidebar {
                    display:none;
                }
                .menu-desktop {
                    display:none;
                }
                .menu-mobile {
                    display:block;
                    background-color: #0A82C5;
                    color:white;
                }
                .navbar {
                    justify-content: start;
                }
                .navbar-toggler {
                    border: 1px solid white;
                }
                #main {
                    max-width: 100%;
                    margin-left: 0px;
                }
            }
        </style>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/membership/membership_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">
            <div class="row">
                <div style="padding:0px;" class="col-md-2 sidebar col-12 col-md-3 col-xl-2 bd-sidebar animated fadeInLeft" id="sticky-sidebar">
                    <img class="sidebar-program-image mt-4 mb-5" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
" />
                    <div class="sidebar-content">
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
                                    <a class="nav-link sidebar-link-item" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
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
                </div>
                
                <div class="col-xs-12 col-sm-12" id="main">

                    <div class="mt-5 d-lg-none">
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>"Acceseaza celelalte pagini din meniul <i class='fa fa-bars' aria-hidden='true'></i>",'type'=>"primary"), 0, false);
?>

                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17282165395a230ec90388c3_59956290', "body");
?>


                    <?php if (count($_smarty_tpl->tpl_vars['programs']->value) > 0) {?>
                        <div class="other-programs-section">
                            <h4>Acest program aduce rezultate maxime impreuna cu:</h4>
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['program']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['index']->value < 4) {?>
                                        <div class="card program-card" style="width: 15rem;">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_sales_page;?>
">
                                                <img class="card-img-top image-program-footer" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
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
                    <?php }?>
                </div>
            </div>
        </div>

        <footer class="footer">
            Slabeste cu Serban
        </footer>
    </body>
<body>
<?php }
/* {block "body"} */
class Block_17282165395a230ec90388c3_59956290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17282165395a230ec90388c3_59956290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                    <?php
}
}
/* {/block "body"} */
}
