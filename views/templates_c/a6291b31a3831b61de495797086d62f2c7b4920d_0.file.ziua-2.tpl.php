<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-14 14:40:06
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\posterior-tonifiat\ziua-2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59e221c6c33b19_46041956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6291b31a3831b61de495797086d62f2c7b4920d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\posterior-tonifiat\\ziua-2.tpl',
      1 => 1507991992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e221c6c33b19_46041956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179170444859e221c6c2bf89_56506037', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_179170444859e221c6c2bf89_56506037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_179170444859e221c6c2bf89_56506037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Antrenament ziua 2: Booty Sculpt</h1>
                <p class="lead">Booty sculpt iti va activa muschii din zona inferioara a corpului...</p>
                <hr class="my-4">

                <div class="subtitle">
                    <h4>Inainte de a incepe...</h4>
                </div>

                <div class="text-section">
                    <p>Booty sculpt iti va activa muschii din zona inferioara a corpului si , in acelasi timp, include exercitii menite sa iti creasca pulsul si sa iti accelereze metabolismul. Nu sari peste incalzire si fa putin streching la final daca simti nevoia.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/172391187"></iframe>
                </div>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/06/Training-card-Booty-Sculpt.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/posterior-tonifiat/trainingcard_ziua2.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Fisa de antrenament pentru saptamana 2</h4>
                                <p class="card-text">Descarca fisa de antrenament pentru ziua 2 (click pe imagine sau butonul de mai jos). In cadrul acesteia, vei gasi exercitiile pe care le vei efectua in antrenamentul de astazi.</p>
                                <p class="card-text">Daca vreunul din exercitiile inscrise in training card nu iti este famliar (nu stii cum sa il executi), reia sectiunea "Cum sa executi corect exercitiile".</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/06/Training-card-Booty-Sculpt.pdf" class="btn btn-primary">Descarca</a>
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
