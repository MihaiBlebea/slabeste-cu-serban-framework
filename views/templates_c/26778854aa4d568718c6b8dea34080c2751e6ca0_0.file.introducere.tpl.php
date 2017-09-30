<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-30 14:26:22
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\tabata-trainer\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cfa98e711726_07174278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26778854aa4d568718c6b8dea34080c2751e6ca0' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\tabata-trainer\\introducere.tpl',
      1 => 1506781577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfa98e711726_07174278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75754702159cfa98e701e09_03195882', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_75754702159cfa98e701e09_03195882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_75754702159cfa98e701e09_03195882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">

                <h1 class="display-3">Tabata Trainer</h1>
                <p class="lead">Bine ai venit in program <?php echo $_smarty_tpl->tpl_vars['auth']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['auth']->value->last_name;?>
</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Inainte de a incepe sa programul Tabata Trainer, urmareste cu atentie videoclipul de introducere de mai jos, pentru a afla cum sa combini antrenamentele din cadrul programului ca sa obtii rezultate bune, intr-un timp cat mai scurt.</p>
                    <p>Apoi alocati aproximativ 10-15 minute pentru a parcurge Ghidul Tabata Trainer pentru a afla mai multe despre protocolul Tabata si antrenamentele incluse in program (poti descarca ghidul de mai jos).</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/205184526"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/02/Ghidul-Tabata-Trainer.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/tabata-trainer/ghid_tabata.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Tabata Trainer</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer.</p>
                                <p>Parcurge ghidul pentru a intelege cum functioneaza sistemul Tabata Trainer si a vedea cum sa folosesti antrenamentele din cadrul programului.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/02/Ghidul-Tabata-Trainer.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-START-.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/tabata-trainer/jurnal_start.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca jurnalul antrenamentelor Tabata Start</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer Start.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-START-.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-XTREM.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/tabata-trainer/jurnal_extreme.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca jurnalul antrenamentelor Tabata Xtreme</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer Xtreme.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-XTREM.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/tabata-trainer/antrenament-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
