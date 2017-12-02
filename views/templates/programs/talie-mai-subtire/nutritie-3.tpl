{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Nutritie Saptamana 3"
                    sub_title="'Carnea de vita tocata se amesteca cu ceapa, ciupercile si...'"}

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru a III-a saptamana din cadrul programului Talie Mai Subtire.</p>
                    <p>Chiar daca aceasta este ultima saptamana din cadrul programului, iti recomand sa mananci in continuare sanatos. Transformarea corporala este un proces pe termen lung si pentru a mentine rezultatele obtinute ai nevoie sa fii consecventa.</p>
                    <p>In plus, beneficiile sportului si ale unei alimentatii sanatoase le vei resimti si peste 10-20 de ani de acum incolo, in termeni de sanatate si bunastare fizica si emotionala.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                {include "partials/download-card.tpl"
                    title="Ghidul de alimentatie saptamana 3"
                    text="Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 3."
                    button_text="Descarca"
                    download_link="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-III.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/nutritie-saptamana-3.png"}

                {include "partials/download-card.tpl"
                    title="Lista de alimente pentru saptamana 3"
                    text="Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 3."
                    button_text="Descarca"
                    download_link="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-III_Talie-Mai-Subtire.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/cumparaturi-saptamana-3.png"}

            </div>
        </div>
    </div>
{/block}
