
{extends file='layouts/login/login_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        {if $error == true}
            <div class="alert alert-{$type}" style="width:100%;margin-top:100px;" role="alert">
                <h6 style="text-transform: uppercase;">{$type}!</h6>
                {$errorMessage}
            </div>
        {/if}
    </div>
{/block}

{block name="footer"}

{/block}
