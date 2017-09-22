
{extends file='layouts/admin/admin_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{$landing->name}</h4>
                <h6 class="card-subtitle mb-2 text-muted">Last updated {$landing->start_time}</h6>
                <hr />

                <form action="{$app_path}/admin/landing/update" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Landing page name:</label>
                                <input name="name" type="text" class="form-control" value="{$landing->name}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Code:</label>
                                <input name="code" type="text" class="form-control" value="{$landing->code}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Template:</label>
                                <!-- <input name="template" type="text" class="form-control" value="{$landing->template}"> -->
                                <select name="template" class="form-control">
                                    {foreach $templates as $template}
                                        {if $template["name"] == $landing->template}
                                            <option selected value="{$template['path']}">{$template["name"]}</option>
                                        {else}
                                            <option value="{$template['path']}">{$template["name"]}</option>
                                        {/if}
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Link for CTA:</label>
                                <input name="link" type="text" class="form-control" value="{$landing->link}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program tag:</label>
                                <select name="program_tag" class="form-control">
                                    {foreach $programs as $program}
                                        {if $program->program_tag == $landing->program_tag}
                                            <option selected value="{$program->program_tag}">{$program->program_name}</option>
                                        {else}
                                            <option value="{$program->program_tag}">{$program->program_name}</option>
                                        {/if}
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <input name="id" type="hidden" value="{$landing->id}">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="{$app_path}/admin/landings" class="card-link">Back to landing pages</a><br />
                    </div>
                    <div class="col">
                        <a href="{$app_path}/admin/landing/delete/{$landing->code}" class="card-link" style="color:red;float: right;">Delete program</a><br />
                    </div>
                <div class="row">
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
