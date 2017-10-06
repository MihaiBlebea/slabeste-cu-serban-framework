{extends file='layouts/confirmation_layout.tpl'}

{block name="nav"}
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
{/block}

{block name="body"}
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Felicitari {$first_name} {$last_name}!</h1>
                <p class="lead">Ai achizitionat cu succes programul {$program_name}. Verifica datele tale de acces de mai jos.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{$app_path}{$mainPage}" target="_blank">
                    <img style="max-width:100%;" src="{$app_path}/{$programImage}" />
                </a>
            </div>
            <div class="col">
                <div class="card">
                    <div style="padding:20px;" class="card-block">
                        <h4 class="card-title">Datele tale private de access</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Verifica cu atentie datele de mai jos apoi apasa pe butonul "Acceseaza programul"</h6><br />
                        <p class="card-text">
                            Ti-am trimis date tale private de access si pe emailul tau (<strong>{$email}</strong>), asa ca le poti accesa oricand. Daca nu ai primit emailul cu datele de access in urmatoarele 5 minute, atunci verifica si casuta ta de SPAM. In 99% din cazurile in care "nu ai primit" emailul, acesta ajunge in sectiunea de SPAM.
                        </p>
                        <p class="card-text"><strong>Username:</strong> {$username}</p>
                        <p class="card-text"><strong>Parola:</strong> {$password}</p>
                        <a target="_blank" href="{$app_path}{$mainPage}" class="btn btn-primary" style="display:block; margin:auto;">Acceseaza programul</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
