<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 14:19:46
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7bf025072e2_68707785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b383f133351fc0bb2cb71f18aa36ed3e50801c7' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\home\\index.tpl',
      1 => 1506262782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7bf025072e2_68707785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148974659c7bf024e2925_05867522', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/home_page_layout.tpl');
}
/* {block "body"} */
class Block_1148974659c7bf024e2925_05867522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1148974659c7bf024e2925_05867522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row" style="justify-content:center;">
        <div class="jumbotron" style="text-align:center;">
            <h1 class="display-3">Bine ai venit in Cercul Intern!</h1>
            <p class="lead">Aici vei gasi toate uneltele de care ai nevoie pentru a obtine rezultate vizibile.</p>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item" style="overflow:hidden;">
                <img class="d-block w-100" style="max-height:500px;" data-src="" alt="First slide [800x400]" src="https://d2auhg88b162pf.cloudfront.net/assets/categories/self/self_category_fitness-588aedbc4bdb910bc6c251502ca9f57b.jpg" data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h3>First slide label</h3>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" style="max-height:500px;" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="http://cdn-maf3.heartyhosting.com/sites/muscleandfitness.com/files/media/campus-muscle-trainint-partner-4.jpg" data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second slide label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item active">
                <img class="d-block w-100" style="max-height:500px;" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="http://cdn-maf3.heartyhosting.com/sites/muscleandfitness.com/files/media/campus-muscle-trainint-partner-4.jpg" data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third slide label</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
