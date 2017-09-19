
{extends file='layouts/admin/admin_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Admin zone</h4>
                <h6 class="card-subtitle mb-2 text-muted">Foloseste datele de logare</h6>
                <hr />


                <a href="#" class="card-link">Cum pot sa-mi fac un cont?</a><br />
                <a href="{$app_path}/login/recover" class="card-link">Ups, mi-am uitat parola!</a>
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
