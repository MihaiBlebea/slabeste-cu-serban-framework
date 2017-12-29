<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-29 17:28:19
  from 'C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\admin\admin_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a467b33c0e948_16420084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36683825dad694d80bcebde5440717ed30dd577d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\admin\\admin_layout.tpl',
      1 => 1514568496,
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
function content_5a467b33c0e948_16420084 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/css/admin.css">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3900665775a467b33c02788_47579291', "head-script");
?>

    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:partials/admin/admin-navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="container-fluid" id="app">
            <div class="row">

                <!-- Here is the partial for the sidebar -->
                <div style="padding:0px;" class="col-md-2 sidebar col-12 col-md-3 col-xl-2 pt-5 bd-sidebar animated fadeInLeft" id="sticky-sidebar">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18362974275a467b33c06260_45574738', "sidebar");
?>

                </div>

                <div class="col-xs-12 col-sm-12 mb-5 mt-1 mt-md-5" id="main" style="min-height:100vh;">

                    <div class="mt-2 mt-sm-2 mt-md-5 d-lg-none">
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>"Acceseaza celelalte pagini din meniul <i class='fa fa-bars' aria-hidden='true'></i>",'type'=>"primary"), 0, false);
?>
                    </div>

                    <!-- Here is the slot for the body -->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9810921015a467b33c0a613_37144215', "body");
?>


                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:partials/membership-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13935386575a467b33c0d052_94138657', "script");
?>

    </body>
<body>
<?php }
/* {block "head-script"} */
class Block_3900665775a467b33c02788_47579291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head-script' => 
  array (
    0 => 'Block_3900665775a467b33c02788_47579291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head-script"} */
/* {block "sidebar"} */
class Block_18362974275a467b33c06260_45574738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_18362974275a467b33c06260_45574738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_9810921015a467b33c0a613_37144215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9810921015a467b33c0a613_37144215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_13935386575a467b33c0d052_94138657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13935386575a467b33c0d052_94138657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
