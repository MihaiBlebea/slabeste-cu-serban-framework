<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:46:51
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin\admin_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a4163bb236fd8_65553199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36683825dad694d80bcebde5440717ed30dd577d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin\\admin_layout.tpl',
      1 => 1514224011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin/admin-navigation.tpl' => 1,
    'file:partials/notification.tpl' => 1,
    'file:partials/membership-footer.tpl' => 1,
  ),
),false)) {
function content_5a4163bb236fd8_65553199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

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
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/css/admin.css">
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:partials/admin/admin-navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">
            <div class="row">

                <!-- Here is the partial for the sidebar -->
                <div style="padding:0px;" class="col-md-2 sidebar col-12 col-md-3 col-xl-2 pt-5 bd-sidebar animated fadeInLeft" id="sticky-sidebar">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12106569065a4163bb228da3_64674301', "sidebar");
?>

                </div>

                <div class="col-xs-12 col-sm-12 mb-5 mt-1 mt-md-5" id="main" style="min-height:100vh;">

                    <div class="mt-2 mt-sm-2 mt-md-5 d-lg-none">
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>"Acceseaza celelalte pagini din meniul <i class='fa fa-bars' aria-hidden='true'></i>",'type'=>"primary"), 0, false);
?>

                    </div>

                    <!-- Here is the slot for the body -->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3245978645a4163bb230d04_75098832', "body");
?>


                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:partials/membership-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16071108155a4163bb234e90_13043714', "script");
?>

    </body>
<body>
<?php }
/* {block "sidebar"} */
class Block_12106569065a4163bb228da3_64674301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_12106569065a4163bb228da3_64674301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_3245978645a4163bb230d04_75098832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3245978645a4163bb230d04_75098832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_16071108155a4163bb234e90_13043714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_16071108155a4163bb234e90_13043714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
