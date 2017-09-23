
{extends file='layouts/landing/landing_layout.tpl'}

{config_load file="../configs/landing_1.conf"}

{block name="body"}
    <div class="container-fluid">

        <!-- Include the modal component -->
        {include 'layouts/landing/modal_name_email.tpl' cta_modal=#cta_modal#}
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
        <div id="steps" class="row steps">
            <div class="steps-container row">
                <div class="step row col align-items-center">
                    <div class="step-number col-2">
                        1
                    </div>
                    <div class="step-text col-10">
                        <div class="step-title">
                            {#step_1_title#}
                        </div>
                        <div class="step-content">
                            {#step_1_subtitle#}
                        </div>
                    </div>
                </div>
                <div class="step row col align-items-center">
                    <div class="step-number col-2">
                        2
                    </div>
                    <div class="step-text col-10">
                        <div class="step-title">
                            {#step_2_title#}
                        </div>
                        <div class="step-content">
                            {#step_2_subtitle#}
                        </div>
                    </div>
                </div>
                <div class="step row col align-items-center">
                    <div class="step-number col-2">
                        3
                    </div>
                    <div class="step-text col-10">
                        <div class="step-title">
                            {#step_3_title#}
                        </div>
                        <div class="step-content">
                            {#step_3_subtitle#}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="media">
                    <img class="testimonial-image d-flex align-self-start mr-3" src="http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <hr />
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                    <img class="testimonial-image d-flex align-self-start mr-3" src="http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg" alt="Generic placeholder image">
                </div>
                <hr />
                <div class="media">
                    <img class="testimonial-image d-flex align-self-start mr-3" src="http://images.shape.mdpcdn.com/sites/shape.com/files/styles/slide/public/media/brooke-strait-fitness-transformation_0.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <div class="jumbotron">
                    <h3 class="col mb-4 text-center">{#cta_offer_2#}</h3>
                    <button data-toggle="modal" data-target="#modalRegister" type="button" class="col btn btn-warning btn-lg" style="margin:auto;margin-top:30px;display:block;">{#cta_page#}</button>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->

    </div>
{/block}
