{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron col md-10 sm-12">
            <div class="program-section">
                <h1 class="display-3">Provocarea de 14 zile</h1>
                <p class="lead">Bine ai venit in program {$auth->first_name} {$auth->last_name}</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Antrenamentele din provocare au o durata extrem de scurta (10 minute), insa sunt foarte eficiente. Aceastea sunt construite dupa sistemul High Intensity Interval Training - antrenamentul dovedit stiintific ca arde de 9 ori mai multa grasime decat sesiunile clasice de cardio.</p>
                    <p>Asadar, in mai putin timp, poti arde in sfarsit mai multe calorii</p>
                    <p>Intrucat durata antrenamentelor este redusa iti va fi usor sa le incluzi in programul tau, indiferent cat de aglomerat este acesta. Asadar, vei putea sa depasesti cu usurinta bariera "timpului".</p>
                    <p>Daca esti intr-o forma fizica excelenta, poti repeta antrenamentul de 2-3 ori in fiecare zi, pentru a maximiza efectele acestuia.</p>
                    <p>Trebuie sa tii cont de faptul ca nu este OBLIGATORIU sa faci mai multe sesiuni succesive, ci poti sa le imparti pe parcursul zilei: de exemplu, poti face misiunea la prima ora a zilei, urmand sa o repeti ulterior.</p>
                    <p>Iti doresc mult succes.</p>
                </div>

                <a class="btn btn-primary btn-lg button-center" href="{$app_path}/member/provocare-14-zile/misiune-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
{/block}
