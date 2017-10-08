<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-08 13:52:28
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\checkout\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59da2d9c43b5d1_07452852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a41c4701d17c0ff69befb56a705dfba03f2a87f' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\checkout\\index.tpl',
      1 => 1507470744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59da2d9c43b5d1_07452852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190019922359da2d9c40cb89_44642904', "nav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95754081159da2d9c4113d6_23697278', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31134530759da2d9c438e12_27822804', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/checkout_layout.tpl');
}
/* {block "nav"} */
class Block_190019922359da2d9c40cb89_44642904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_190019922359da2d9c40cb89_44642904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
<?php
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_95754081159da2d9c4113d6_23697278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_95754081159da2d9c4113d6_23697278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-6">
                <form id="checkout-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/checkout/payment">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nume:</label>
                        <input name="firstName" type="text" class="form-control" placeholder="ex. Popescu">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prenume:</label>
                        <input name="lastName" type="text" class="form-control" placeholder="ex. Maria">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefon:</label>
                        <input name="phone" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="alert alert-success" role="alert">
                        Plateste cu cardul apasand butonul "Cumpara acum" sau prin PayPal
                    </div>
                    

                    <input name="program_price" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['programPrice']->value;?>
">
                    <input name="programTag" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
">

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <div id="dropin-container"></div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Cumpara acum" class="btn btn-success btn-lg btn-block">
                </form>
                <img style="display:block;margin:auto;" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/logos/plata_sigura.png" />
                <p class="text-center mt-2">
                    Siguranta platii tale este importanta pentru noi. De aceea, folosim cele mai moderne filtre de securitate pentru platile online. Nicio informatie confidentiala nu este stocata pe acest site.
                </p>
            </div>
            <div class="col-sm-12 col-md-6">

                <img style="max-width:100%" class="mb-3" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
" />
                <p class="text-center program-name">Programul <?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</p>
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['discountPrice']->value == false) {?>
                        <div class="col">
                            <p class="text-center program-price-text mb-0">Profita de pretul special</p>
                            <p class="text-center program-price"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
 RON</p>
                        </div>
                    <?php } else { ?>
                        <div class="col">
                            <p class="text-center program-price-text mb-0">Noul Pret</p>
                            <p class="text-center program-price"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
 RON</p>
                        </div>
                        <div class="col">
                            <p class="text-center program-price-text mb-0">Vechiul Pret</p>
                            <p class="text-center program-price strike"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
 RON</p>
                        </div>
                    <?php }?>
                </div>
                <hr />

                <p><strong>Ai nevoie de ajutor?</strong></p>
                <p>Pentru orice intrebari ne poti contacta:</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> Telefon: 0757.103.898</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: office@slabestecuserban.ro</p>
                <p>FIT MAKER SRL</p>
                <p>Aleea Giurgeni, sector 3, Bucuresti</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body guarantee">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-2">
                        <img style="max-width: 150px;" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/logos/garantie.png" />
                    </div>
                    <div class="col-md-10 pl-5">
                        <p><strong>Garantia de 14 zile</strong></p>
                        <p>Iti garantam maxima calitate. Daca din orice motiv nu esti multumit/a de calitatea produselor noastre, poti solicita in termen de 14 zile restituirea contravalorii acestora si inchiderea contului tau pe acest site. - Echipa Slabeste Cu Serban</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_31134530759da2d9c438e12_27822804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_31134530759da2d9c438e12_27822804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "script"} */
}
