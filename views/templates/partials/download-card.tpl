<div class="card mb-4">
    <div class="row">
        <div class="col-md-6 col-sm-4 col-xs-12 p-3">
            <a href="{$download_link}">
                <img class="card-img-top download-card-img" src="{$image_link}">
            </a>
        </div>
        <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="card-body">
                <h4 class="card-title">{$title}</h4>
                <p class="card-text">{$text}</p>
                <a href="{$download_link}" class="btn btn-primary">{$button_text|default:'Descarca'}</a>
            </div>
        </div>
    </div>
</div>
