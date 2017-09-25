
{extends file='layouts/landing/sales_layout.tpl'}

{config_load file="../configs/provocare-start.conf"}

{block name="body"}
    <div class="container-fluid">
        <div class="row offer">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="jumbotron jumbotron-fluid col-md-12 ml-md-auto">
                            <div class="container">
                                <h1 class="display-3 mb-5">Felicitari <span id="name"></span>! Esti Aproape Gata</h1>
                                <h4>Pana atunci urmareste sesiunea Video de Orientare de mai jos ca sa descoperi cum functioneaza Provocarea</h4>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/174818025"></iframe>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Offer End -->
    </div>
{/block}

{block name="script"}
    <script>
        var check = checkIfLocalStorage();
        if(check == true)
        {
            document.getElementById("name").innerHTML = getData("name");
        }
    </script>
{/block}
