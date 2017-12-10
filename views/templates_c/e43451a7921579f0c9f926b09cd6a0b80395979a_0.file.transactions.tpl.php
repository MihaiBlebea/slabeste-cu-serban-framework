<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-10 14:02:04
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a2d3e5c29c325_23716407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e43451a7921579f0c9f926b09cd6a0b80395979a' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\transactions.tpl',
      1 => 1512914483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-paginate-notification.tpl' => 1,
    'file:partials/admin-pagination.tpl' => 1,
  ),
),false)) {
function content_5a2d3e5c29c325_23716407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20376798125a2d3e5ad3d0b2_13131800', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18652182625a2d3e5c297a03_72348030', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_20376798125a2d3e5ad3d0b2_13131800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20376798125a2d3e5ad3d0b2_13131800',
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
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Search by
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" onclick="sendSearch('username');">Username</a>
                                    <a class="dropdown-item" onclick="sendSearch('email');">Email</a>
                                    <a class="dropdown-item" onclick="sendSearch('program_tag');">Program Tag</a>
                                    <a class="dropdown-item" onclick="sendSearch('reg_date');">After date</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <canvas id="myChart" style="height:50vh; width:80vw"></canvas>
                </div>

                <!-- Paginate notification start -->
                <?php $_smarty_tpl->_subTemplateRender("file:partials/admin-paginate-notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Paginate notification end -->

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Program tag</th>
                            <th>Value</th>
                            <th>Transaction ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_smarty_tpl->tpl_vars['transactions']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
?>
                                <tr>
                                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['transaction']->value->index;?>
</th>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->reg_date;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['transaction']->value->lastName;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->username;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->program_tag;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->value;?>
ron</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->transaction_id;?>
</td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <?php }?>
                    </tbody>
                </table>

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
class Block_18652182625a2d3e5c297a03_72348030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18652182625a2d3e5c297a03_72348030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function getSearch()
        {
            return search = document.getElementById('search-input').value;
        }

        function sendSearch(mode)
        {
            var client = getSearch();
            return window.location="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/transaction/search/" + mode + "/" + client;
        }
    <?php echo '</script'; ?>
>
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
