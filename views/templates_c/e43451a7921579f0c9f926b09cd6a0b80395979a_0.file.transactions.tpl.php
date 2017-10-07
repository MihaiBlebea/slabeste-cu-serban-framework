<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-07 22:35:43
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59d956bf2342b9_49653223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e43451a7921579f0c9f926b09cd6a0b80395979a' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\transactions.tpl',
      1 => 1507415740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d956bf2342b9_49653223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105671621859d956bf1f0340_19316359', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58252158359d956bf232075_34063779', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "body"} */
class Block_105671621859d956bf1f0340_19316359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_105671621859d956bf1f0340_19316359',
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
                                    <a class="dropdown-item" onclick="sendSearch('regdate');">After date</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>
                <!-- <hr /> -->
                <div class="row">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['transaction']->value) {
?>
                                <tr>
                                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</th>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->regdate;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['transaction']->value->lastName;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->username;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->program_tag;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->value;?>
</td>
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
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_58252158359d956bf232075_34063779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_58252158359d956bf232075_34063779',
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
            var result = data;
        })
        console.log(result);



        var ctx = document.getElementById("myChart").getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line'
            // data: getTransactions()
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
