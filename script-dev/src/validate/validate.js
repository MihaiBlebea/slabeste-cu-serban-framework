import validator from 'validator';

function validateName(event)
{
    let value = event.target.value;
    let result = validator.isLength(value, {min: 3, max: undefined});
    displayError(result);
}

function validateEmail(event)
{
    let value = event.target.value;
    let result = validator.isEmail(value);
    displayError(result);
}

function displayError(result)
{
    if(result !== true)
    {
        event.target.classList.add('is-invalid');
        let message = event.target.dataset.errorMessage;
        if(message !== undefined)
        {
            event.target.nextElementSibling.innerText = message;
            disableButton('button-confirm');
        }
    } else {
        event.target.classList.remove('is-invalid');
        incrementProgressBar(15);
        enableButton('button-confirm');
    }
}

export {
    validateName,
    validateEmail
}
