<ul class="nav top menu-desktop">
    <li class="nav-item top">
        <a class="nav-link active" href="{$app_path}/member/home">Home</a>
    </li>
    <li class="nav-item top">
        <a class="nav-link" href="{$app_path}/member/account">Contul Meu</a>
    </li>
    <li class="nav-item top">
        <a class="nav-link" href="{$app_path}/logout">Logout</a>
    </li>
</ul>

<div class="pos-f-t menu-mobile">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white mb-2">Alege lectia:</h4>
            {foreach $chapters as $chapter}
                <h5>{$chapter["name"]}</h5>
                <nav class="nav flex-column">
                    {foreach $chapter['pages'] as $page}
                        <a class="nav-link sidebar-link-item" href="{$app_path}/{$page['url']}">{$page['name']}</a>
                    {/foreach}
                </nav>
                <hr />
            {/foreach}
            <a class="nav-link" href="{$app_path}/member/account">Contul Meu</a>
        </div>
    </div>
    <nav class="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            {* <span class="navbar-toggler-icon"></span> *}
            <i style="color: white;" class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <a class="nav-link active" href="{$app_path}/member/home">Home</a>
        <a class="nav-link" href="{$app_path}/logout">Logout</a>
    </nav>
</div>
