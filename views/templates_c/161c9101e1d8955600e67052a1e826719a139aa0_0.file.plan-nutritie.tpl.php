<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 19:50:35
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\posterior-tonifiat\plan-nutritie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c95e0b39e445_96400238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '161c9101e1d8955600e67052a1e826719a139aa0' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\posterior-tonifiat\\plan-nutritie.tpl',
      1 => 1506369027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c95e0b39e445_96400238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20531398659c95e0b392455_64496337', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_20531398659c95e0b392455_64496337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20531398659c95e0b392455_64496337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Planul de Nutritie Posterior Tonifiat in 28 de zile!</h1>
                <p class="lead">Explicatie</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Descarca planul de nutritie Posterior Tonifiat in 28 de zile. In cadrul acestuia, vei descoperi:</p>
                    <ul class="exercise-section">
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Cum sa determini ce tip de posterior ai</li>
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Cum sa estimezi corect marimea portiilor, pentru a te asigura ca obtii rezultate;</li>
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Planul de alimentatie pe care sa il urmezi in urmatoarele 28 de zile;</li>
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Retete sanatoase si gustoase;</li>
                    </ul>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/06/Plan-de-alimentatie-Posterior-Tonifiat-3.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/posterior-tonifiat/plan_nutritie.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Fisa de antrenament pentru saptamana 7</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca planul de nutritie Posterior tonifiat in 28 de zile.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/06/Plan-de-alimentatie-Posterior-Tonifiat-3.pdf" class="btn btn-primary">Descarca</a>
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
}
