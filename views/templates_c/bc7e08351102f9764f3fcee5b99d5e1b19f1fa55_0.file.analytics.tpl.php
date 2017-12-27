<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-27 20:27:47
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\admin\analytics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a440243e53301_55056512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7e08351102f9764f3fcee5b99d5e1b19f1fa55' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\admin\\analytics.tpl',
      1 => 1514406464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin/search.tpl' => 1,
    'file:partials/landing-loading.tpl' => 1,
  ),
),false)) {
function content_5a440243e53301_55056512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20286998735a440243e2cb69_24224207', "head-script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3296670265a440243e353a9_28570539', "mobile-menu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21286898605a440243e375f0_56485524', "sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283883045a440243e39694_83404753', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157630215a440243e4fdb5_01156196', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/admin/admin_layout.tpl');
}
/* {block "head-script"} */
class Block_20286998735a440243e2cb69_24224207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head-script' => 
  array (
    0 => 'Block_20286998735a440243e2cb69_24224207',
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
class Block_3296670265a440243e353a9_28570539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile-menu' => 
  array (
    0 => 'Block_3296670265a440243e353a9_28570539',
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
class Block_21286898605a440243e375f0_56485524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_21286898605a440243e375f0_56485524',
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
class Block_283883045a440243e39694_83404753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_283883045a440243e39694_83404753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid" id="app">
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

                <div v-if="loading">
                    <?php $_smarty_tpl->_subTemplateRender('file:partials/landing-loading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
                <canvas id="chart-lines" style="width:100%;"></canvas>
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

                <template v-for="(item, index) in trafficSum">
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
                            <strong>Total:</strong>
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
class Block_19157630215a440243e4fdb5_01156196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_19157630215a440243e4fdb5_01156196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
>

    let app = new Vue({
        el: '#app',
        data: {
            payload: {
                request: 'all-sale-pages'
            },
            loading: false,
            trafficData: null,
            trafficSum: []
        },
        computed: {
            totalTraffic: function()
            {
                if(this.trafficSum !== [])
                {
                    let total = 0;
                    for(let i = 0; i < this.trafficSum.length; i++)
                    {
                        total += this.trafficSum[i].count;
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
                axios.post("<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/api/sale-pages", this.payload).then((response)=> {
                    return response.data;
                }).then((data)=> {
                    this.trafficData = data;
                    this.loading = false;

                    this.parseTableData(this.trafficData)
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

                })
            },
            parseTableData: function(data)
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

                    if(exist == false)
                    {
                        result.push({
                            url: data[i].url,
                            count: 0
                        })
                    } else {
                        result[exist].count += parseInt(data[i].count);
                    }
                }
                this.trafficSum = result;
                return this.trafficSum;
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
