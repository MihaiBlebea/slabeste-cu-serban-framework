{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">

                <h1 class="display-3">Tabata Trainer</h1>
                <p class="lead">Bine ai venit in program {$auth->first_name} {$auth->last_name}</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Inainte de a incepe sa programul Tabata Trainer, urmareste cu atentie videoclipul de introducere de mai jos, pentru a afla cum sa combini antrenamentele din cadrul programului ca sa obtii rezultate bune, intr-un timp cat mai scurt.</p>
                    <p>Apoi alocati aproximativ 10-15 minute pentru a parcurge Ghidul Tabata Trainer pentru a afla mai multe despre protocolul Tabata si antrenamentele incluse in program (poti descarca ghidul de mai jos).</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 video-section">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/205184526"></iframe>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/02/Ghidul-Tabata-Trainer.pdf">
                                <img class="card-img-top download-card-img" src="{$app_path}/img/tabata-trainer/ghid_tabata.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca ghidul antrenamentelor Tabata Trainer</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer.</p>
                                <p>Parcurge ghidul pentru a intelege cum functioneaza sistemul Tabata Trainer si a vedea cum sa folosesti antrenamentele din cadrul programului.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/02/Ghidul-Tabata-Trainer.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-START-.pdf">
                                <img class="card-img-top download-card-img" src="{$app_path}/img/tabata-trainer/jurnal_start.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca jurnalul antrenamentelor Tabata Start</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer Start.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-START-.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">
                    <div class="row">
                        <div class="col p-3">
                            <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-XTREM.pdf">
                                <img class="card-img-top download-card-img" src="{$app_path}/img/tabata-trainer/jurnal_extreme.png">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title">Descarca jurnalul antrenamentelor Tabata Xtreme</h4>
                                <p>Da click pe imaginea alaturata sau pe butonul de mai jos pentru a descarca ghidul antrenamentelor Tabata Trainer Xtreme.</p>
                                <a href="http://www.slabestecuserban.ro/wp-content/uploads/2017/02/Jurnalul-Antrenamentelor-TABATA-XTREM.pdf" class="btn btn-primary">Descarca</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="{$app_path}/member/tabata-trainer/antrenament-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
{/block}
