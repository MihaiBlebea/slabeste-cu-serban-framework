<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 16:58:11
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\checkout\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7e42337aca0_38014480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a41c4701d17c0ff69befb56a705dfba03f2a87f' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\checkout\\index.tpl',
      1 => 1506108456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7e42337aca0_38014480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171596193359c7e42336b067_36091437', "nav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48562597959c7e42336dd03_10569913', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88580469459c7e423379820_13872987', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/checkout_layout.tpl');
}
/* {block "nav"} */
class Block_171596193359c7e42336b067_36091437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_171596193359c7e42336b067_36091437',
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
class Block_48562597959c7e42336dd03_10569913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_48562597959c7e42336dd03_10569913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <form id="checkout-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/checkout/payment">
            <div class="row">
                <div class="col-sm-12 col-md-6">
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
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Adresa:</label>
                        <textarea name="adress" class="form-control" rows="3"></textarea>
                    </div>
                    <input name="programTag" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['program']->value->program_tag;?>
">
                </div>
                <div class="col-sm-12 col-md-6">
                    <p>Pret <?php echo $_smarty_tpl->tpl_vars['program']->value->program_price;?>
 RON</p>
                    <div class="form-group">
                        <div id="dropin-container"></div>
                    </div>
                    <input type="submit" value="Cumpara" class="btn btn-success btn-lg btn-block">
                </div>
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_88580469459c7e423379820_13872987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_88580469459c7e423379820_13872987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "footer"} */
}
