
{extends file='layouts/membership/home_page_layout.tpl'}

{block name="body"}
    <div class="row" style="justify-content:center;">
        <div class="jumbotron" style="text-align:center;">
            <h1 class="display-3">Bine ai venit in Cercul Intern!</h1>
            <p class="lead">Aici vei gasi toate uneltele de care ai nevoie pentru a obtine rezultate vizibile.</p>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item" style="overflow:hidden;">
                <img class="d-block w-100" style="max-height:500px;" data-src="" alt="First slide [800x400]" src="https://d2auhg88b162pf.cloudfront.net/assets/categories/self/self_category_fitness-588aedbc4bdb910bc6c251502ca9f57b.jpg" data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h3>First slide label</h3>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" style="max-height:500px;" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="http://ghk.h-cdn.co/assets/16/50/980x490/landscape-1481735668-gettyimages-634475035.jpg" data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second slide label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item active">
                <img class="d-block w-100" style="max-height:500px;" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="http://cdn-maf3.heartyhosting.com/sites/muscleandfitness.com/files/media/campus-muscle-trainint-partner-4.jpg" data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third slide label</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">

        {foreach $programs as $program}
            <div class="card program-card" style="width: 20rem;">
                {if $program->owned == false}
                    <a href="{$program->program_sales_page}">
                        <img class="card-img-top program-main-image-not-owned" src="{$app_path}/{$program->program_image}">
                    </a>
                {else}
                    <a href="{$app_path}{$program->main_page}">
                        <img class="card-img-top program-main-image" src="{$app_path}/{$program->program_image}">
                    </a>
                {/if}
                <div class="card-body">
                    <h4 class="card-title" style="text-align:center;">{$program->program_name}</h4>

                    {if $program->owned == false}
                        <a href="{$program->program_sales_page}" class="btn btn-primary" style="display:block;margin:auto;">Afla mai multe</a>
                    {else}
                        <a href="{$app_path}{$program->main_page}" class="btn btn-primary" style="display:block;margin:auto;">Acceseaza</a>
                    {/if}
                </div>
            </div>
        {/foreach}
    </div>
{/block}
