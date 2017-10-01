{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Fit si Supla Modulul 1</h1>
                <p class="lead">Bine ai venit in program {$auth->first_name} {$auth->last_name}</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Inainte de a incepe sa iti sculptezi posteriorul, te invit sa urmaresti cu atentie videoclipul de introducere de mai jos, pentru a afla cum sa folosesti programul.</p>
                    <p>In primul modul al programului Fit si Supla in 90 de zile vom pune accentul pe eliminarea centimetrilor in plus si pe cresterea rezistentei la efort.</p>
                    <p>Pentru a atinge acest obiectiv in cel mai rapid mod posibil am combinat cele mai eficiente exercitii de cardio intr-un sistem de antrenament denumit High Intensity Interval Training (daca vrei sa stii mai multe despre acest sistem verifica ghidul programului de antrenament de mai sus.</p>
                    <p>Ca sa obtii rezultate maxime incearca sa urmezi pauzele dupa cum le-am introdus in videoclipurile de antrenament. Cu cat pauza este mai scurta, cu atat intensitatea antrenamentului este mai ridicata.</p>
                    <p>Apoi, dupa ce parcurgi videoclipul de introducere, descarca Ghidul programului de antrenament pentru modulul 1 (il gasesti mai jos pe aceasta pagina) si, apoi, verifica capitolul de nutritie capitolul de nutritie.</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/177630929"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Fisa-de-antrenament-modul-1-saptamana-1.pdf">
                                <img class="card-img-top download-card-img" src="{$app_path}/img/fit-si-supla-1/ghid_antrenament_modul_1.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Fit si supla (Modulul 1)</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor.<p>
                                <p>Vei descoperi in cadrul acestuia cum sa combini antrenamentele video din modulul 1.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/08/Fisa-de-antrenament-modul-1-saptamana-1.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="{$app_path}/member/fit-si-supla-1/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
{/block}
