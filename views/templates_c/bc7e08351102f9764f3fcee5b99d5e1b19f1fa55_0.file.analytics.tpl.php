<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-29 18:26:10
  from 'C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\analytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4688c2090a07_70171157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7e08351102f9764f3fcee5b99d5e1b19f1fa55' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\analytics.tpl',
      1 => 1514571967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/landing-loading.tpl' => 1,
  ),
),false)) {
function content_5a4688c2090a07_70171157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12062375925a4688c2046f69_08873201', "head-script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20890915135a4688c2050005_75865045', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5477273715a4688c20517b4_29220912', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13675023495a4688c2052da1_33022486', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8350329485a4688c2088bb7_15859714', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "head-script"} */
class Block_12062375925a4688c2046f69_08873201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head-script' => 
  array (
    0 => 'Block_12062375925a4688c2046f69_08873201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/js/vue.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "head-script"} */
/* {block "mobile-menu"} */
class Block_20890915135a4688c2050005_75865045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_20890915135a4688c2050005_75865045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a v-on:click="changePage('landing')" class="nav-link active">Landing Pages</a>
    <a v-on:click="changePage('confirmation')" class="nav-link active">Confirmation Pages</a>
    <a v-on:click="changePage('sales')" class="nav-link active">Sales Pages</a>
    <a v-on:click="changePage('checkout')" class="nav-link active">Checkout Pages</a>
    <a v-on:click="changePage('payment')" class="nav-link active">Payment Pages</a>
<?php
}
}
/* {/block "mobile-menu"} */
/* {block "sidebar"} */
class Block_5477273715a4688c20517b4_29220912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_5477273715a4688c20517b4_29220912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Pages</h3>
    <a v-on:click="changePage('landing')" class="nav-link active">Landing Pages</a>
    <a v-on:click="changePage('confirmation')" class="nav-link active">Confirmation Pages</a>
    <a v-on:click="changePage('sales')" class="nav-link active">Sales Pages</a>
    <a v-on:click="changePage('checkout')" class="nav-link active">Checkout Pages</a>
    <a v-on:click="changePage('payment')" class="nav-link active">Payment Pages</a>
<?php
}
}
/* {/block "sidebar"} */
/* {block "body"} */
class Block_13675023495a4688c2052da1_33022486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13675023495a4688c2052da1_33022486',
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
                        <div class="row">
                            <div class="col-md-6 p-2">
                                <label>Start date:</label>
                                <input class="form-control" type="date" v-model="request.dateStart">
                            </div>
                            <div class="col-md-6 p-2">
                                <label>End date:</label>
                                <input class="form-control" type="date" v-model="request.dateEnd">
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="alert alert-success"
                     role="alert"
                     v-if="request.dateStart !== null && request.dateStart !== '' || request.dateEnd !== null && request.dateEnd !== ''">
                    Interval <span v-text="request.dateStart"></span> >> <span v-text="request.dateEnd"></span>
                </div>

                <div v-if="loading">
                    <?php $_smarty_tpl->_subTemplateRender('file:partials/landing-loading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <canvas id="chart-lines"
                        style="width:100%;"
                        v-bind:class="{ hidden: loading }"></canvas>
                <hr />

                <div class="row d-none d-md-flex">
                    <div class="col-md-10 col-sm-10 elipsis">
                        Page
                    </div>
                    <div class="col-md-2 col-sm-2 float-right">
                        Traffic
                    </div>
                </div>
                <hr />

                <template v-for="(item, index) in trafficForTable">
                    <div class="row row-hover mb-2">
                        <div class="col-md-10 col-sm-10 elipsis">
                            <span class="mr-2" v-text="index + 1"></span> <span v-text="item.url"></span>
                        </div>
                        <div class="col-md-2 col-sm-2 float-right">
                            </span><span v-text="item.count"></span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                </template>
                <template v-if="totalTraffic !== 0">
                    <hr />
                    <div class="row">
                        <div class="col-md-10 col-sm-10">
                            <strong v-on:click="changePage('landing')">Total:</strong>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <strong><span v-text="totalTraffic"></span></strong>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_8350329485a4688c2088bb7_15859714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8350329485a4688c2088bb7_15859714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
>

    let app = new Vue({
        el: '#app',
        data: {
            request: {
                type: 'pages',
                pages: 'sale_pages',
                dateStart: null,
                dateEnd: null,
                metric: 'ga:sessions'
            },
            loading: false,
            trafficData: null,
            trafficForTable: []
        },
        watch: {
            request: function(val)
            {
                console.log('ceva');
            }
        },
        computed: {
            totalTraffic: function()
            {
                if(this.trafficForTable !== [])
                {
                    let total = 0;
                    for(let i = 0; i < this.trafficForTable.length; i++)
                    {
                        total += this.trafficForTable[i].count;
                    }
                    return total;
                } else {
                    return 0;
                }
            }
        },
        methods: {
            randomColor: function()
            {
                let letters = '0123456789ABCDEF';
                let color = '#';
                for (let i = 0; i < 6; i++)
                {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            },
            sendPayload: function()
            {
                this.loading = true;
                axios.get("<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/api/analytics/" + this.request.type + "/" + this.request.pages + "?dateStart=" + this.request.dateStart + "&dateEnd=" + this.request.dateEnd + "&metric=" + this.request.metric).then((response)=> {
                    return response.data;
                }).then((data)=> {
                    this.trafficData = data;
                    this.loading = false;

                    this.parseDataForTable(this.trafficData);
                    this.parseDataForChart(this.trafficData);

                })
            },
            parseDataForChart: function(data)
            {
                let datasets = [];
                let urls = [];
                let date = [];

                for(let i = 0; i < data.length; i++)
                {
                    if(date.includes(data[i].date) == false)
                    {
                        date.push(data[i].date);
                    }

                    if(Object.keys(urls).includes(data[i].url) == false)
                    {
                        urls[data[i].url] = []
                    }
                }

                let urlKey = Object.keys(urls);
                for(let j = 0; j < data.length; j++)
                {
                    for(let k = 0; k < urlKey.length; k++)
                    {
                        if(data[j].url == urlKey[k])
                        {
                            urls[urlKey[k]].push(data[j].count)
                        }
                    }
                }

                for(let h = 0; h < urlKey.length; h++)
                {
                    datasets.push({
                        label: urlKey[h],
                        fill:false,
                        borderColor: this.randomColor(),
                        data: urls[urlKey[h]],
                        borderWidth: 3
                    })
                }

                let ctx = document.getElementById("chart-lines").getContext('2d');
                let salesPageChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: date,
                        datasets: datasets
                    },
                });
            },
            parseDataForTable: function(data)
            {
                let result = [];
                for(let i = 0; i < data.length; i++)
                {
                    let exist = false;
                    for(let j = 0; j < result.length; j++)
                    {
                        if(result[j].url == data[i].url)
                        {
                            exist = j;
                        }
                    }

                    if(exist === false)
                    {
                        result.push({
                            url: data[i].url,
                            count: parseInt(data[i].count)
                        });
                    } else {
                        result[exist].count += parseInt(data[i].count);
                    }
                }
                this.trafficForTable = result;
                return this.trafficForTable;
            },
            changeType: function(type)
            {
                this.request.type = type;
                this.sendPayload();
            },
            changePage: function(pages)
            {
                this.request.pages = pages;
                this.sendPayload();
            }
        },
        created: function()
        {
            this.sendPayload();
        }
    })

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
