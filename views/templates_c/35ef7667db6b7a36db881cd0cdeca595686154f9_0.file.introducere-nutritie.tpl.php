<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-09 19:25:49
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\introducere-nutritie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59dbcd3d439810_89771324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35ef7667db6b7a36db881cd0cdeca595686154f9' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\introducere-nutritie.tpl',
      1 => 1506366053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dbcd3d439810_89771324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49974175959dbcd3d434b84_31032241', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_49974175959dbcd3d434b84_31032241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_49974175959dbcd3d434b84_31032241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Introducere in nutritie</h1>
                <p class="lead">Antrenamentul fara nutritie este ca fotbalul fara minge...</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Inainte de a incepe programul Talie mai subtire, urmareste videoclipul de mai jos, in care iti explicam pas cu pas cum sa urmezi planul alimentar din cadrul programului.</p>
                    <p>Apoi, tot de pe aceasta pagina, descarca <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Ghid-Cum-Sa-Scapi-De-Centimetrii-In-Plus-De-Pe-Talie-Si-ABdomen.pdf" style="color: blue;">Ghidul Cum Sa Scapi De Centimetri In Plus Din Talie Si Abdomen </a>, precum si  <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor Sanatoase</a></p>
                    <p>Hai sa incepem impreuna aceasta calatorie!</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/175209848"></iframe>
                </div>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
