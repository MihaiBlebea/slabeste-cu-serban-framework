{extends file='layouts/confirmation_layout.tpl'}

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
        <p>{$username}</p>
        <p>{$password}</p>
        <p>{$programImage}</p>
        <p>{$mainPage}</p>
    </div>
{/block}

{block name="footer"}

{/block}
