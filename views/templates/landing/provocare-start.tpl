
{extends file='layouts/landing/landing_layout.tpl'}

{config_load file="../configs/provocare-start.conf"}

{block name="body"}
    <div class="container-fluid">

        <!-- Include the modal component -->
        {include "partials/modal-lead-two-fields-no-img.tpl" cta_modal=#cta_modal#}
        <!-- Offer Start -->

        <div class="background-offer" style="background-image: url('{$app_path}{#main_image_desktop#}')">
            <div class="row offer">
                <div class="col-md-6 ml-md-auto">
                    <div id="cta-0" class="card">

                        {include "partials/landing-card-offer.tpl"
                            title     = #page_main_title#
                            sub_title = #page_sub_title#}

                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->

        <!-- Steps Start -->
        {include "partials/landing-steps.tpl"
            step_1_title    = #step_1_title#
            step_1_subtitle = #step_1_subtitle#
            step_2_title    = #step_2_title#
            step_2_subtitle = #step_2_subtitle#
            step_3_title    = #step_3_title#
            step_3_subtitle = #step_3_subtitle# }
        <!-- Steps End -->

        <!-- Explain the lead magnet -->
        <div class="light-blue-background" style="padding-bottom:10px;">
            <div id="content" class="row container-content">
                <div class="col">
                    <h3 class="col mb-5 text-center">{#content_title#}</h3>
                    <p>{#content_text#}</p>
                </div>
            </div>
        </div>
        <!-- Explain the lead magnet -->

        <!-- Benefits Start-->
        <div id="benefits" class="row benefits">
            <div class="bullet-point-benefits">
                <ul style="list-style: none;padding-left: 10px;">
                    {foreach from=#benefit# item=benefitItem}
                        <li class="benefit-item">
                            {$benefitItem}
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>

        {include "partials/landing-call-to-action.tpl"
            id       = "cta-1"
            bg_color = "light-blue-background"
            title    = #cta_offer_1#
            color    = "btn-warning"
            cta      = #cta_1#}
        <!-- Benefits End -->

        <!-- Testimonials Start -->
        <div id="testimonials" class="row mt-5 mb-5">
            <div class="col container-content">
                {include "partials/landing-testimonial-left.tpl"
                    image   = "{$app_path}/img/testimoniale/denys.png"
                    title   = "Denys a slabit peste 20 kg"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
                <hr />

                {include "partials/landing-testimonial-right.tpl"
                    image   = "{$app_path}/img/testimoniale/raluca.png"
                    title   = "Raluca si-a subtiat talia cu peste 7 centimetri"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
                <hr />

                {include "partials/landing-testimonial-left.tpl"
                    image   = "{$app_path}/img/testimoniale/maroiu.png"
                    title   = "Monica M. a ajuns in cea mai buna forma fizica"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
                <hr />

                {include "partials/landing-testimonial-right.tpl"
                    image   = "{$app_path}/img/testimoniale/monica.png"
                    title   = "Monica C. a slabit peste 5 kg"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
            </div>
        </div>
        <!-- Testimonials End -->

        {include "partials/landing-call-to-action.tpl"
            id       = "cta-2"
            bg_color = "white-background"
            title    = #cta_offer_2#
            color    = "btn-warning"
            cta      = #cta_2#}

        <!-- About the author section -->
        <div class="mb-5">
            {include "partials/about-author.tpl" banner = "true"}
        </div>
        <!-- About the author section -->

        {include "partials/landing-call-to-action.tpl"
            id       = "cta-3"
            bg_color = "dark-blue-background"
            title    = #cta_offer_3#
            color    = "btn-warning"
            cta      = #cta_3#}
    </div>
{/block}

{block name="script"}
    <script src="{$app_path}/../script-build/app/bundle.js"></script>
    <script>
        Landing.isInView('cta-0', function(item) {
            item.classList.add('animated', 'fadeIn');
        });

        Landing.isInView('cta-1', function(item) {
            item.classList.add('animated', 'fadeIn');
        });

        Landing.isInView('cta-2', function(item) {
            item.classList.add('animated', 'tada');
        });

        Landing.isInView('cta-3', function(item) {
            item.classList.add('animated', 'tada');
        });

    </script>
{/block}
