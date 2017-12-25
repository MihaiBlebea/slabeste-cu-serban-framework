
{extends file='layouts/admin/admin_layout.tpl'}

{block name="mobile-menu"}
    <a href="{$app_path}/admin/clients" class="nav-link active">Back to clients</a>
    {if isset($user)}
        <a href="{$app_path}/admin/client/delete/{$user->id}" class="nav-link active" style="color:red;">Delete client</a>
    {/if}
{/block}

{block name="sidebar"}
    <a href="{$app_path}/admin/clients" class="card-link">Back to clients</a><br />
    {if isset($user)}
        <a href="{$app_path}/admin/client/delete/{$user->id}" class="card-link" style="color:red;">Delete client</a>
    {/if}
{/block}

{block name="body"}
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {if isset($user)}
                    <h4 class="card-title">{$user->first_name} {$user->last_name}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Last updated {$user->regdate}</h6>
                {else}
                    <h4 class="card-title">Create a new client</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Take your time, no hurry</h6>
                {/if}
                <hr />

                {if isset($user)}
                <form action="{$app_path}/admin/client/update" method="POST">
                {else}
                <form action="{$app_path}/admin/client/create" method="POST">
                {/if}
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">First name:</label>
                                <input name="first_name" type="text" class="form-control" value="{$user->first_name|default:''}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Last name:</label>
                                <input name="last_name" type="text" class="form-control" value="{$user->last_name|default:''}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password:</label>
                                <input name="password" type="text" class="form-control" placeholder="Leave empty if you don't want to change it">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email:</label>
                                <input name="email" type="text" class="form-control" value="{$user->email|default:''}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleSelect2">Add more programs</label>
                                <select multiple class="form-control">
                                        {foreach $tags as $tag}
                                            <option ondblclick="addTag('{$tag}')">{$tag}</option>
                                        {/foreach}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleSelect2">Current owned programs</label>
                                <textarea class="form-control" id="owned-tags" name="accounts" style="resize: none;" rows="4" fixed>{$user->programString|default:''}</textarea>
                            </div>
                        </div>
                    </div>

                    <input name="id" type="hidden" value="{$user->id|default:''}">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="{$app_path}/admin/clients" class="card-link">Back to clients</a><br />
                    </div>
                    <div class="col">
                        {if isset($user)}
                            <a href="{$app_path}/admin/client/delete/{$user->id}" class="card-link" style="color:red;float: right;">Delete client</a><br />
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function addTag(tag)
        {
            var tags = document.getElementById('owned-tags').value;
            var splitTags = tags.split('&');
            if(checkTagExist(splitTags, tag) == false)
            {
                if(tags == "")
                {
                    tags += tag;
                } else {
                    tags += '&' + tag;
                }
                document.getElementById('owned-tags').value = tags;
            }
        }

        function checkTagExist(tags, tag)
        {
            if(tags.indexOf(tag) < 0)
            {
                return false;
            }
            return true;
        }
    </script>
{/block}
