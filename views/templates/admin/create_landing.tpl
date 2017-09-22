
{extends file='layouts/admin/admin_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Landing Page</h4>
                <h6 class="card-subtitle mb-2 text-muted">Create NEW landing page</h6>
                <hr />

                <form action="{$app_path}/admin/landing/create" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Landing page name:</label>
                                <input name="name" type="text" class="form-control" value="" placeholder="Add a sugestive name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Code:</label>
                                <input name="code" type="text" class="form-control" value="" placeholder="Select a simple code">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Template:</label>
                                <!-- <input name="template" type="text" class="form-control" value="" placeholder="Select a template"> -->
                                <select name="template" class="form-control">
                                    {foreach $templates as $template}
                                        <option value="{$template['path']}">{$template["name"]}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Link for CTA:</label>
                                <input name="link" type="text" class="form-control" value="" placeholder="Select a link for the call to action">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program tag:</label>
                                <select name="program_tag" class="form-control">
                                    {foreach $programs as $program}
                                        <option value="{$program->program_tag}">{$program->program_name}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="{$app_path}/admin/landings" class="card-link">Back to landing pages</a><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
