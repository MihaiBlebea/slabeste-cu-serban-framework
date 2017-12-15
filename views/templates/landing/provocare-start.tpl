
{extends file='layouts/landing/landing_layout.tpl'}

{config_load file="../configs/provocare-start.conf"}

{block name="body"}
    <div class="container-fluid">

        <!-- Include the modal component -->
        {include "partials/modal-lead-two-fields-no-img.tpl" cta_modal=#cta_modal#}
        <!-- Offer Start -->

        <div class="background-offer" style="background-image: url('{#main_image#}')">
            <div class="row offer">
                <div class="col-md-6 ml-md-auto">
                    <div id="cta-1" class="card">

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

        <!-- Benefits Start-->
        <div id="benefits" class="row benefits">
            <div class="bullet-point-benefits">
                <ul>
                    {foreach from=#benefit# item=benefitItem}
                        <li class="benefit-item">{$benefitItem}</li>
                    {/foreach}
                </ul>
                <div id="cta-2" class="mb-5 mt-5">
                    {include "partials/landing-call-to-action.tpl"
                        title = "Inscrie-te gratuit"
                        color = "btn-warning"
                        cta = "Inscrie-te Acum!"}
                </div>
            </div>
        </div>
        <!-- Benefits End -->

        <!-- Testimonials Start -->
        <div id="testimonials" class="row mt-5 mb-5">
            <div class="testimonials">
                {include "partials/landing-testimonial-left.tpl"
                    image   = "http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg"
                    title   = "Diana a pierdut 10 kg"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
                <hr />

                {include "partials/landing-testimonial-right.tpl"
                    image   = "http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg"
                    title   = "Diana a pierdut 10 kg"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
                <hr />

                {include "partials/landing-testimonial-left.tpl"
                    image   = "http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg"
                    title   = "Diana a pierdut 10 kg"
                    content = "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."}
            </div>
        </div>
        <!-- Testimonials End -->
        <div class="mb-5 mt-5">
            <div id="cta-3">
                {include "partials/landing-call-to-action.tpl"
                    title = "Vrei si tu rezultate asemanatoare?"
                    color = "btn-warning"
                    cta   = "Inscrie-te aici!"}
            </div>
        </div>

        <!-- About the author section -->
        <div class="mb-5">
            {include "partials/about-author.tpl" banner = "true"}
        </div>
        <!-- About the author section -->

        <div class="row dark-blue">
            <div id="cta-4" class="col pt-5 pb-5">
                {include "partials/landing-call-to-action.tpl"
                    title = #cta_offer_2#
                    color = "btn-warning"
                    cta = "Inscrie-te Acum!"}
            </div>
        </div>
    </div>
{/block}

{block name="script"}
    <script src="{$app_path}/../script-build/app/bundle.js"></script>
    <script>
        Landing.isInView('cta-1', function(item) {
            item.classList.add('animated', 'bounceInDown');
        });

        Landing.isInView('cta-2', function(item) {
            item.classList.add('animated', 'bounceInDown');
        });

        Landing.isInView('cta-3', function(item) {
            item.classList.add('animated', 'bounceInDown');
        });

        Landing.isInView('cta-4', function(item) {
            item.classList.add('animated', 'tada');
        });

    </script>
{/block}
