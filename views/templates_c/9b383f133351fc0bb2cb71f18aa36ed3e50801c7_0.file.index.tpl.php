<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 13:53:20
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7b8d08d6a62_88730929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b383f133351fc0bb2cb71f18aa36ed3e50801c7' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\home\\index.tpl',
      1 => 1506261139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7b8d08d6a62_88730929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163082125559c7b8d08add95_75743476', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/home_page_layout.tpl');
}
/* {block "body"} */
class Block_163082125559c7b8d08add95_75743476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_163082125559c7b8d08add95_75743476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <h1 class="display-3">Bine ai venit in Cercul Intern!</h1>
            <p class="lead">Aici vei gasi toate uneltele de care ai nevoie pentru a obtine rezultate vizibile.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['programs']->value, 'program');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['program']->value) {
?>
            <div class="card program-card" style="width: 20rem;">
                <?php if ($_smarty_tpl->tpl_vars['program']->value->owned == false) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_sales_page;?>
">
                        <img class="card-img-top" style="filter: grayscale(100%);" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
">
                    </a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;
echo $_smarty_tpl->tpl_vars['program']->value->main_page;?>
">
                        <img class="card-img-top program-main-image" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
">
                    </a>
                <?php }?>
                <div class="card-body">
                    <h4 class="card-title" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</h4>

                    <?php if ($_smarty_tpl->tpl_vars['program']->value->owned == false) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_sales_page;?>
" class="btn btn-primary" style="display:block;margin:auto;">Afla mai multe</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;
echo $_smarty_tpl->tpl_vars['program']->value->main_page;?>
" class="btn btn-primary" style="display:block;margin:auto;">Acceseaza</a>
                    <?php }?>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
<?php
}
}
/* {/block "body"} */
}
