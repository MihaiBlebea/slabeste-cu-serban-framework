{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Fit si Supla Modulul 3</h1>
                <p class="lead">Bine ai venit in program {$auth->first_name} {$auth->last_name}</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Felicitari ca ai ajuns pana aici! Mai ai doar un pas pana la finalizarea programului de transformare Fit si Supla in 90 de zile.</p>
                    <p>Inainte de a incepe modulul 3, urmareste videoclipul de introducere de mai jos, apoi descarca programul antrenamentelor pentru modulul 3 si verifica sectiunea de Nutritie.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/177630927"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/10/Fisa-de-antrenament-modul-3.pdf">
                                <img class="card-img-top download-card-img" src="{$app_path}/img/fit-si-supla-3/ghid_antrenament_modul_3.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Fit si supla (Modulul 3)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor.<p>
                                <p>Vei descoperi in cadrul acestuia cum sa combini antrenamentele video din modulul 3.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/10/Fisa-de-antrenament-modul-3.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="{$app_path}/member/fit-si-supla-3/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
{/block}
