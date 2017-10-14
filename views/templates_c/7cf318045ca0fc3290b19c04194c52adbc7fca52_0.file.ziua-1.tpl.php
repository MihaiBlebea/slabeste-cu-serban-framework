<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-14 14:39:05
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\posterior-tonifiat\ziua-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59e22189384c54_18093004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf318045ca0fc3290b19c04194c52adbc7fca52' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\posterior-tonifiat\\ziua-1.tpl',
      1 => 1507991938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e22189384c54_18093004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94189489059e2218937d0b4_39854293', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_94189489059e2218937d0b4_39854293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_94189489059e2218937d0b4_39854293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Antrenament ziua 1: Get Up and GO</h1>
                <p class="lead">Get up & go include exercitii menite sa iti tonifieze picioarele si...</p>
                <hr class="my-4">

                <div class="subtitle">
                    <h4>Inainte de a incepe...</h4>
                </div>

                <div class="text-section">
                    <p>Get up & go include exercitii menite sa iti tonifieze picioarele si cu precadere muschii fesieri. Cu siguranta ca la sfarsitul antrenamentului vei simti un tonus ridicat in partea inferioara a corpului. Daca nu poti duce antrenamentul la bun sfarsit, nu renunta – executa atat cat poti si incearca sa iti depasesti limitele.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/172289099"></iframe>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/06/Training-card-get-up-and-go.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/posterior-tonifiat/trainingcard_ziua1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Fisa de antrenament pentru saptamana 1</h4>
                                <p class="card-text">Descarca fisa de antrenament pentru ziua 1 (click pe imagine sau butonul de mai jos). In cadrul acesteia, vei gasi exercitiile pe care le vei efectua in antrenamentul de astazi.</p>
                                <p class="card-text">Daca vreunul din exercitiile inscrise in training card nu iti este famliar (nu stii cum sa il executi), reia sectiunea "Cum sa executi corect exercitiile".</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/06/Training-card-get-up-and-go.pdf" class="btn btn-primary">Descarca</a>
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
