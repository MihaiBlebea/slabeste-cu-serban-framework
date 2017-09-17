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
        <form id="checkout-form" method="post" action="{$app_path}/checkout/payment">
            <div class="row">
                <div class="col-sm-12 col-md-6">
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
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Adresa:</label>
                        <textarea name="adress" class="form-control" rows="3"></textarea>
                    </div>
                    <input name="programTag" type="hidden" value="{$program['program_tag']}">
                </div>
                <div class="col-sm-12 col-md-6">
                    <p>Pret {$program['program_price']} RON</p>
                    <div class="form-group">
                        <div id="dropin-container"></div>
                    </div>
                    <input type="submit" value="Cumpara" class="btn btn-success btn-lg btn-block">
                </div>
            </div>
        </form>
    </div>
{/block}

{block name="footer"}

{/block}
