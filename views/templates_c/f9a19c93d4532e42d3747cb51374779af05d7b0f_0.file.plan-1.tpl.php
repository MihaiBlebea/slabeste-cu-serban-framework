<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-30 13:59:39
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\accelereaza-metabolismul\plan-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cfa34b037181_20309441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a19c93d4532e42d3747cb51374779af05d7b0f' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\accelereaza-metabolismul\\plan-1.tpl',
      1 => 1506779975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfa34b037181_20309441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105040519359cfa34b027b87_17674401', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_105040519359cfa34b027b87_17674401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_105040519359cfa34b027b87_17674401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Plan de alimentatie - saptamana 1</h1>
                <p class="lead">Descarca planul de alimentatie pentru prima saptamana a programului</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Acum ca ai invatat principiile unei alimentatii care te va ajuta sa scapi de kilogramele in plus, poti descarca planul de alimentatie si lista de cumparaturi pentru prima saptamana</p>
                    <p>Tine cont de faptul ca pentru a obtine o transformare corporala de durata, ai nevoie sa mananci sanatos pe termen lung, nu doar pentru o anumita perioada de timp.</p>
                    <p>De aceea, iti recomand sa adaptezi planurile de alimentatie prezentate de catre noi la preferintele si nevoile tale, folosind principiile de nutritie sanatoasa dobandite in capitolele anterioare.</p>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Saptamana-I-Plan-De-Accelerare-A-Metabolismului.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/accelereaza-metabolismul/plan_saptamana_1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Planul de alimentatie pentru saptamana 1</h4>
                                <p>Descarca planul de alimentatie pentru prima saptamana a programului. Desigur, poti sa inlocuiesti alimentele din acest plan de alimentatie insa doar cu altele de acelasi tip.</p>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Saptamana-I-Plan-De-Accelerare-A-Metabolismului.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Lista-de-cumparaturi-Saptamana-I.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/accelereaza-metabolismul/cumparaturi_saptamana_1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Ghidul de cumparaturi pentru saptamana 1</h4>
                                <p>Descarca lista de cumparaturi pentru prima saptamana a programului. Toate alimentele sunt cu ghid orientativ insa au fost selectate cu grija pentru rezultate maxime.</p>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2015/08/Lista-de-cumparaturi-Saptamana-I.pdf" class="btn btn-primary">Descarca</a>
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
