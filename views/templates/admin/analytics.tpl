
{extends file='layouts/admin/admin_layout.tpl'}

{block name="head-script"}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
    <script src="{$app_path}/js/vue.js"></script>
{/block}

{block name="mobile-menu"}
    <a href="{$app_path}/admin/client/create/new" class="nav-link active">All Sales Pages</a>
{/block}

{block name="sidebar"}
    <a href="{$app_path}/admin/client/create/new" class="card-link">All Sales Pages</a>
{/block}

{block name="body"}
    <div class="container-fluid" id="app">
        {if isset($error) && $error == true}
            <div class="alert alert-{$errorType}" role="alert">
                {$errorMessage}
            </div>
        {/if}
        <div class="card">
            <div class="card-body">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-lg-6">
                        <h4 class="card-title">Analytics</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Manage traffic and events</h6>
                    </div>
                    <div class="col-lg-6">
                        {if isset($options)}
                            {include 'partials/admin/search.tpl'
                                path="{$app_path}/admin/clients"
                                options=$options}
                        {/if}
                    </div>
                </div>
                <hr />

                <div v-if="loading">
                    {include 'partials/landing-loading.tpl'}
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
{/block}

{block name="script"}

<script>

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
                axios.post("{$app_path}/api/sale-pages", this.payload).then((response)=> {
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
                        });
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

</script>

{/block}
