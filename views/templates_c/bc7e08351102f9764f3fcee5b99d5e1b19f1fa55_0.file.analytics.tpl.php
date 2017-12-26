<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-26 20:54:18
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\analytics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a42b6fa527963_02923009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7e08351102f9764f3fcee5b99d5e1b19f1fa55' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\analytics.tpl',
      1 => 1514321656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin/search.tpl' => 1,
  ),
),false)) {
function content_5a42b6fa527963_02923009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19645592975a42b6fa5011c7_22784775', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17458958575a42b6fa509021_47724768', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7659269855a42b6fa50b241_67253467', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3511249045a42b6fa524755_03400573', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "mobile-menu"} */
class Block_19645592975a42b6fa5011c7_22784775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_19645592975a42b6fa5011c7_22784775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/create/new" class="nav-link active">All Sales Pages</a>
<?php
}
}
/* {/block "mobile-menu"} */
/* {block "sidebar"} */
class Block_17458958575a42b6fa509021_47724768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_17458958575a42b6fa509021_47724768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/admin/client/create/new" class="card-link">All Sales Pages</a>
<?php
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_7659269855a42b6fa50b241_67253467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7659269855a42b6fa50b241_67253467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value == true) {?>
            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['errorType']->value;?>
" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

            </div>
        <?php }?>
        <div class="card">
            <div class="card-body">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-lg-6">
                        <h4 class="card-title">Analytics</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Manage traffic and events</h6>
                    </div>
                    <div class="col-lg-6">
                        <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:partials/admin/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('path'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/admin/clients",'options'=>$_smarty_tpl->tpl_vars['options']->value), 0, false);
?>

                        <?php }?>
                    </div>
                </div>
                <hr />


                <canvas id="sales-page-chart" style="height:50vh; width:80vw"></canvas>
                <hr />

                <!-- Paginate notification start -->
                
                <!-- Paginate notification end -->

                <div class="row d-none d-md-flex">
                    <div class="col-md-3 elipsis">
                        Name
                    </div>
                    <div class="col-md-2 elipsis">
                        Username
                    </div>
                    <div class="col-md-4 elipsis">
                        Email
                    </div>
                    <div class="col-md-1 elipsis">
                        Prod.
                    </div>
                    <div class="col-md-2 elipsis">
                        <span class="float-md-right">Spent</span>
                    </div>
                </div>
                <hr />
                


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_3511249045a42b6fa524755_03400573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3511249045a42b6fa524755_03400573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++)
        {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    axios.get("<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/api/sale-pages").then((response)=> {
        return response.data;
    }).then((data)=> {

        let yAxes = [];
        let dataset = [];

        for(let item in data)
        {
            for(let foo in data[item])
            {
                let int = parseInt(data[item][foo].count);
                if(yAxes.includes(int) == false)
                {
                    yAxes.push(int)
                    dataset.push({
                        label: data[item][foo].url,
                        borderColor: getRandomColor(),
                        data: data[item][foo].count,
                        borderWidth: 1
                    })
                }
            }
        }

        let count = yAxes.sort(function(a, b) {
            return b - a});
        console.log(Object.values(dataset))

        let ctx = document.getElementById("sales-page-chart").getContext('2d');
        let salesPageChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: dataset
            },
            options: {
                title: {
                    display: true,
                    text: 'Sales pages'
                },
                scales: {
                    yAxes: [{
                        type: 'category',
                        labels: count
                    }],
                    xAxes: [{
                        type: 'category',
                        labels: Object.keys(data).map((item)=> {
                            return item;
                        }),
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
