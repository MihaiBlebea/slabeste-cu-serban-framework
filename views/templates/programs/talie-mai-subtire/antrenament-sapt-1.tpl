{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Antrenament Saptamana 1"
                    sub_title="In prima saptamana vei incepe sa iti intaresti si tonifiezi zona mediana a corpului..."}

                {include "partials/download-card.tpl"
                    title="Fisa de antrenament pentru saptamana 1"
                    text="Apasa pe butonul de mai jos pentru a descarca fisa de antrenament pentru prima saptamana a programului."
                    button_text="Descarca"
                    download_link="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_1.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/antrenament-saptamana-1.png"}

                {include "partials/small-title.tpl"
                    title="Inainte de a incepe..."}

                <div class="text-section">
                    <p>In prima saptamana vei incepe sa iti intaresti si tonifiezi zona mediana a corpului cu antrenamentele A si A2. Insa doar exercitiile pentru abdomen nu sunt suficiente daca iti doresti sa elimini excesul de grasime. De aceea, antrenamentele B si C sunt special concepute pentru a te ajua sa arzi calorii si sa iti accelerezi metabolismul.</p>
                </div>

                {include "partials/small-title.tpl"
                    title="Antrenamentul A1"}

                <div class="text-section">
                    <p>Acesta este un antrenament care pune accentul pe muschii abdominali, dar contine si un element de cardio la final pentru a te ajuta sa accelerezi metabolismul si sa consumi mai multe calorii. Pentru acest antrenament ai nevoie doar de un buretel sau un material moale pe care sa faci abdomenele.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_1.pdf" style="color:blue;">Programul de antrenament Saptamana 1</a>).</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/174767475"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Crunch</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Crunch invers</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Bricege</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Mountain climber</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Aplecari spre piciorul opus</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Forfecari cardio pe loc</li>
                </ul>
                <hr />
            </div>

            <div class="program-section">

                {include "partials/small-title.tpl"
                    title="Antrenamentul A2"}

                <div class="text-section">
                    <p>Antrenamentul A2 lucreaza in principal muschii mai mici ai abdomenului, precum si zona lombara prin miscari de isometrie si sustinere. Este mai important timpul pe care il petreci in stare de incordare, decat numarul de repetari. Nu ai nevoie de materiale aditionale.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_1.pdf" style="color:blue;">Programul de antrenament Saptamana 1</a>).</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175060286"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Superman</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scandura</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Podul de jos</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Repeta podul de jos</li>
                </ul>
                <hr />
            </div>

            <div class="program-section">

                {include "partials/small-title.tpl"
                    title="Antrenamentul B"}

                <div class="text-section">
                    <p>Acesta este un antrenament menit sa lucreze toate grupele musculare principale ale corpului tau prin cele mai eficiente exercitii posibile. Grupele muscualre mari consuma mai multe calorii, asta inseamna ca vei inlatura mai multi centimetri din jurul taliei si vei obtine un abdomen tonifiat in acelasi timp. Acest antrenament necesita o pereche de gantere usoare, dar poti improviza cu doua sticle de apa.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_1.pdf" style="color:blue;">Programul de antrenament Saptamana 1</a>a>)</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175060650"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Genuflexiuni</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Flotari pe genunchi</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Flexii biceps cu gantere (poti imporviza)</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scaunul roman</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scandura cu atingere in lateral</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Alergare calcaie la sezut</li>
                </ul>
                <hr />
            </div>

            <div class="program-section">

                {include "partials/small-title.tpl"
                    title="Antrenamentul C"}

                <div class="text-section">
                    <p>Acest antrenament este special conceput pentru persoanele avansate, care fac miscare in mod regulat si care au o forta si flexibilitate crescuta in partea superioara a corpului. Nu te lasa inselata de aparente, chiar daca sunt doar 4 exercitii, acest circuit te va face sa transpiri serios. Ai nevoie de o pereche de gantere usoare, dar poti improviza cu ce ai la dispozitie.</p>
                    <p>Repeta circuitul de 5 ori pentru a termina antrenamentul.</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175060655"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Burpees</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Push press</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Flotari</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Mountain climber</li>
                </ul>
            </div>
        </div>
    </div>
{/block}
