
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
                        <h4 class="card-title">Manage landing pages</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Edit landing pages</h6>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Search by
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" onclick="sendSearch('program_tag');">Product</a>
                                    <a class="dropdown-item" onclick="sendSearch('code');">Code</a>
                                </div>
                            </div>
                            <input id="search-input" type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Code</th>
                            <th>Template</th>
                            <th>Traffic</th>
                            <th>Conv %</th>
                            <th>Reset</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $landings as $index => $landing}
                            <tr>
                                <th scope="row">{$index + 1}</th>
                                <td>{$landing->name}</td>
                                <td>{$landing->program_tag}</td>
                                <td>{$landing->code}</td>
                                <td><a href="{$app_path}/landing/{$landing->program_tag}/{$landing->code}" target="_blank">{$landing->template}</a></td>
                                <td>{$landing->count}</td>
                                <td><strong>{$landing->conversionRate()}%</strong></td>
                                <td><a href="{$app_path}/admin/landing/reset/{$landing->code}">Reset</a></td>
                                <td><a href="{$app_path}/admin/landing/{$landing->code}">Edit</a></td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
                <hr />
                <div class="row">
                    <div class="col">
                        <a href="{$app_path}/admin/landing/create" class="card-link">Create a new landing</a><br />
                    </div>
                    <div class="col">
                        <a href="{$app_path}/admin/landings" class="card-link" style="color:red;float: right;">Reset search</a><br />
                    </div>
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
            return window.location="{$app_path}/admin/landing/search/" + search + "/" + mode;
        }
    </script>
{/block}

{block name="footer"}

{/block}
