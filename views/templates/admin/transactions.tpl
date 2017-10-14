
{extends file='layouts/admin/admin_layout.tpl'}

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
                {include "layouts/admin/admin_paginate_notification.tpl"}
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
                        {if isset($transactions)}
                            {foreach $transactions as $transaction}
                                <tr>
                                    <th scope="row">{$transaction->index}</th>
                                    <td>{$transaction->reg_date}</td>
                                    <td>{$transaction->firstName} {$transaction->lastName}</td>
                                    <td>{$transaction->username}</td>
                                    <td>{$transaction->program_tag}</td>
                                    <td>{$transaction->value}ron</td>
                                    <td>{$transaction->transaction_id}</td>
                                </tr>
                            {/foreach}
                        {/if}
                    </tbody>
                </table>

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                {include "layouts/admin/admin_pagination.tpl" path_item="transactions"}
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
        function getSearch()
        {
            return search = document.getElementById('search-input').value;
        }

        function sendSearch(mode)
        {
            var client = getSearch();
            return window.location="{$app_path}/admin/transaction/search/" + mode + "/" + client;
        }
    </script>
    <script>
        axios.get("{$app_path}/api/get/transactions").then((response)=> {
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
    </script>
{/block}
