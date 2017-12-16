<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">{#modal_title#}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width: 25%"></div>
                </div>

                <div id="error" style="display:none;">
                    {include 'partials/notification.tpl'
                        type="danger"
                        message="Din pacate ceva nu a functionat corect. Te rugam sa incerci din nou."}
                </div>

                <div id="loading" style="display:none;">
                    {include "partials/landing-loading.tpl"}
                </div>

                <form data-redirect="{#redirect#}"
                      data-list="{#list#}"
                      data-automation="{#automation#}"
                      data-tag="{#tag#}"
                      data-post="{$app_path}/api/autoresponder/catch"
                      data-query="{#query#}">

                    <div class="mb-2">
                        <label class="form-control-label">Prenumele tau:</label>
                        <input id="name" onkeyup="Landing.validateName(event);" data-type="error" type="text" class="form-control" name="name" placeholder="Maria" required>
                        <div class="invalid-feedback">Numele nu poate fi mai scurt de 3 litere</div>
                    </div>

                    <div class="mb-2">
                        <label class="form-control-label">Emailul tau:</label>
                        <input id="email" data-error-message="Verifica adresa de email" onkeyup="Landing.validateEmail(event);" type="text" class="form-control" name="email" autocomplete="off" placeholder="@" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mt-3">
                        <button onclick="Landing.addSubscriber(event);"
                                id="button-confirm"
                                class="btn btn-warning"
                                style="display:block;margin:auto;">{$cta_modal}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
