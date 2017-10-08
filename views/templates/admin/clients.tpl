
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
                        <h4 class="card-title">Manage clients</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Clients database</h6>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Search by
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" onclick="sendSearch('id');">ID</a>
                                    <a class="dropdown-item" onclick="sendSearch('username');">Username</a>
                                    <a class="dropdown-item" onclick="sendSearch('email');">Email</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>
                <hr />

                <!-- Paginate notification start -->
                {include "layouts/admin/admin_paginate_notification.tpl"}
                <!-- Paginate notification end -->

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Products</th>
                            <th>Spent</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $users as $user}
                            <tr>
                                <th scope="row">{$user->index}</th>
                                <td>{$user->first_name} {$user->last_name}</td>
                                <td>{$user->username}</td>
                                <td>{$user->email}</td>
                                <td>{$user->programsBought}</td>
                                <td>{$user->totalMoney} RON</td>
                                <td><a href="{$app_path}/admin/client/{$user->id}/id">Edit</a></td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                {include "layouts/admin/admin_pagination.tpl" path_item="clients"}
                <!-- Pagination end -->
                <hr />

                <a href="{$app_path}/admin/client/create" class="card-link">Create a new client</a><br />
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
            return window.location="{$app_path}/admin/client/" + client + "/" + mode;
        }
    </script>
{/block}

{block name="footer"}

{/block}
