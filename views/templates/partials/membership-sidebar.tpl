<div style="padding:0px;" class="col-md-2 sidebar col-12 col-md-3 col-xl-2 bd-sidebar animated fadeInLeft" id="sticky-sidebar">
    <img class="sidebar-program-image mt-4 mb-5" src="{$app_path}/{$program->program_image}" />
    <div class="sidebar-content">
        {foreach $chapters as $chapter}
            <h5>{$chapter["name"]}</h5>
            <nav class="nav flex-column">
                {foreach $chapter['pages'] as $page}
                    <a class="nav-link sidebar-link-item" href="{$app_path}/{$page['url']}">{$page['name']}</a>
                {/foreach}
            </nav>
            <hr />
        {/foreach}
    </div>
</div>
