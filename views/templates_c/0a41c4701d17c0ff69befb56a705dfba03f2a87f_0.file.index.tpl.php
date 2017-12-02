<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-11-05 15:56:54
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\checkout\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59ff34c6cebe63_51518299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a41c4701d17c0ff69befb56a705dfba03f2a87f' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\checkout\\index.tpl',
      1 => 1509897410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff34c6cebe63_51518299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204683668259ff34c6cbe8d9_96566236', "nav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156093817059ff34c6cd4548_59841431', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9958351559ff34c6cea929_45427058', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/checkout_layout.tpl');
}
/* {block "nav"} */
class Block_204683668259ff34c6cbe8d9_96566236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_204683668259ff34c6cbe8d9_96566236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="nav animated slideInDown">
        <img style="display:block;margin:auto;max-width: 120px;" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/logos/logo_site.png" />
    </div>

<?php
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_156093817059ff34c6cd4548_59841431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_156093817059ff34c6cd4548_59841431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="row mb-5 animated fadeIn">
            <div class="col-sm-12 col-md-6">
                <form id="checkout-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/checkout/payment">
                    <div class="form-group">
                        <label>Nume:</label>
                        <input id="first-name" name="firstName" onkeyup="validateFirstName('first-name');" type="text" class="form-control" placeholder="ex. Popescu">
                        <div class="invalid-feedback">
                            Numele de familie trebuie sa aiba mai mult de 3 litere, dar nu spatii libere.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prenume:</label>
                        <input id="last-name" name="lastName" onkeyup="validateFirstName('last-name');" type="text" class="form-control" placeholder="ex. Maria">
                        <div class="invalid-feedback">
                            Numele mic trebuie sa aiba mai mult de 3 litere, dar nu spatii libere.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input id="email" name="email" onkeyup="validateEmail('email');" type="email" class="form-control" placeholder="">
                        <div class="invalid-feedback">
                            Adresa de email trebuie sa fie una valida.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Telefon:</label>
                        <input id="phone" name="phone" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="alert alert-success" role="alert">
                        Plateste cu cardul apasand butonul "Cumpara acum" sau prin PayPal
                    </div>

                    <input name="program_price" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['discountPrice']->value;?>
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
                    <input id="send-button" type="submit" value="Cumpara acum" class="btn btn-success btn-lg btn-block">
                </form>
                <img style="display:block;margin:auto;" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/logos/plata_sigura.png" />
                <p class="text-center mt-2">
                    Siguranta platii tale este importanta pentru noi. De aceea, folosim cele mai moderne filtre de securitate pentru platile online. Nicio informatie confidentiala nu este stocata pe acest site.
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="text-center program-name">Programul <?php echo $_smarty_tpl->tpl_vars['program']->value->program_name;?>
</p>
                <img style="width:100%" class="mb-3 animated fadeIn" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['program']->value->program_image;?>
" />

                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['discount']->value == false) {?>
                        <div class="col">
                            <p class="text-center normal-price discount-label-text">Profita de pretul special</p>
                            
                            <h1 class="ribbon">
                                <strong class="ribbon-content normal-price"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
 RON</strong>
                            </h1>
                        </div>
                    <?php } else { ?>
                        <div class="col">
                            <p class="text-center discount-price discount-label-text">Noul Pret</p>
                            <p class="text-center discount-price text-shadow"><?php echo $_smarty_tpl->tpl_vars['discountPrice']->value;?>
 RON</p>
                        </div>
                        <div class="col">
                            <p class="text-center normal-price discount-label-text old-price">Vechiul Pret</p>
                            <p class="text-center normal-price strike old-price"><?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
 RON</p>
                        </div>
                    <?php }?>
                </div>
                <hr />
                <div class="business-details">
                    <p><strong>Ai nevoie de ajutor?</strong></p>
                    <p>Pentru orice intrebari ne poti contacta:</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Telefon: 0757.103.898</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: office@slabestecuserban.ro</p>
                    <p>FIT MAKER SRL</p>
                    <p>Aleea Giurgeni, sector 3, Bucuresti</p>
                </div>
                <div class="card">
                    <div class="card-body guarantee">
                        <div class="justify-content-center align-items-center">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-4">
                                    <img style="max-width: 150px;" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/logos/garantie.png" />
                                </div>
                                <div class="col-md-8">
                                    <h4><strong>Garantia de 14 zile</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Iti garantam maxima calitate. Daca din orice motiv nu esti multumit/a de calitatea produselor noastre, poti solicita in termen de 14 zile restituirea contravalorii acestora si inchiderea contului tau pe acest site. - Echipa Slabeste Cu Serban</p>
                                </div>
                            </div>
                        </div>
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
class Block_9958351559ff34c6cea929_45427058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9958351559ff34c6cea929_45427058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>

    function changeDOM(el, valid)
    {
        var button = document.getElementById('send-button');
        if(valid == false)
        {
            el.classList.add('is-invalid');
            button.disabled = true;
            button.value = "Corecteaza erorile din formular";

        } else {
            el.classList.remove('is-invalid');
            button.disabled = false;
            button.value = "Cumpara acum";
        }
    }

    function validateFirstName(elementId)
    {
        var valid = true;
        var el = document.getElementById(elementId);

        if(el.value == "")
        {
            valid = false;
        }

        if(el.value.length < 3)
        {
            valid = false;
        }

        if(el.value.indexOf(" ") > 0)
        {
            valid = false;
        }

        changeDOM(el, valid);
    }

    function validateEmail(elementId)
    {
        var valid = true;
        var el = document.getElementById(elementId);
        var button = document.getElementById('send-button');

        if(el.value == "")
        {
            valid = false;
        }

        if(el.value.indexOf('@') < 0)
        {
            valid = false;
        }

        if(el.value.indexOf(' ') > 0)
        {
            valid = false;
        }

        if(el.value.indexOf('.') < 0)
        {
            valid = false;
        }

        changeDOM(el, valid);
    }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
