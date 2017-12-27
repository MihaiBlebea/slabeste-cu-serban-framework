
{extends file='layouts/admin/admin_layout.tpl'}

{block name="head-script"}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
    <script src="{$app_path}/js/vue.js"></script>
{/block}

{block name="mobile-menu"}
    <a href="{$app_path}/admin/transactions" class="nav-link active" style="color:red;">Reset search</a>
{/block}

{block name="sidebar"}
    <p>Total value: <strong>{$total_value|default:"0"} RON</strong></p>
    <a href="{$app_path}/admin/transactions" class="card-link" style="color:red;">Reset search</a>
{/block}

{block name="body"}
    <div class="container-fluid">
        {if $error == true}
            <div class="alert alert-{$errorType}" role="alert">
                {$errorMessage}
            </div>
        {/if}
        <div class="card">
            <div class="card-body">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-lg-6">
                        <h4 class="card-title">Manage transactions</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{$transaction_count|default:"0"} transactions in database</h6>
                    </div>
                    <div class="col-lg-6">
                        {if isset($options)}
                            {include 'partials/admin/search.tpl'
                                path="{$app_path}/admin/transactions"
                                options=$options}
                        {/if}
                    </div>
                </div>
                <hr />
                <div class="row">
                    <canvas id="myChart" style="height:50vh; width:80vw"></canvas>
                </div>
                <hr />

                <!-- Paginate notification start -->
                {include "partials/admin-paginate-notification.tpl"}
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
                {foreach $transactions as $transaction}
                    <div class="row row-hover mb-2">
                        <div class="col-md-2 col-sm-4 elipsis">
                            <span class="mr-1">{$transaction->index}.</span> {$transaction->reg_date}
                        </div>
                        <div class="col-md-2 col-sm-4 elipsis">
                            <span class="float-sm-right float-md-left">{$transaction->firstName} {$transaction->lastName}</span>
                        </div>
                        <div class="col-md-2 col-sm-4 elipsis ">
                            <span class="float-sm-right">{$transaction->username}</span>
                        </div>
                        <div class="col-md-3 col-sm-4 elipsis">
                            {$transaction->program_tag}
                        </div>
                        <div class="col-md-1 col-sm-4 elipsis">
                            <span class="float-sm-right float-md-left">{$transaction->value}ron</span>
                        </div>
                        <div class="col-md-2 col-sm-4 elipsis">
                            <span class="float-sm-right">{$transaction->transaction_id}</span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                {/foreach}
                <hr />

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                {include "partials/admin-pagination.tpl" path_item="transactions"}
                <!-- Pagination end -->

                <hr />
                <div class="row">
                    <div class="col">
                        <p>Total value: <strong>{$total_value|default:"0"} RON</strong></p>
                    </div>
                    <div class="col">
                        <a href="{$app_path}/admin/transactions" class="card-link" style="color:red;float: right;">Reset search</a><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="script"}

    <script>
        axios.get("{$app_path}/api/get/transactions").then((response)=> {
            return response.data;
        }).then((data)=> {

            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Object.keys(data),
                    datasets: [{
                        label: 'RON',
                        borderColor: "blue",
                        data: Object.values(data),
                        borderWidth: 3
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
    </script>
{/block}
