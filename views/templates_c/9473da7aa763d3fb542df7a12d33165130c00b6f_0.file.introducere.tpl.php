<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-30 15:20:20
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\provocare-14-zile\introducere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cfb6340b6bf2_65114396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9473da7aa763d3fb542df7a12d33165130c00b6f' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\provocare-14-zile\\introducere.tpl',
      1 => 1506784453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfb6340b6bf2_65114396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185113713559cfb6340acfa3_05247636', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_185113713559cfb6340acfa3_05247636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_185113713559cfb6340acfa3_05247636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Provocarea de 14 zile</h1>
                <p class="lead">Bine ai venit in program <?php echo $_smarty_tpl->tpl_vars['auth']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['auth']->value->last_name;?>
</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Antrenamentele din provocare au o durata extrem de scurta (10 minute), insa sunt foarte eficiente. Aceastea sunt construite dupa sistemul High Intensity Interval Training - antrenamentul dovedit stiintific ca arde de 9 ori mai multa grasime decat sesiunile clasice de cardio.</p>
                    <p>Asadar, in mai putin timp, poti arde in sfarsit mai multe calorii</p>
                    <p>Intrucat durata antrenamentelor este redusa iti va fi usor sa le incluzi in programul tau, indiferent cat de aglomerat este acesta. Asadar, vei putea sa depasesti cu usurinta bariera "timpului".</p>
                    <p>Daca esti intr-o forma fizica excelenta, poti repeta antrenamentul de 2-3 ori in fiecare zi, pentru a maximiza efectele acestuia.</p>
                    <p>Trebuie sa tii cont de faptul ca nu este OBLIGATORIU sa faci mai multe sesiuni succesive, ci poti sa le imparti pe parcursul zilei: de exemplu, poti face misiunea la prima ora a zilei, urmand sa o repeti ulterior.</p>
                    <p>Iti doresc mult succes.</p>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/member/provocare-14-zile/misiune-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
