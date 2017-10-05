{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Fit si Supla Modulul 2</h1>
                <p class="lead">Bine ai venit in program {$auth->first_name} {$auth->last_name}</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Urmareste videoclipul de orientare si descarca ghidul antrenamentelor pentru modulul 2.</p>
                    <p>Inainte de a te apuca de treaba nu uita sa verifici sectiunea de Nutritie pentru a descarca planul alimentar, listele de cumparaturi si ebook-ul cu retete santoase.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/177630928"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/10/Fisa-de-antrenament-modul-2.pdf">
                                <img class="card-img-top download-card-img" src="{$app_path}/img/fit-si-supla-2/ghid_antrenament_modul_2.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Fit si supla (Modulul 2)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor.<p>
                                <p>Vei descoperi in cadrul acestuia cum sa combini antrenamentele video din modulul 2.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/10/Fisa-de-antrenament-modul-2.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="{$app_path}/member/fit-si-supla-2/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
{/block}
