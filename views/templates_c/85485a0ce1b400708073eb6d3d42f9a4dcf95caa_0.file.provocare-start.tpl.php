<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 22:31:10
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\landing\provocare-start.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c983ae5f2ee1_55699803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85485a0ce1b400708073eb6d3d42f9a4dcf95caa' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\landing\\provocare-start.tpl',
      1 => 1506378667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/landing/modal_name_email.tpl' => 1,
  ),
),false)) {
function content_59c983ae5f2ee1_55699803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "../configs/provocare-start.conf", null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137748345459c983ae5d0432_11719609', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65561709159c983ae5f1a25_87605703', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/landing/landing_layout.tpl');
}
/* {block "body"} */
class Block_137748345459c983ae5d0432_11719609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_137748345459c983ae5d0432_11719609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">

        <!-- Include the modal component -->
        <?php $_smarty_tpl->_subTemplateRender('file:layouts/landing/modal_name_email.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cta_modal'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_modal')), 0, false);
?>

        <!-- Offer Start -->
        <div class="background-offer">
            <div class="row offer">
                <div class="col-md-6 ml-md-auto">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="offer-text-1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_main_title');?>
</h4>
                            <h4 class="offer-text-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_sub_title');?>
</h4>
                            <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_page');?>
</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->

        <!-- Steps Start -->
        <div id="steps" class="row steps">
            <div class="steps-container row">
                <div class="step row col align-items-center">
                    <div class="step-number col-2">
                        1
                    </div>
                    <div class="step-text col-10">
                        <div class="step-title">
                            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_1_title');?>

                        </div>
                        <div class="step-content">
                            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_1_subtitle');?>

                        </div>
                    </div>
                </div>
                <div class="step row col align-items-center">
                    <div class="step-number col-2">
                        2
                    </div>
                    <div class="step-text col-10">
                        <div class="step-title">
                            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_2_title');?>

                        </div>
                        <div class="step-content">
                            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_2_subtitle');?>

                        </div>
                    </div>
                </div>
                <div class="step row col align-items-center">
                    <div class="step-number col-2">
                        3
                    </div>
                    <div class="step-text col-10">
                        <div class="step-title">
                            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_3_title');?>

                        </div>
                        <div class="step-content">
                            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'step_3_subtitle');?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="jumbotron">
                    <h3 class="col mb-4 text-center"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_offer_1');?>
</h3>
                    <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_page');?>
</button>
                </div>
            </div>
        </div>
        <!-- Benefits End -->

        <!-- Testimonials Start -->
        <div id="testimonials" class="row testimonials">
            <div class="testimonials">
                <div class="media">
                    <img class="testimonial-image d-flex align-self-start mr-3" src="http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <hr />
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                    <img class="testimonial-image d-flex align-self-start mr-3" src="http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg" alt="Generic placeholder image">
                </div>
                <hr />
                <div class="media">
                    <img class="testimonial-image d-flex align-self-start mr-3" src="http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <div class="jumbotron">
                    <h3 class="col mb-4 text-center"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_offer_2');?>
</h3>
                    <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cta_page');?>
</button>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->

    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_65561709159c983ae5f1a25_87605703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_65561709159c983ae5f1a25_87605703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        document.getElementById("submit").disabled = true;
        function validate(el)
        {
            if(el == "email")
            {
                var email = document.getElementById(el).value;
                if(email.search("@") < 0)
                {
                    document.getElementById("submit").disabled = true;
                    document.getElementById("submit").value = "Emailul nu este valid";
                }
            } else if(el == "name") {
                var name = document.getElementById(el).value;
                if(name.length == 0)
                {
                    document.getElementById("submit").disabled = true;
                    document.getElementById("submit").value = "Numele este prea scurt";
                }
            }
        }

        var check = checkIfLocalStorage();
        if(check == true)
        {
            document.getElementById("name").value = getData("name");
            document.getElementById("email").value = getData("email");
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
