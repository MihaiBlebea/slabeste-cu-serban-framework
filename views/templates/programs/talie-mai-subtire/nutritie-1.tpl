{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Nutritie Saptamana 1"
                    sub_title="'Dupa aceea coacem totul la foc mic...'"}

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru prima saptamana. Iti recomand sa iti planifici mesele in avans pentru a te asigura ca nu iei decizii eronate in privinta alimentatiei, atunci cand esti obosita sau stresata si cand autocontroul tau este scazut.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                {include "partials/download-card.tpl"
                    title="Ghidul de alimentatie saptamana 1"
                    text="Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 1."
                    button_text="Descarca"
                    download_link="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-I.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/nutritie-saptamana-1.png"}

                {include "partials/download-card.tpl"
                    title="Lista de alimente pentru saptamana 1"
                    text="Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 1."
                    button_text="Descarca"
                    download_link="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-I_Talie-Mai-subtire.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/cumparaturi-saptamana-1.png"}

            </div>
        </div>
    </div>
{/block}
