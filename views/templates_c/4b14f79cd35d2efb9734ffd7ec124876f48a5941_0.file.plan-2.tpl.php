<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-30 14:02:24
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\accelereaza-metabolismul\plan-2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cfa3f041c497_01998977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b14f79cd35d2efb9734ffd7ec124876f48a5941' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\accelereaza-metabolismul\\plan-2.tpl',
      1 => 1506780138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfa3f041c497_01998977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31674101559cfa3f0414013_31846114', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_31674101559cfa3f0414013_31846114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_31674101559cfa3f0414013_31846114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Plan de alimentatie - saptamana 2</h1>
                <p class="lead">Descarca planul de alimentatie pentru a doua saptamana a programului</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>De pe aceasta pagina poti descarca planul de alimentatie si lista de cumparaturi pentru a doua saptamana a programului. Da click pe imaginea de mai jos sau apasa butonul "Descarca".</p>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Saptamana-II-Plan-De-Accelerare-A-Metabolismului.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/accelereaza-metabolismul/plan_saptamana_2.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Planul de alimentatie pentru saptamana 2</h4>
                                <p>Descarca planul de alimentatie pentru a doua saptamana a programului. Desigur, poti sa inlocuiesti alimentele din acest plan de alimentatie insa doar cu altele de acelasi tip.</p>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Saptamana-II-Plan-De-Accelerare-A-Metabolismului.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Lista-de-cumparaturi-Saptamana-II_2.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/accelereaza-metabolismul/cumparaturi_saptamana_2.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Ghidul de cumparaturi pentru saptamana 2</h4>
                                <p>Descarca lista de cumparaturi pentru a doua saptamana a programului. Toate alimentele sunt cu ghid orientativ insa au fost selectate cu grija pentru rezultate maxime.</p>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Lista-de-cumparaturi-Saptamana-II_2.pdf" class="btn btn-primary">Descarca</a>
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
