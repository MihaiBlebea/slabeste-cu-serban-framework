
{extends file='layouts/landing/landing_layout.tpl'}

{config_load file="../configs/provocare-start.conf"}

{block name="body"}
    <div class="container-fluid">

        <!-- Include the modal component -->
        {include "partials/modal-lead-two-fields-no-img.tpl" cta_modal=#cta_modal#}
        <!-- Offer Start -->

        <div class="background-offer">
            <div class="row offer">
                <div class="col-md-6 ml-md-auto">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="offer-text-1">{#page_main_title#}</h4>
                            <h4 class="offer-text-2">{#page_sub_title#}</h4>
                            <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;">{#cta_page#}</button>
                        </div>

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
                <div class="jumbotron">
                    <h3 class="col mb-4 text-center">{#cta_offer_1#}</h3>
                    <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;">{#cta_page#}</button>
                </div>
            </div>
        </div>
        <!-- Benefits End -->

        <!-- Testimonials Start -->
        <div id="testimonials" class="row testimonials">
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
                <div class="jumbotron">
                    <h3 class="col mb-4 text-center">{#cta_offer_2#}</h3>
                    <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;">{#cta_page#}</button>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->

    </div>
{/block}

{block name="script"}

{/block}
