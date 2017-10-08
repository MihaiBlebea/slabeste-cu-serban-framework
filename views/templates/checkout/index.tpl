{extends file='layouts/checkout_layout.tpl'}

{block name="nav"}
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
{/block}

{block name="body"}
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-6">
                <form id="checkout-form" method="post" action="{$app_path}/checkout/payment">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nume:</label>
                        <input name="firstName" type="text" class="form-control" placeholder="ex. Popescu">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prenume:</label>
                        <input name="lastName" type="text" class="form-control" placeholder="ex. Maria">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefon:</label>
                        <input name="phone" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="alert alert-success" role="alert">
                        Plateste cu cardul apasand butonul "Cumpara acum" sau prin PayPal
                    </div>
                    {* <div class="form-group">
                        <label for="exampleFormControlTextarea1">Adresa:</label>
                        <textarea name="adress" class="form-control" rows="3"></textarea>
                    </div> *}

                    <input name="program_price" type="hidden" value="{$programPrice}">
                    <input name="programTag" type="hidden" value="{$program->program_tag}">

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <div id="dropin-container"></div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Cumpara acum" class="btn btn-success btn-lg btn-block">
                </form>
                <img style="display:block;margin:auto;" src="{$app_path}/img/logos/plata_sigura.png" />
                <p class="text-center mt-2">
                    Siguranta platii tale este importanta pentru noi. De aceea, folosim cele mai moderne filtre de securitate pentru platile online. Nicio informatie confidentiala nu este stocata pe acest site.
                </p>
            </div>
            <div class="col-sm-12 col-md-6">

                <img style="max-width:100%" class="mb-3" src="{$app_path}/{$program->program_image}" />
                <p class="text-center program-name">Programul {$program->program_name}</p>
                <div class="row">
                    {if $discountPrice == false}
                        <div class="col">
                            <p class="text-center program-price-text mb-0">Profita de pretul special</p>
                            <p class="text-center program-price">{$program->program_price} RON</p>
                        </div>
                    {else}
                        <div class="col">
                            <p class="text-center program-price-text mb-0">Noul Pret</p>
                            <p class="text-center program-price">{$program->program_price} RON</p>
                        </div>
                        <div class="col">
                            <p class="text-center program-price-text mb-0">Vechiul Pret</p>
                            <p class="text-center program-price strike">{$program->program_price} RON</p>
                        </div>
                    {/if}
                </div>
                <hr />

                <p><strong>Ai nevoie de ajutor?</strong></p>
                <p>Pentru orice intrebari ne poti contacta:</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> Telefon: 0757.103.898</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: office@slabestecuserban.ro</p>
                <p>FIT MAKER SRL</p>
                <p>Aleea Giurgeni, sector 3, Bucuresti</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body guarantee">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-2">
                        <img style="max-width: 150px;" src="{$app_path}/img/logos/garantie.png" />
                    </div>
                    <div class="col-md-10 pl-5">
                        <p><strong>Garantia de 14 zile</strong></p>
                        <p>Iti garantam maxima calitate. Daca din orice motiv nu esti multumit/a de calitatea produselor noastre, poti solicita in termen de 14 zile restituirea contravalorii acestora si inchiderea contului tau pe acest site. - Echipa Slabeste Cu Serban</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="script"}

{/block}
