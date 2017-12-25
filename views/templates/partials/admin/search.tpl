<div class="row">
    <div class="col-md-12">
        <form action="{$path}" method="GET">
            <div class="input-group">
                <select name="mode" class="form-control">
                    {foreach $options as $option}
                        <option value="{$option}"><span style="text-transform:capitalize;">{$option}</span></option>
                    {/foreach}
                </select>
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" style="cursor:pointer;">Search</button></button>
                </span>
            </div>
        </form>
    </div>
</div>
