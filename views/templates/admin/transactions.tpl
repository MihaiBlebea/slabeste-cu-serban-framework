
{extends file='layouts/admin_layout.tpl'}

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
                                    <a class="dropdown-item" onclick="sendSearch('regdate');">After date</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>
                <!-- <hr /> -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Username</th>
                            <th>Program tag</th>
                            <th>Value</th>
                            <th>Transaction ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if isset($transactions)}
                            {foreach $transactions as $index => $transaction}
                                <tr>
                                    <th scope="row">{$index + 1}</th>
                                    <td>{$transaction['regdate']}</td>
                                    <td>{$transaction['username']}</td>
                                    <td>{$transaction['program_tag']}</td>
                                    <td>{$transaction['value']}</td>
                                </tr>
                            {/foreach}
                        {/if}
                    </tbody>
                </table>
                <hr />
                <div class="row">
                    <p>Total value: <strong>{$total_value|default:"0"} RON</strong></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getSearch()
        {
            return search = document.getElementById('search-input').value;
        }

        function sendSearch(mode)
        {
            var client = getSearch();
            return window.location="{$app_path}/transaction/search/" + mode + "/" + client;
        }
    </script>
{/block}

{block name="footer"}

{/block}
