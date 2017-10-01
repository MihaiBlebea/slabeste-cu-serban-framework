<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-01 09:31:30
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\fit-si-supla-1\nutritie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d0b5f237c896_09909552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de98cafd1eba98ea713147300ae1c5f45875c57' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\fit-si-supla-1\\nutritie.tpl',
      1 => 1506850282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d0b5f237c896_09909552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94077003759d0b5f2373e03_88592970', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_94077003759d0b5f2373e03_88592970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_94077003759d0b5f2373e03_88592970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Introducere in programul de nutritie Fit si Supla</h1>
                <p class="lead">Nutritia reprezinta una dintre cele mai importante componente ale programului</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Urmareste videoclipul de mai jos, in care iti explicam pas cu pas cum sa urmezi planul alimentar din cadrul programului Fit si Supla.</p>
                    <p>Apoi, descarca Ghidul Fit si Supla din care vei invata cum sa mananci sanatos, cum sa te organizezi mai bine ca sa ai succes si care sunt obiceiurile alimentare pe care sa le implementezi ca sa iti transformi corpul si sa mentii rezultatele pe termen lung.</p>
                    <p>Tot mai jos pe aceasta pagina gasesti Planul de alimentatie si listele de cumparaturi pentru prima etapa a transformarii tale, precum si ebook-ul cu retete sanatoase si delicioase.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/177631010"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Ghid-FitSupla.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-1/ghid_fit_si_supla.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Ghidul Fit si Supla in 90 de Zile (Modulul 1)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul Fit si Supla in 90 de zile.<p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Ghid-FitSupla.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Plan-alimentar-Fit-Si-Supla-Luna-I.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-1/plan_nutritie_1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Planul de nutritie (Modulul 1)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca Planul de nutritie (Modulul 1)<p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Plan-alimentar-Fit-Si-Supla-Luna-I.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Retete-Fit-si-Supla-Luna-I.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-1/retete_1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Lista de retete (Modulul 1)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca Lista de retete (Modulul 1).<p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Retete-Fit-si-Supla-Luna-I.pdf" class="btn btn-primary">Descarca</a>
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
