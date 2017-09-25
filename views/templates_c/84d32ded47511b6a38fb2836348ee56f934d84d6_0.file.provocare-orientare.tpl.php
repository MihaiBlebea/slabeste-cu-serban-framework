<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 22:05:14
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\landing\provocare-orientare.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c97d9abe83a0_13356512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d32ded47511b6a38fb2836348ee56f934d84d6' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\landing\\provocare-orientare.tpl',
      1 => 1506377112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c97d9abe83a0_13356512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "../configs/provocare-start.conf", null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148065158559c97d9abe11e7_37414050', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208497601059c97d9abe5bd5_50878381', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/landing/sales_layout.tpl');
}
/* {block "body"} */
class Block_148065158559c97d9abe11e7_37414050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_148065158559c97d9abe11e7_37414050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="row offer">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="jumbotron jumbotron-fluid col-md-12 ml-md-auto">
                            <div class="container">
                                <h1 class="display-3 mb-5">Felicitari <span id="name"></span>! Esti Aproape Gata</h1>
                                <h4>Pana atunci urmareste sesiunea Video de Orientare de mai jos ca sa descoperi cum functioneaza Provocarea</h4>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/174818025"></iframe>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Offer End -->
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_208497601059c97d9abe5bd5_50878381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_208497601059c97d9abe5bd5_50878381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var check = checkIfLocalStorage();
        if(check == true)
        {
            document.getElementById("name").innerHTML = getData("name");
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
