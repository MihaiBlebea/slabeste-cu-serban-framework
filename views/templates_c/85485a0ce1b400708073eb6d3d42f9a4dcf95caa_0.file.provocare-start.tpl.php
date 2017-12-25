<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 22:43:28
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\landing\provocare-start.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a417f10204634_37280312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85485a0ce1b400708073eb6d3d42f9a4dcf95caa' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\landing\\provocare-start.tpl',
      1 => 1513442393,
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
    'file:partials/landing-testimonial-right.tpl' => 2,
    'file:partials/about-author.tpl' => 1,
  ),
),false)) {
function content_5a417f10204634_37280312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "../configs/provocare-start.conf", null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20199911005a417f10122eb8_86479614', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15026871765a417f10200bc8_10079095', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/landing/landing_layout.tpl');
}
/* {block "body"} */
class Block_20199911005a417f10122eb8_86479614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20199911005a417f10122eb8_86479614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">

        <!-- Include the modal component -->
        <?php $_smarty_tpl->_subTemplateRender("file:partials/modal-lead-two-fields-no-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cta_modal'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_modal')), 0, false);
?>

        <!-- Offer Start -->

        <div class="background-offer" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['app_path']->value;
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'main_image_desktop');?>
')">
            <div class="row offer">
                <div class="col-md-6 ml-md-auto">
                    <div id="cta-0" class="card">

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

        <!-- Explain the lead magnet -->
        <div class="light-blue-background" style="padding-bottom:10px;">
            <div id="content" class="row container-content">
                <div class="col">
                    <h3 class="col mb-5 text-center"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'content_title');?>
</h3>
                    <p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'content_text');?>
</p>
                </div>
            </div>
        </div>
        <!-- Explain the lead magnet -->

        <!-- Benefits Start-->
        <div id="benefits" class="row benefits">
            <div class="bullet-point-benefits">
                <ul style="list-style: none;padding-left: 10px;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'benefit'), 'benefitItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['benefitItem']->value) {
?>
                        <li class="benefit-item">
                            <?php echo $_smarty_tpl->tpl_vars['benefitItem']->value;?>

                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </ul>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-call-to-action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"cta-1",'bg_color'=>"light-blue-background",'title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_offer_1'),'color'=>"btn-warning",'cta'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_1')), 0, false);
?>

        <!-- Benefits End -->

        <!-- Testimonials Start -->
        <div id="testimonials" class="row mt-5 mb-5">
            <div class="col container-content">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/testimoniale/denys.png",'title'=>"Denys a slabit peste 20 kg",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, false);
?>

                <hr />

                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/testimoniale/raluca.png",'title'=>"Raluca si-a subtiat talia cu peste 7 centimetri",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, false);
?>

                <hr />

                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/testimoniale/maroiu.png",'title'=>"Monica M. a ajuns in cea mai buna forma fizica",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, true);
?>

                <hr />

                <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-testimonial-right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/testimoniale/monica.png",'title'=>"Monica C. a slabit peste 5 kg",'content'=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."), 0, true);
?>

            </div>
        </div>
        <!-- Testimonials End -->

        <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-call-to-action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"cta-2",'bg_color'=>"white-background",'title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_offer_2'),'color'=>"btn-warning",'cta'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_2')), 0, true);
?>


        <!-- About the author section -->
        <div class="mb-5">
            <?php $_smarty_tpl->_subTemplateRender("file:partials/about-author.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner'=>"true"), 0, false);
?>

        </div>
        <!-- About the author section -->

        <?php $_smarty_tpl->_subTemplateRender("file:partials/landing-call-to-action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"cta-3",'bg_color'=>"dark-blue-background",'title'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_offer_3'),'color'=>"btn-warning",'cta'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_3')), 0, true);
?>

    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_15026871765a417f10200bc8_10079095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15026871765a417f10200bc8_10079095',
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
        Landing.isInView('cta-0', function(item) {
            item.classList.add('animated', 'fadeIn');
        });

        Landing.isInView('cta-1', function(item) {
            item.classList.add('animated', 'fadeIn');
        });

        Landing.isInView('cta-2', function(item) {
            item.classList.add('animated', 'tada');
        });

        Landing.isInView('cta-3', function(item) {
            item.classList.add('animated', 'tada');
        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
