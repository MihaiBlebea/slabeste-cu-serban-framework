
{extends file='layouts/admin/admin_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{$program->program_name}</h4>
                <h6 class="card-subtitle mb-2 text-muted">Last updated {$program->regdate}</h6>
                <hr />
                <img src="{$program->program_image}" class="program-image"/>
                <hr />
                <form action="{$app_path}/admin/program/update" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program name:</label>
                                <input name="program_name" type="text" class="form-control" value="{$program->program_name}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program tag:</label>
                                <input name="program_tag" type="text" class="form-control" value="{$program->program_tag}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program price:</label>
                                <input name="program_price" type="text" class="form-control" value="{$program->program_price}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program sales page:</label>
                                <input name="program_sales_page" type="text" class="form-control" value="{$program->program_sales_page}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Braintree plan ID:</label>
                                <input name="plan_id" type="text" class="form-control" value="{$program->plan_id}" placeholder="NULL if product is not subscription">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program status:</label>
                                <select name="program_status" class="form-control">
                                    <option value="0">Disable</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program type:</label>
                                <select name="program_type" class="form-control">
                                    <option value="simple">Simple</option>
                                    <option value="subscription">Subscription</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program image:</label>
                                <input name="program_image" type="text" class="form-control" value="{$program->program_image}">
                            </div>
                        </div>
                    </div>
                    {* <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program discount price:</label>
                                <input name="discount_price" type="text" class="form-control" value="{$program->discount_price}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Program discount code:</label>
                                <input name="discount_code" type="text" class="form-control" value="{$program->discount_code}">
                            </div>
                        </div>
                    </div> *}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Main page:</label>
                                <input name="main_page" type="text" class="form-control" value="{$program->main_page}">
                            </div>
                        </div>
                    </div>
                    <input name="id" type="hidden" value="{$program->id}">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save changes</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="{$app_path}/admin/programs" class="card-link">Back to products</a><br />
                    </div>
                    <div class="col">
                        <a href="{$app_path}/admin/program/delete/{$program->id}" class="card-link" style="color:red;float: right;">Delete program</a><br />
                    </div>
                <div class="row">
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
