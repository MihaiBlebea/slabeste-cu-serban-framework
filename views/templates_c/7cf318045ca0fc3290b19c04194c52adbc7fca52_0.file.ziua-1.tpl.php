<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 19:25:49
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\posterior-tonifiat\ziua-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c9583d80cef9_09662239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf318045ca0fc3290b19c04194c52adbc7fca52' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\posterior-tonifiat\\ziua-1.tpl',
      1 => 1506367546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c9583d80cef9_09662239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174853652359c9583d804a18_73628003', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_174853652359c9583d804a18_73628003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_174853652359c9583d804a18_73628003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Antrenament ziua 1: Get Up and GO</h1>
                <p class="lead">Explicatie</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Acesta este un antrenament care pune accentul pe muschii abdominali, dar contine si un element de cardio la final pentru a te ajuta sa accelerezi metabolismul si sa consumi mai multe calorii. Pentru acest antrenament ai nevoie doar de un buretel sau un material moale pe care sa faci abdomenele.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Plan-de-antrenament-saptamana-1.pdf" style="color:blue;">Programul de antrenament Saptamana 1</a>).</p>
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
