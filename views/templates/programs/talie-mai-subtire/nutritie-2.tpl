{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Nutritie Saptamana 2"
                    sub_title="'Unge 2 crackersi wasa cu branza lacteea si...'"}

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru a II-a saptamana din cadrul programului.</p>
                    <p>Iti recomand sa incepi sa fii atenta la senzatiile de foame si satietate - este foarte important atat cand vrei sa slabesti, cat si ca sa mentii rezultatele pe termen lung sa mananci cand iti este foame fizic si, mai ales, sa nu mananci niciodata dupa ce te-ai saturat.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                {include "partials/download-card.tpl"
                    title="Ghidul de alimentatie saptamana 2"
                    text="Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 2."
                    button_text="Descarca"
                    download_link="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-II.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/nutritie-saptamana-2.png"}

                {include "partials/download-card.tpl"
                    title="Lista de alimente pentru saptamana 2"
                    text="Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 2."
                    button_text="Descarca"
                    download_link="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-II_Talie-Mai-Subtire.pdf"
                    image_link="{$app_path}/img/talie-mai-subtire/cumparaturi-saptamana-2.png"}

            </div>
        </div>
    </div>
{/block}
