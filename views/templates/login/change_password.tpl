
{extends file='layouts/login/login_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Schimba parola</h4>
                <h6 class="card-subtitle mb-2 text-muted">Introdu de 2 ori parola ta</h6>
                <form method="POST" action="{$app_path}/change-password">
                    <div class="form-group row">
                        <label class="col-form-label">Username: <strong>{$username}</strong></label>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Seteaza noua parola</label>
                        <input onkeyup="getFormData();" id="password1" type="password" name="password1" class="form-control" placeholder="Noua parola">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-form-label">Repeta parola</label>
                        <input onkeyup="getFormData();" id="password2" type="password" name="password2" class="form-control" placeholder="Noua parola">
                    </div>
                    <input type="hidden" name="username" class="form-control" value="{$username}">
                    <input disabled id="submit-button" type="submit" class="btn btn-primary btn-lg btn-block" value="Salveaza parola">
                </form>

                <a href="{$app_path}/login" class="card-link">Inapoi la formular</a><br />
            </div>
        </div>
    </div>
    <script>
        function getFormData()
        {
            var password1 = document.getElementById('password1').value;
            var password2 = document.getElementById('password2').value;
            if(password1 == password2)
            {
                document.getElementById("submit-button").disabled = false;
                document.getElementById("submit-button").value = "Parola nu coincide";
            } else {
                document.getElementById("submit-button").disabled = true;
                document.getElementById("submit-button").value = "Salveaza parola";
            }
        }
    </script>
{/block}

{block name="footer"}

{/block}
