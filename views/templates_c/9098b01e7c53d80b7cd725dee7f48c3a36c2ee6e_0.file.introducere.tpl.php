<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-01 08:21:09
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\fit-si-supla-1\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d0a575534b57_43375199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9098b01e7c53d80b7cd725dee7f48c3a36c2ee6e' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\fit-si-supla-1\\introducere.tpl',
      1 => 1506846066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d0a575534b57_43375199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71997778559d0a5755289c5_48815479', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_71997778559d0a5755289c5_48815479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_71997778559d0a5755289c5_48815479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Fit si Supla Modulul 1</h1>
                <p class="lead">Bine ai venit in program <?php echo $_smarty_tpl->tpl_vars['auth']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['auth']->value->last_name;?>
</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Inainte de a incepe sa iti sculptezi posteriorul, te invit sa urmaresti cu atentie videoclipul de introducere de mai jos, pentru a afla cum sa folosesti programul.</p>
                    <p>In primul modul al programului Fit si Supla in 90 de zile vom pune accentul pe eliminarea centimetrilor in plus si pe cresterea rezistentei la efort.</p>
                    <p>Pentru a atinge acest obiectiv in cel mai rapid mod posibil am combinat cele mai eficiente exercitii de cardio intr-un sistem de antrenament denumit High Intensity Interval Training (daca vrei sa stii mai multe despre acest sistem verifica ghidul programului de antrenament de mai sus.</p>
                    <p>Ca sa obtii rezultate maxime incearca sa urmezi pauzele dupa cum le-am introdus in videoclipurile de antrenament. Cu cat pauza este mai scurta, cu atat intensitatea antrenamentului este mai ridicata.</p>
                    <p>Apoi, dupa ce parcurgi videoclipul de introducere, descarca Ghidul programului de antrenament pentru modulul 1 (il gasesti mai jos pe aceasta pagina) si, apoi, verifica capitolul de nutritie capitolul de nutritie.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/177630929"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Fisa-de-antrenament-modul-1-saptamana-1.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/fit-si-supla-1/ghid_antrenament_modul_1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Fit si supla (Modulul 1)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor.<p>
                                <p>Vei descoperi in cadrul acestuia cum sa combini antrenamentele video din modulul 1.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Fisa-de-antrenament-modul-1-saptamana-1.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/fit-si-supla-1/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
