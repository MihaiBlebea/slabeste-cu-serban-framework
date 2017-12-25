<ul class="nav top menu-desktop">
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/admin/main">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/admin/programs">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/admin/clients">Clients</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/admin/transactions">Transactions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/admin/landings">Landings</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/admin/analytics">Analytics</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/member/home">Go to membership</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{$app_path}/logout">Logout</a>
    </li>
</ul>

<div class="pos-f-t menu-mobile">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white mb-2">Menu:</h4>
            <a class="nav-link active" href="{$app_path}/admin/main">Home</a>
            <a class="nav-link active" href="{$app_path}/admin/programs">Products</a>
            <a class="nav-link active" href="{$app_path}/admin/clients">Clients</a>
            <a class="nav-link active" href="{$app_path}/admin/transactions">Transactions</a>
            <a class="nav-link active" href="{$app_path}/admin/landings">Landings</a>
            <a class="nav-link active" href="{$app_path}/admin/analytics">Analytics</a>
            <a class="nav-link active" href="{$app_path}/member/home">Go to membership</a>
            <hr />
            {block name="mobile-menu"}{/block}
            <hr />
            <a class="nav-link active" href="{$app_path}/logout">Logout</a>
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
