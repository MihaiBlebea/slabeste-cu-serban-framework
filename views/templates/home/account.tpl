
{extends file='layouts/membership/home_page_layout.tpl'}

{block name="body"}
    {if $error == true}
        <div class="alert alert-{$type}" role="alert">
            <strong>{$errorTitle}</strong> {$errorMessage}.
        </div>
    {/if}
    <div class="card">
        <div class="card-header">
            Contul meu
        </div>
        <div style="padding:20px;" class="card-block">
            <div class="row">
                <div class="col">
                    <form action="{$app_path}/member/account" method="POST">
                        <h4 class="card-title">Modifica setarile contului tau</h4>
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username:</label>
                                <input type="email" class="form-control" value="{$user->username}">
                                <small class="form-text text-muted">Username-ul tau este unic si nu poate fi modificat</small>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div id="password-error" class="alert alert-danger" role="alert">
                                <strong>Atentie!</strong> Cele 2 campuri cu parole nu coincid.
                            </div>
                            <label for="exampleInputEmail1">Schimba parola:</label>
                            <input id="password1" onkeyup="checkIfPasswordMatch();" name="password1" type="password" class="form-control" id="password1" placeholder="Introdu noua parola">
                            <small class="form-text text-muted">Completeaza doar daca doresti sa modifici parola.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Repeta noua parola:</label>
                            <input id="password2" onkeyup="checkIfPasswordMatch();" name="password2" type="password" class="form-control" id="password2" placeholder="Repeta noua parola">
                            <small class="form-text text-muted">Repeta parola de mai sus</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Introdu emailul tau" value="{$user->email}">
                            <small id="emailHelp" class="form-text text-muted">Schimba-ti emailul activ de pe site</small>
                        </div>
                        <button id="submit-button" type="submit" class="btn btn-primary" style="cursor:pointer;">Salveaza modificarile</button>
                    </form>
                    </div>
                    <div class="col">
                        <h4 class="card-title">Programele mele</h4>
                        <ul class="list-group">
                            {foreach $programs as $program}
                                {if $program->owned == true}
                                    <li class="list-group-item"><a class="card-link" href="{$app_path}{$program->main_page}">{$program->program_name}</a></li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
                <a href="{$app_path}/member/home" class="card-link">Inapoi la pagina principala</a>
            </div>
        </div>
    </div>
{/block}

{block name="script"}
    <script>
        document.getElementById("password-error").style.display = "none";
        function checkIfPasswordMatch()
        {
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;

            if(password1 !== password2)
            {
                document.getElementById("password-error").style.display = "block";
                document.getElementById("submit-button").disabled = true;
            } else {
                document.getElementById("password-error").style.display = "none";
                document.getElementById("submit-button").disabled = false;
            }
        }
    </script>
{/block}
