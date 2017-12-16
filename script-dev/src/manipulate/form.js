
function disableButton(el)
{
    document.getElementById(el).disabled = true;
}

function enableButton(el)
{
    document.getElementById(el).disabled = false;
}

function showForm()
{
    let form = document.getElementsByTagName("FORM")[0];
    if(form !== undefined)
    {
        form.style.display = 'block';
    } else {
        console.log('Form not found')
    }
}

function hideForm()
{
    let form = document.getElementsByTagName("FORM")[0];
    if(form !== undefined)
    {
        form.style.display = 'none';
    } else {
        console.log('Form not found')
    }
}

function showLoading()
{
    let loading = document.getElementById('loading');
    if(loading !== undefined)
    {
        loading.style.display = 'block';
    } else {
        console.log('Loading not found')
    }
}

function hideLoading()
{
    let loading = document.getElementById('loading');
    if(loading !== undefined)
    {
        loading.style.display = 'none';
    } else {
        console.log('Loading not found')
    }
}

function showError()
{
    let error = document.getElementById('error');
    if(error !== undefined)
    {
        error.style.display = 'block';
        setTimeout(function() {
            hideError();
        }, 5000);
    } else {
        console.log('Error not found')
    }
}

function hideError()
{
    let error = document.getElementById('error');
    if(error !== undefined)
    {
        error.style.display = 'none';
    } else {
        console.log('Error not found')
    }
}

export {
    disableButton,
    enableButton,
    showForm,
    hideForm,
    showLoading,
    hideLoading,
    showError,
    hideError
}
