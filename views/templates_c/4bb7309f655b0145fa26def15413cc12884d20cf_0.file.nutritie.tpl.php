<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-06 20:32:16
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\fit-si-supla-3\nutritie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d7e85061ee76_98175924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb7309f655b0145fa26def15413cc12884d20cf' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\fit-si-supla-3\\nutritie.tpl',
      1 => 1507321920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d7e85061ee76_98175924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175924563759d7e850615716_07971909', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_175924563759d7e850615716_07971909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_175924563759d7e850615716_07971909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Introducere in programul de nutritie Fit si Supla</h1>
                <p class="lead">Text introductiv</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Mai jos gasesti planul de alimentatie, listele de cumparaturi si ghidul cu retete aferente modulului III.</p>
                    <p>Mai sunt doar 30 de zile pana la finalizarea programului Fit si Supla in 90 de Zile, insa povestea transformarii tale nu se opreste aici.</p>
                    <p>Chiar daca ti-ai atins obiectivele, continua sa mananci sanatos si sa faci miscare - acesta este doar inceputul calatoriei tale catre un corp fit, suplu si sanatos.</p>
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
                                <h4 class="card-title">Ghidul Fit si Supla in 90 de Zile</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul Fit si Supla in 90 de zile.<p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Ghid-FitSupla.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Plan-alimentar-Fit-si-Supla-Luna-III.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-3/plan_nutritie_3.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Planul de nutritie (Modulul 3)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca Planul de nutritie (Modulul 3)<p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Plan-alimentar-Fit-si-Supla-Luna-III.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Retete-Fit-si-Supla-Luna-III.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-3/retete_3.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Lista de retete (Modulul 3)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca Lista de retete (Modulul 3).<p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Retete-Fit-si-Supla-Luna-III.pdf" class="btn btn-primary">Descarca</a>
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
