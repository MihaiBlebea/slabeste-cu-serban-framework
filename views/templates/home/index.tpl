
{extends file='layouts/membership/home_page_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-3">Bine ai venit in Cercul Intern!</h1>
            <p class="lead">Aici vei gasi toate uneltele de care ai nevoie pentru a obtine rezultate vizibile.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="row">

        {foreach $programs as $program}
            <div class="card program-card" style="width: 20rem;">
                {if $program['owned'] == 0}
                    <a href="{$program['program_sales_page']}">
                        <img class="card-img-top" style="filter: grayscale(100%);" src="{$program['program_image']}">
                    </a>
                {else}
                    <a href="{$app_path}{$program['main_page']}">
                        <img class="card-img-top" src="{$program['program_image']}">
                    </a>
                {/if}
                <div class="card-body">
                    <h4 class="card-title" style="text-align:center;">{$program['program_name']}</h4>

                    {if $program['owned'] == 0}
                        <a href="{$program['program_sales_page']}" class="btn btn-primary" style="display:block;margin:auto;">Afla mai multe</a>
                    {else}
                        <a href="{$app_path}{$program['main_page']}" class="btn btn-primary" style="display:block;margin:auto;">Acceseaza</a>
                    {/if}
                </div>
            </div>
        {/foreach}
    </div>
{/block}
