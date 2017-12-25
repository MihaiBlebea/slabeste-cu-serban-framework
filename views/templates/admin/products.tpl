
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
                <h4 class="card-title">All products</h4>
                <h6 class="card-subtitle mb-2 text-muted">Set up, edit and delete products</h6>
                <hr />

                <!-- Paginate notification start -->
                {include "partials/admin-paginate-notification.tpl"}
                <!-- Paginate notification end -->

                <div class="row d-none d-md-flex">
                    <div class="col-md-4 elipsis">
                        Name
                    </div>
                    <div class="col-md-4 elipsis">
                        Clients
                    </div>
                    <div class="col-md-4 elipsis">
                        Money
                    </div>
                </div>
                <hr />
                {foreach $programs as $program}
                    <div class="row row-hover mb-2">
                        <div class="col-md-3 col-sm-6 elipsis">
                            <span class="mr-1">{$program->index}.</span> {$program->program_name}
                        </div>
                        <div class="col-md-2 col-sm-6 elipsis">
                            <span class="float-sm-right float-md-center">{$program->sold}<span class="ml-1 d-inline-flex d-sm-inline-flex d-md-none elipsis">clients</span></span>
                        </div>
                    </div>
                    <hr class="d-block d-sm-block d-md-none" />
                {/foreach}

                <hr />

                <!-- Insert pagination here -->
                <!-- Pagination start -->
                {include "partials/admin-pagination.tpl" path_item="programs"}
                <!-- Pagination end -->
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
