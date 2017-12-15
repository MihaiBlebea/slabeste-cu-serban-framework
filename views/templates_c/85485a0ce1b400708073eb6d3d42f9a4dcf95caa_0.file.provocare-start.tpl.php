<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-15 22:39:29
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\landing\provocare-start.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a344f2154e376_94574250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85485a0ce1b400708073eb6d3d42f9a4dcf95caa' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\landing\\provocare-start.tpl',
      1 => 1513377566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/modal-lead-two-fields-no-img.tpl' => 1,
    'file:partials/landing-card-offer.tpl' => 1,
    'file:partials/landing-steps.tpl' => 1,
    'file:partials/landing-call-to-action.tpl' => 3,
    'file:partials/landing-testimonial-left.tpl' => 2,
    'file:partials/landing-testimonial-right.tpl' => 1,
    'file:partials/about-author.tpl' => 1,
  ),
),false)) {
function content_5a344f2154e376_94574250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "../configs/provocare-start.conf", null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4942643425a344f21514fe2_10804876', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8980015805a344f2154acf0_00242601', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/landing/landing_layout.tpl');
}
/* {block "body"} */
class Block_4942643425a344f21514fe2_10804876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4942643425a344f21514fe2_10804876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">

        <!-- Include the modal component -->
        <?php $_smarty_tpl->_subTemplateRender("file:partials/modal-lead-two-fields-no-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cta_modal'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_modal')), 0, false);
?>

        <!-- Offer Start -->

        <div class="background-offer" style="background-image: url('<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'main_image');?>
')">
            <div class="row offer">
                <div class="col-md-6 ml-md-auto">
                    <div id="cta-1" class="card">

                        <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-card-offer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_main_title'),'sub_title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_sub_title')), 0, false);
?>


                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->

        <!-- Steps Start -->
        <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('step_1_title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_1_title'),'step_1_subtitle'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_1_subtitle'),'step_2_title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_2_title'),'step_2_subtitle'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_2_subtitle'),'step_3_title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_3_title'),'step_3_subtitle'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_3_subtitle')), 0, false);
?>

        <!-- Steps End -->

        <!-- Benefits Start-->
        <div id="benefits" class="row benefits">
            <div class="bullet-point-benefits">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'benefit'), 'benefitItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['benefitItem']->value) {
?>
                        <li class="benefit-item"><?php echo $_smarty_tpl->tpl_vars['benefitItem']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </ul>
                <div id="cta-2" class="mb-5 mt-5">
                    <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-call-to-action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Inscrie-te gratuit",'color'=>"btn-warning",'cta'=>"Inscrie-te Acum!"), 0, false);
?>

                </div>
            </div>
        </div>
        <!-- Benefits End -->

        <!-- Testimonials Start -->
        <div id="testimonials" class="row mt-5 mb-5">
            <div class="testimonials">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>"http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg",'title'=>"Diana a pierdut 10 kg",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, false);
?>

                <hr />

                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>"http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg",'title'=>"Diana a pierdut 10 kg",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, false);
?>

                <hr />

                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>"http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg",'title'=>"Diana a pierdut 10 kg",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, true);
?>

            </div>
        </div>
        <!-- Testimonials End -->
        <div class="mb-5 mt-5">
            <div id="cta-3">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-call-to-action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Vrei si tu rezultate asemanatoare?",'color'=>"btn-warning",'cta'=>"Inscrie-te aici!"), 0, true);
?>

            </div>
        </div>

        <!-- About the author section -->
        <div class="mb-5">
            <?php $_smarty_tpl->_subTemplateRender("file:partials/about-author.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner'=>"true"), 0, false);
?>

        </div>
        <!-- About the author section -->

        <div class="row dark-blue">
            <div id="cta-4" class="col pt-5 pb-5">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-call-to-action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_offer_2'),'color'=>"btn-warning",'cta'=>"Inscrie-te Acum!"), 0, true);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_8980015805a344f2154acf0_00242601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8980015805a344f2154acf0_00242601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/../script-build/app/bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        Landing.isInView('cta-1', function(item) {
            item.classList.add('animated', 'bounceInDown');
        });

        Landing.isInView('cta-2', function(item) {
            item.classList.add('animated', 'bounceInDown');
        });

        Landing.isInView('cta-3', function(item) {
            item.classList.add('animated', 'bounceInDown');
        });

        Landing.isInView('cta-4', function(item) {
            item.classList.add('animated', 'tada');
        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
