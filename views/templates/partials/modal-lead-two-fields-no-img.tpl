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
                <form action="{$app_path}/autoresponder/catch" method="POST">

                    <div class="mb-2">
                        <label class="form-control-label">Prenumele tau:</label>
                        <input id="name" onkeyup="Mihai.validateName(event);" data-type="error" type="text" class="form-control" name="name" placeholder="Maria" required>
                        <div class="invalid-feedback">Numele trebuie sa contina mai mult de 3 litere</div>
                    </div>

                    <div class="mb-2">
                        <label class="form-control-label">Emailul tau:</label>
                        <input id="email" onchange="" type="text" class="form-control" name="email" autocomplete="off" placeholder="@" required>
                        <div class="invalid-feedback">Emailul trebuie sa contina @ si sa aiba peste 7 litere</div>
                    </div>

                    <input type="hidden" name="program_tag" value="{$landing->program_tag|default:'false'}">
                    <input type="hidden" name="code" value="{$landing->code|default:'false'}">
                    <input type="hidden" name="redirect" value="{$redirect|default:'false'}">

                    <div class="mt-3">
                        <button id="button" class="btn btn-primary" style="display:block;margin:auto;" type="submit">{$cta_modal}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // function validateName()
    // {
    //     let name = document.getElementById('name');
    //     name.classList.remove('is-invalid');
    //     activateButton();
    //
    //     if(name.value.length < 3)
    //     {
    //         name.classList.add('is-invalid');
    //         disableButton();
    //     }
    // }
    //
    // function validateEmail()
    // {
    //     let email = document.getElementById('email');
    //     email.classList.remove('is-invalid');
    //     activateButton();
    //
    //     if(email.value.length < 7)
    //     {
    //         email.classList.add('is-invalid');
    //         disableButton();
    //     }
    //
    //     if(email.value.includes('@') == false)
    //     {
    //         email.classList.add('is-invalid');
    //         disableButton();
    //     }
    // }
    //
    // function disableButton()
    // {
    //     let button = document.getElementById('button');
    //     button.disabled = true;
    // }
    //
    // function activateButton()
    // {
    //     let button = document.getElementById('button');
    //     button.disabled = false;
    // }
</script>
