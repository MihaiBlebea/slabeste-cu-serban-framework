
{extends file='layouts/admin/admin_layout.tpl'}

{block name="mobile-menu"}
    <a href="{$app_path}/admin/client/create/new" class="nav-link active">Create a new client</a>
{/block}

{block name="sidebar"}
    <a href="{$app_path}/admin/client/create/new" class="card-link">Create a new client</a>
{/block}

{block name="body"}
    <div class="container-fluid">
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

                <!-- Paginate notification start -->
                {* {include "partials/admin-paginate-notification.tpl"} *}
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
                {* {foreach $users as $user}
                    <div class="row row-hover mb-2" onclick="window.location.href = '{$app_path}/admin/client/{$user->id}'">
                        <div class="col-md-3 col-sm-6 elipsis">
                            <span class="mr-1">{$user->index}.</span> {$user->first_name} {$user->last_name}
                        </div>
                        <div class="col-md-2 col-sm-6 elipsis">
                            <span class="float-sm-right float-md-left">{$user->username}</span>
                        </div>
                        <div class="col-md-4 col-sm-4 elipsis">
                            {$user->email}
                        </div>
                        <div class="col-md-1 col-sm-4 d-flex">
                            {$user->programsBought}<span class="ml-1 d-inline-flex d-sm-inline-flex d-md-none elipsis">products</span>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <span class="float-sm-right">{$user->totalMoney} RON</span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                {/foreach} *}


            </div>
        </div>
    </div>
{/block}
