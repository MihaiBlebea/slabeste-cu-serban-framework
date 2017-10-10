{extends file='layouts/checkout_layout.tpl'}

/*{block name="nav"}
    <div class="nav">
        <img style="display:block;margin:auto;" src="{$app_path}/img/logos/logo_site.png" />
    </div>
    {* <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#"><img src="{$app_path}/img/logos/logo_site.png" /></a>
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
    </ul> *}
{/block}*/

{block name="body"}
    <div class="container-fluid">
        <div class="row mb-5 animated fadeIn">
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

                    <input name="program_price" type="hidden" value="{$discountPrice}">
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
                <p class="text-center program-name">Programul {$program->program_name}</p>
                <img style="max-width:100%" class="mb-3" src="{$app_path}/{$program->program_image}" />
                
                <div class="row">
                    {if $discount == false}
                        <div class="col">
                            <p class="text-center normal-price discount-label-text">Profita de pretul special</p>
                            <p class="text-center normal-price">{$program->program_price} RON</p>
                        </div>
                    {else}
                        <div class="col">
                            <p class="text-center discount-price discount-label-text">Noul Pret</p>
                            <p class="text-center discount-price text-shadow">{$discountPrice} RON</p>
                        </div>
                        <div class="col">
                            <p class="text-center normal-price discount-label-text old-price">Vechiul Pret</p>
                            <p class="text-center normal-price strike old-price">{$program->program_price} RON</p>
                        </div>
                    {/if}
                </div>
                <hr />
                <div class="business-details">
                    <p><strong>Ai nevoie de ajutor?</strong></p>
                    <p>Pentru orice intrebari ne poti contacta:</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Telefon: 0757.103.898</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: office@slabestecuserban.ro</p>
                    <p>FIT MAKER SRL</p>
                    <p>Aleea Giurgeni, sector 3, Bucuresti</p>
                </div>
                <div class="card">
                    <div class="card-body guarantee">
                        <div class="justify-content-center align-items-center">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-4">
                                    <img style="max-width: 150px;" src="{$app_path}/img/logos/garantie.png" />
                                </div>
                                <div class="col-md-8">
                                    <h4><strong>Garantia de 14 zile</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Iti garantam maxima calitate. Daca din orice motiv nu esti multumit/a de calitatea produselor noastre, poti solicita in termen de 14 zile restituirea contravalorii acestora si inchiderea contului tau pe acest site. - Echipa Slabeste Cu Serban</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {* <div class="card">
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
        </div> *}
    </div>
{/block}

{block name="script"}

{/block}
