{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Antrenament Saptamana 2"
                    sub_title="Antrenamentele din a doua saptamana combina exercitiile special pentru abdomen cu..."}

                {include "partials/download-card.tpl"
                    title="Fisa de antrenament pentru saptamana 2"
                    text="Apasa pe butonul de mai jos pentru a descarca fisa de antrenament pentru cea de-a doua saptamana a programului."
                    button_text="Descarca"
                    download_link="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_2.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/antrenament-saptamana-2.png"}

                {include "partials/small-title.tpl"
                    title="Inainte de a incepe..."}

                <div class="text-section">
                    <p>Antrenamentele din a doua saptamana combina exercitiile special pentru abdomen cu exercitii complexe care consuma multe calorii si te ajuta sa iti tonifiezi intreg corpul.</p>
                </div>

                {include "partials/small-title.tpl"
                    title="Antrenamentul A1"}

                <div class="text-section">
                    <p>Antrenamentul A1 din saptamana 2 pastreaza aceeasi structura: o combinatie intre exercitiile predominante pentru abdomen cu cele pentru ridicarea pulsului si accelerarea metabolismului la final. Pentru acest antrenament ai nevoie doar de un buretel sau un material moale pe care sa faci abdomenele.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_2.pdf" style="color:blue;">Programul de antrenament Saptamana 2</a>).</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/174818025"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Mountain climber</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Bicicleta</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Crunch invers</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Crunch atingere calcai</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scandura oblica</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Forfecari cardio pe loc</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Alergare cu calcaiele la sezut</li>
                </ul>
                <hr />
            </div>

            <div class="program-section">

                {include "partials/small-title.tpl"
                    title="Antrenamentul A2"}

                <div class="text-section">
                    <p>Un circuit dedicat exclusiv intaririi musculaturii oblicilor si a zonei lombare. Nu uita ca este important sa existe mereu un echilibru intre musculatura abdomenului si cea a zonei lombare. Pune accentul pe timpul petrecut in tensiune la fiecare miscare si nu pe numarul de repetari pe care le faci. Nu ai nevoie de materiale aditionale.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_2.pdf" style="color:blue;">Programul de antrenament Saptamana 2</a>).</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175060289"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scandura</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scandura oblica</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Podul de jos cu picioarele ridicate</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Forfecari</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Around the world</li>
                </ul>
                <hr />
            </div>

            <div class="program-section">

                {include "partials/small-title.tpl"
                    title="Antrenamentul B"}

                <div class="text-section">
                    <p>Grupele musculare mari consuma mai multe calorii. De aceea, este important sa avem un antrenament intreg care stimuleaza spatele, pieptul, coapsele si bratele. Pentru acest antrenament ai nevoie doar de o gantera usoara pentru "around the world" dar poti improviza cu orice obiect gasesti prin casa.</p>
                    <p>Repeta circuitul in functie de nivelul tau (verifica fisa <a href="{$app_path}/ebooks/talie-mai-subtire/plan_antrenament_sapt_2.pdf" style="color:blue;">Programul de antrenament Saptamana 2</a>a>)</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175060829"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Fandari</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Flotari triceps</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Flotari cu ridicare de brat (poti imporviza)</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Mountain climber</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Around the world</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Alergare cu genunchii sus</li>
                </ul>
                <hr />
            </div>

            <div class="program-section">

                {include "partials/small-title.tpl"
                    title="Antrenamentul C"}

                <div class="text-section">
                    <p>Antrenamentul C este doar pentru cei avansati. Sfatul meu este sa nu incepi primul circuit de 21 de zile din program cu antrenamentul C, ci sa il introduci treptat la cea de-a doua tura. Ai nevoie de o pereche de gantere usoare pentru "man maker" (daca nu gasesti gantere, inlocuieste exercitiul cu burpees).</p>
                    <p>Repeta circuitul de 5 ori pentru a termina antrenamentul.</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175060656"}

                <ul class="exercise-section">
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Man maker</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Flotari triceps</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Genuflexiuni pliometrice</li>
                    <li class="program-details"><i class="fa fa-check" aria-hidden="true"></i> Scandura in miscare</li>
                </ul>
            </div>
        </div>
    </div>
{/block}
