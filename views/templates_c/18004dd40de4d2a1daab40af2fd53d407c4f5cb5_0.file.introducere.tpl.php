<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-05 19:46:32
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\fit-si-supla-2\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d68c18e98059_86263156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18004dd40de4d2a1daab40af2fd53d407c4f5cb5' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\fit-si-supla-2\\introducere.tpl',
      1 => 1507232788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d68c18e98059_86263156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115507265559d68c18e8c7c3_43365834', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_115507265559d68c18e8c7c3_43365834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_115507265559d68c18e8c7c3_43365834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Fit si Supla Modulul 2</h1>
                <p class="lead">Bine ai venit in program <?php echo $_smarty_tpl->tpl_vars['auth']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['auth']->value->last_name;?>
</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Urmareste videoclipul de orientare si descarca ghidul antrenamentelor pentru modulul 2.</p>
                    <p>Inainte de a te apuca de treaba nu uita sa verifici sectiunea de Nutritie pentru a descarca planul alimentar, listele de cumparaturi si ebook-ul cu retete santoase.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/177630928"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/10/Fisa-de-antrenament-modul-2.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-2/ghid_antrenament_modul_2.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Fit si supla (Modulul 2)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor.<p>
                                <p>Vei descoperi in cadrul acestuia cum sa combini antrenamentele video din modulul 2.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/10/Fisa-de-antrenament-modul-2.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/fit-si-supla-2/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
