<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{#modal_title#}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{$app_path}/autoresponder/catch" method="POST">
                    <div class="form-group">
                        <label class="form-control-label" for="formGroupExampleInput">Prenumele tau:</label>
                        <input name="name" type="text" class="form-control" id="form-name" placeholder="Introdu doar prenumele tau">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="formGroupExampleInput2">Emailul tau principal:</label>
                        <input name="email" type="text" class="form-control" id="form-email" placeholder="Introdu emailul tau pe care vrei sa primesti materialele">
                    </div>
                    <input type="hidden" name="page_code" value="{$landing->code}">
                    <div class="form-group" style="display: flex;justify-content: center;">
                        <button type="submit" class="btn btn-primary">{#cta_modal#}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
