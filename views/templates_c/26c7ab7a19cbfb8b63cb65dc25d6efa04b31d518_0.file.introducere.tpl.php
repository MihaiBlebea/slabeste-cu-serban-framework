<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-24 12:33:55
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c7a633130c56_92573368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c7ab7a19cbfb8b63cb65dc25d6efa04b31d518' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\introducere.tpl',
      1 => 1506256425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c7a633130c56_92573368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180867692259c7a633123b50_73831488', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_180867692259c7a633123b50_73831488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_180867692259c7a633123b50_73831488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <h1 class="display-3">Talie Mai Subtire In 21 De Zile</h1>
            <p class="lead">Bine ai venit in program <?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</p>
            <hr class="my-4">
            <div class="program-section">

                <div class="text-section">
                    <p>Talie Mai Subtire in 21 de zile este rezultatul a peste 7 ani de experienta in domeniul transformarilor corporale.</p>
                    <p>Inainte de a incepe, <strong>te invit sa urmaresti cu atentie videoclipul de introducere de mai jos. </strong></p>
                    <p>Urmareste cu atentie videoclipurile cu antrenamente eficiente si urmeaza planul de alimentatie, iar rezultatele vor incepe sa apara in maxim 21 de zile. Repeta circuitul de 21 de zile ori de cate ori vrei sa inlaturi cativa centimetri in plus de pe talie sau abdomen.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/175065719"></iframe>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/talie-mai-subtire/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
