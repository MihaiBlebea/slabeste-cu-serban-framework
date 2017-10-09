<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-09 19:26:00
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\nutritie-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59dbcd48185898_16933681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284b7bbe63d9bae2a60e41ec4fe1a677aff7040d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\nutritie-1.tpl',
      1 => 1506365991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dbcd48185898_16933681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71433701559dbcd480cbcb9_93124079', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_71433701559dbcd480cbcb9_93124079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_71433701559dbcd480cbcb9_93124079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Nutritie Saptamana 1</h1>
                <p class="lead">In prima saptamana a programului ne focusam pe ...</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru prima saptamana. Iti recomand sa iti planifici mesele in avans pentru a te asigura ca nu iei decizii eronate in privinta alimentatiei, atunci cand esti obosita sau stresata si cand autocontroul tau este scazut.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-I.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/talie-mai-subtire/nutritie-saptamana-1.png">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Ghidul de alimentatie saptamana 1</h4>
                                <p class="card-text">Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 1.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-I.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-I_Talie-Mai-subtire.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/talie-mai-subtire/cumparaturi-saptamana-1.png">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Lista de alimente pentru saptamana 1</h4>
                                <p class="card-text">Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 1.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-I_Talie-Mai-subtire.pdf" class="btn btn-primary">Descarca</a>
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
