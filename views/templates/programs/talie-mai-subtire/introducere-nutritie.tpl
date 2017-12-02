{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Introducere in nutritie"
                    sub_title="Antrenamentul fara nutritie este ca fotbalul fara minge..."}

                <div class="text-section">
                    <p>Inainte de a incepe programul Talie mai subtire, urmareste videoclipul de mai jos, in care iti explicam pas cu pas cum sa urmezi planul alimentar din cadrul programului.</p>
                    <p>Apoi, tot de pe aceasta pagina, descarca <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Ghid-Cum-Sa-Scapi-De-Centimetrii-In-Plus-De-Pe-Talie-Si-ABdomen.pdf" style="color: blue;">Ghidul Cum Sa Scapi De Centimetri In Plus Din Talie Si Abdomen </a>, precum si  <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor Sanatoase</a></p>
                    <p>Hai sa incepem impreuna aceasta calatorie!</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175209848"}

            </div>
        </div>
    </div>
{/block}
