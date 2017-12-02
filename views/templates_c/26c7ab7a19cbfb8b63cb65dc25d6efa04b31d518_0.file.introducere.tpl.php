<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 19:51:04
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a230428a9d476_62314224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c7ab7a19cbfb8b63cb65dc25d6efa04b31d518' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\introducere.tpl',
      1 => 1512244242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/page-title.tpl' => 1,
    'file:partials/video.tpl' => 1,
  ),
),false)) {
function content_5a230428a9d476_62314224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7251123155a230428a89e31_90218830', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_7251123155a230428a89e31_90218830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7251123155a230428a89e31_90218830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/page-title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Talie Mai Subtire In 21 De Zile",'sub_title'=>"Bine ai venit in program ".((string)$_smarty_tpl->tpl_vars['auth']->value->first_name)." ".((string)$_smarty_tpl->tpl_vars['auth']->value->last_name)), 0, false);
?>


                <div class="text-section">
                    <p>Talie Mai Subtire in 21 de zile este rezultatul a peste 7 ani de experienta in domeniul transformarilor corporale.</p>
                    <p>Inainte de a incepe, <strong>te invit sa urmaresti cu atentie videoclipul de introducere de mai jos. </strong></p>
                    <p>Urmareste cu atentie videoclipurile cu antrenamente eficiente si urmeaza planul de alimentatie, iar rezultatele vor incepe sa apara in maxim 21 de zile. Repeta circuitul de 21 de zile ori de cate ori vrei sa inlaturi cativa centimetri in plus de pe talie sau abdomen.</p>
                </div>

                <?php $_smarty_tpl->_subTemplateRender("file:partials/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video_link'=>"https://player.vimeo.com/video/175065719"), 0, false);
?>


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
