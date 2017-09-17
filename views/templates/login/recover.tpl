
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
                <h4 class="card-title">Recupereaza parola</h4>
                <h6 class="card-subtitle mb-2 text-muted">Iti vom trimite parola ta pe email</h6>
                <form method="GET" action="{$app_path}/login/get-recover">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Emailul tau">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Recupereaza parola">
                </form>

                <a href="{$app_path}/login/login" class="card-link">Inapoi la formular</a><br />
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
