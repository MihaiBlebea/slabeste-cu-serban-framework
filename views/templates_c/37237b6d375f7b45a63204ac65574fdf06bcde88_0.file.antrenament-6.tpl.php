<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-30 14:50:00
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\tabata-trainer\antrenament-6.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59cfaf1837c046_62523493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37237b6d375f7b45a63204ac65574fdf06bcde88' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\tabata-trainer\\antrenament-6.tpl',
      1 => 1506782994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfaf1837c046_62523493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61584439859cfaf18374443_83912180', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_61584439859cfaf18374443_83912180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_61584439859cfaf18374443_83912180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">

                <h1 class="display-3">Tabata Upper Body Strength</h1>
                <hr class="my-4">

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/205185973"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-XTREM.pdf">
                                <img class="card-img-top download-card-img" src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/tabata-trainer/jurnal_extreme.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca jurnalul antrenamentelor Tabata Xtreme</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer Xtreme.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-XTREM.pdf" class="btn btn-primary">Descarca</a>
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
