
function disableButton(el)
{
    document.getElementById(el).disabled = true;
}

function enableButton(el)
{
    document.getElementById(el).disabled = false;
}

export {
    disableButton,
    enableButton
}
