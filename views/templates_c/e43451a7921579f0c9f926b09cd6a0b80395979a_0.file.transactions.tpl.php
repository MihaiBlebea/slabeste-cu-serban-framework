<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-25 20:49:34
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a41645e716e29_00080490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e43451a7921579f0c9f926b09cd6a0b80395979a' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\transactions.tpl',
      1 => 1514234971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin/search.tpl' => 1,
    'file:partials/admin-paginate-notification.tpl' => 1,
    'file:partials/admin-pagination.tpl' => 1,
  ),
),false)) {
function content_5a41645e716e29_00080490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15996604965a41645e6d4fc9_74638121', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17036278295a41645e6dd499_82253810', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16606489965a41645e6ec110_13641798', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3709271565a41645e715250_86968022', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "mobile-menu"} */
class Block_15996604965a41645e6d4fc9_74638121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_15996604965a41645e6d4fc9_74638121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/transactions" class="nav-link active" style="color:red;">Reset search</a>
<?php
}
}
/* {/block "mobile-menu"} */
/* {block "sidebar"} */
class Block_17036278295a41645e6dd499_82253810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_17036278295a41645e6dd499_82253810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>Total value: <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['total_value']->value)===null||$tmp==='' ? "0" : $tmp);?>
 RON</strong></p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/transactions" class="card-link" style="color:red;">Reset search</a>
<?php
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_16606489965a41645e6ec110_13641798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16606489965a41645e6ec110_13641798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['errorType']->value;?>
" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

            </div>
        <?php }?>
        <div class="card">
            <div class="card-body">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-lg-6">
                        <h4 class="card-title">Manage transactions</h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['transaction_count']->value)===null||$tmp==='' ? "0" : $tmp);?>
 transactions in database</h6>
                    </div>
                    <div class="col-lg-6">
                        <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:partials/admin/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/admin/transactions",'options'=>$_smarty_tpl->tpl_vars['options']->value), 0, false);
?>

                        <?php }?>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <canvas id="myChart" style="height:50vh; width:80vw"></canvas>
                </div>
                <hr />
                
                <!-- Paginate notification start -->
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-paginate-notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Paginate notification end -->

                <div class="row d-none d-md-flex">
                    <div class="col-md-2 elipsis">
                        Date
                    </div>
                    <div class="col-md-2 elipsis">
                        Name
                    </div>
                    <div class="col-md-2 elipsis">
                        Username
                    </div>
                    <div class="col-md-3 elipsis">
                        Program
                    </div>
                    <div class="col-md-1 elipsis">
                        Value
                    </div>
                    <div class="col-md-2 elipsis">
                        <span class="float-sm-right">Trans. ID</span>
                    </div>
                </div>
                <hr />
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
?>
                    <div class="row row-hover mb-2">
                        <div class="col-md-2 col-sm-4 elipsis">
                            <span class="mr-1"><?php echo $_smarty_tpl->tpl_vars['transaction']->value->index;?>
.</span> <?php echo $_smarty_tpl->tpl_vars['transaction']->value->reg_date;?>

                        </div>
                        <div class="col-md-2 col-sm-4 elipsis">
                            <span class="float-sm-right float-md-left"><?php echo $_smarty_tpl->tpl_vars['transaction']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['transaction']->value->lastName;?>
</span>
                        </div>
                        <div class="col-md-2 col-sm-4 elipsis ">
                            <span class="float-sm-right"><?php echo $_smarty_tpl->tpl_vars['transaction']->value->username;?>
</span>
                        </div>
                        <div class="col-md-3 col-sm-4 elipsis">
                            <?php echo $_smarty_tpl->tpl_vars['transaction']->value->program_tag;?>

                        </div>
                        <div class="col-md-1 col-sm-4 elipsis">
                            <span class="float-sm-right float-md-left"><?php echo $_smarty_tpl->tpl_vars['transaction']->value->value;?>
ron</span>
                        </div>
                        <div class="col-md-2 col-sm-4 elipsis">
                            <span class="float-sm-right"><?php echo $_smarty_tpl->tpl_vars['transaction']->value->transaction_id;?>
</span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <hr />

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path_item'=>"transactions"), 0, false);
?>

                <!-- Pagination end -->

                <hr />
                <div class="row">
                    <div class="col">
                        <p>Total value: <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['total_value']->value)===null||$tmp==='' ? "0" : $tmp);?>
 RON</strong></p>
                    </div>
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/transactions" class="card-link" style="color:red;float: right;">Reset search</a><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_3709271565a41645e715250_86968022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3709271565a41645e715250_86968022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        axios.get("<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/api/get/transactions").then((response)=> {
            return response.data;
        }).then((data)=> {

            console.log(Object.values(data));
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Object.keys(data),
                    datasets: [{
                        label: 'RON',
                        borderColor: "blue",
                        data: Object.values(data),
                        borderWidth: 1
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Last 30 days transactions'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
