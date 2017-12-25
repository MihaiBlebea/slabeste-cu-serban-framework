<div class="other-programs-section">
    <h4>Acest program aduce rezultate maxime impreuna cu:</h4>
    <div class="row">
        {foreach $programs as $index => $program}
            {if $index < 4}
                <div class="card program-card" style="width: 15rem;">
                    <a href="{$program->program_sales_page}">
                        <img class="card-img-top image-program-footer" src="{$app_path}/{$program->program_image}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">{$program->program_name}</h5>
                        <a href="{$program->program_sales_page}" class="btn btn-primary" style="display:block;margin:auto;">Afla mai multe</a>
                    </div>
                </div>
            {/if}
        {/foreach}
    </div>
</div>
