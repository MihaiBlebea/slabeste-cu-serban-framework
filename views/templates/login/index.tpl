
{extends file='layouts/login_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        {if $error == true}
            <div class="alert alert-danger" role="alert">
                {$errorMessage}
            </div>
        {/if}
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Intra in contul tau</h4>
                <h6 class="card-subtitle mb-2 text-muted">Foloseste datele de logare</h6>
                <form method="POST" action="{$app_path}/login">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Parola</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Acceseaza contul">
                </form>

                <a href="#" class="card-link">Cum pot sa-mi fac un cont?</a><br />
                <a href="{$app_path}/login/recover" class="card-link">Ups, mi-am uitat parola!</a>
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
