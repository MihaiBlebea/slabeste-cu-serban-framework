
function incrementProgressBar(value)
{
    let bar = document.getElementById('progress-bar');
    if(bar !== undefined)
    {
        bar.style.width = 50 + '%';
    }
}

function disableButton(el)
{
    document.getElementById(el).disabled = true;
}

function enableButton(el)
{
    document.getElementById(el).disabled = false;
}

export {
    incrementProgressBar,
    disableButton,
    enableButton
}
