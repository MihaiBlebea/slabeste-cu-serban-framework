<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-14 14:53:52
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\nutritie-2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59e22500b99fc7_13256459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70035e4ea48fa47992d14b5d021717dff44b75b' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\nutritie-2.tpl',
      1 => 1507992820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e22500b99fc7_13256459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75949488059e22500b916f6_37147296', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_75949488059e22500b916f6_37147296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_75949488059e22500b916f6_37147296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Nutritie Saptamana 2</h1>
                <p class="lead">"Unge 2 crackersi wasa cu branza lacteea si..."</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru a II-a saptamana din cadrul programului.</p>
                    <p>Iti recomand sa incepi sa fii atenta la senzatiile de foame si satietate - este foarte important atat cand vrei sa slabesti, cat si ca sa mentii rezultatele pe termen lung sa mananci cand iti este foame fizic si, mai ales, sa nu mananci niciodata dupa ce te-ai saturat.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-II.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/talie-mai-subtire/nutritie-saptamana-2.png">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Ghidul de alimentatie saptamana 2</h4>
                                <p class="card-text">Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 2.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-II.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-II_Talie-Mai-Subtire.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/talie-mai-subtire/cumparaturi-saptamana-2.png">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Lista de alimente pentru saptamana 2</h4>
                                <p class="card-text">Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 2.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-II_Talie-Mai-Subtire.pdf" class="btn btn-primary">Descarca</a>
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
