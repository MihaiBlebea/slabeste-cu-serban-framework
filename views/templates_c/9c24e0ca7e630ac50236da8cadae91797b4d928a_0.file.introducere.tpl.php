<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-27 21:40:56
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\accelereaza-metabolismul\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cc1ae88e81c8_10587189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c24e0ca7e630ac50236da8cadae91797b4d928a' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\accelereaza-metabolismul\\introducere.tpl',
      1 => 1506548451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cc1ae88e81c8_10587189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92755235659cc1ae88de6f7_39550454', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_92755235659cc1ae88de6f7_39550454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_92755235659cc1ae88de6f7_39550454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Accelereaza Metabolismul</h1>
                <p class="lead">Bine ai venit in program <?php echo $_smarty_tpl->tpl_vars['auth']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['auth']->value->last_name;?>
</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>In cadrul programului vei invata sa mananci corect ca sa-ti accelerezi metabolismul si sa-ti transformi corpul intr-o masina de ars grasimi.</p>
                    <p>Toate acestea, fara sa urmezi diete stricte, fara reguli complicate de nutritie si fara sa te infometezi.</p>
                    <p>Stiu ca ai cautat pana acum informatii despre slabit pe internet, si sunt convinsa ca ai gasit o tona de informatii si sute de reguli bizare care mai mult ti-au provoacat confuzie si frustrare.</p>
                    <p>De aceea, am inclus in program raspunsurile la cele mai arzatoare intrebari:</p>
                    <ul class="exercise-section">
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Cum trebuie sa alegi corect si sa combini alimentele?</li>
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Cum sa-ti construiesti mese sanatoase ca sa arzi grasime?</li>
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Cum sa iti estimezi portiile, in asa fel incat sa nu renunti complet la alimentele preferate?</li>
                        <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Cum sa implementezi planul de accelerare a metabolismului ca sa nu iti mai faci griji la cantar?</li>
                    </ul>
                    <p>Am ales informatiile dovedite stiintific ca functioneaza si ca au un impact major asupra transformarii tale corporale.</p>
                    <p>Un plan alimentar echilibrat te va ajuta sa scapi pentru totdeauna de kilogramele in plus, daca respecta regula celor trei S:</p>
                    <strong>Primul S - Simplitate</strong>
                    <p>Adica contine reguli usor de urmat. Banuiesc ca ai suficiente lucruri pe cap si ca nu iti doresti inca 1001 de reguli pe care sa le respecti zilnic.</p>
                    <strong>Al doilea S - Stiinta</strong>
                    <p>Planul alimentar trebuie sa aiba la baza doar alimente dovedite stiintific.</p>
                    <p>Orice alta incercare de a manca alimente minunte sau a incerca metode nedovedite ca functioneaza nu te ajuta sa slabesti – adica iti consuma timpul si banii.</p>
                    <strong>Al treilea S - Succes</strong>
                    <p>Iti vom prezenta doar acele reguli care i-au ajutat pe clientii nostrii de pana acum sa aiba rezultate pozitive.</p>
                    <p>Cum sa profiti la maxim de pe urma programului?</p>
                    <p>Fiecare capitol este un mini-curs intensiv care te ajuta sa dobandesti puterea de a ajunge la rezultatele pe care ti le doresti.</p>
                    <p>Pentru a maximiza rezultatele pe care le vei obtine, citesti tot cursul inainte de a incepe sa il pui in practica.</p>
                    <p>Fiecare capitol se incheie cu materiale de descarcat si resurse, care te ajuta sa iti contorizezi rezultatele si sa ramai pe drumul cel bun.</p>
                    <p>Apoi, dupa ce parcurgi cursul intensiv Accelereaza-ti metabolismul, descarca planul de nutritie si listele de cumparaturi si incepe sa pui in practica abilitatile pe care le-ai dobandit.</p>
                    <p>Planul nutritional este cu caracter de exemplu, insa informatiile din curs te vor ajuta sa devii tu propriul tau nutritionist si sa adaptezi planul la nevoile si obiectivele tale.</p>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/accelereaza-metabolismul/lectia-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
