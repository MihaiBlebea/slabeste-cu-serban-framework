<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 19:23:56
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\nutritie-2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a22fdcca82fc9_80352452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70035e4ea48fa47992d14b5d021717dff44b75b' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\nutritie-2.tpl',
      1 => 1512242532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/download-card.tpl' => 2,
  ),
),false)) {
function content_5a22fdcca82fc9_80352452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6923326335a22fdcca61584_08915472', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_6923326335a22fdcca61584_08915472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6923326335a22fdcca61584_08915472',
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

                <?php $_smarty_tpl->_subTemplateRender("file:partials/download-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ghidul de alimentatie saptamana 2",'text'=>"Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 2.",'button_text'=>"Descarca",'download_link'=>"http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-II.pdf",'image_link'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/talie-mai-subtire/nutritie-saptamana-2.png"), 0, false);
?>


                <?php $_smarty_tpl->_subTemplateRender("file:partials/download-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Lista de alimente pentru saptamana 2",'text'=>"Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 2.",'button_text'=>"Descarca",'download_link'=>"http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-II_Talie-Mai-Subtire.pdf",'image_link'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/talie-mai-subtire/cumparaturi-saptamana-2.png"), 0, true);
?>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
