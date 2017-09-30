<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-30 14:08:08
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\accelereaza-metabolismul\plan-4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cfa54815c969_54162351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b94e8eab89a59d8b78d6a8401eaa3e2aebf7252' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\accelereaza-metabolismul\\plan-4.tpl',
      1 => 1506780480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfa54815c969_54162351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120339138959cfa548152718_26497151', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_120339138959cfa548152718_26497151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_120339138959cfa548152718_26497151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Plan de alimentatie - saptamana 4</h1>
                <p class="lead">Descarca planul de alimentatie pentru a patra saptamana a programului</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Ai ajuns in ultima saptamana a programului. Daca ai urmat indicatiile nutritionale din program, pana acum deja ti-ai construit obiceiuri alimentare sanatoase.</p>
                    <p>Chiar daca nu ai reusit sa mananci "perfect", nu iti face griji. Continua sa faci alegeri din ce in ce mai bune si, in scurt timp, vei putea manca sanatos cu usurinta.</p>
                    <p>Da click pe imaginea de mai jos sau apasa butonul "Descarca" pentru a accesa planul alimentar si lista de cumparaturi</p>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Saptamana-IV-Plan-De-Accelerare-A-Metabolismului.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/accelereaza-metabolismul/plan_saptamana_4.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Planul de alimentatie pentru saptamana 4</h4>
                                <p>Descarca planul de alimentatie pentru a patra saptamana a programului. Desigur, poti sa inlocuiesti alimentele din acest plan de alimentatie insa doar cu altele de acelasi tip.</p>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Saptamana-IV-Plan-De-Accelerare-A-Metabolismului.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Lista-de-cumparaturi-Saptamana-IV.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/accelereaza-metabolismul/cumparaturi_saptamana_4.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Ghidul de cumparaturi pentru saptamana 4</h4>
                                <p>Descarca lista de cumparaturi pentru a patra saptamana a programului. Toate alimentele sunt cu ghid orientativ insa au fost selectate cu grija pentru rezultate maxime.</p>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Lista-de-cumparaturi-Saptamana-IV.pdf" class="btn btn-primary">Descarca</a>
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
