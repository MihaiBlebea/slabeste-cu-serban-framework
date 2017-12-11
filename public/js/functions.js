
// Functions

// Check if localStorage is available
function checkIfLocalStorage()
{
    if (typeof(Storage) !== "undefined") {
        return true;
    } else {
        return false;
    }
}

// Get the tracking code from the page URL
function parseUrl()
{
    var params = window.location.href.split("?");
    var code = params[params.length - 1];

    if(code.length == 4)
    {
        return code;
    }
    return false;
}

// Store data in the localStorage
function storeDate(index, data)
{
    localStorage.setItem(index,data);
    return localStorage.getItem(index);
}

// Get data from the localStorage by index
function getData(index)
{
    return localStorage.getItem(index);
}

// Remove data from the localStorage by index
function removeData(index)
{
    localStorage.removeItem(index);
    return localStorage.getItem(index);
}

// Send fetch request to post data to server
function sendData(data, link)
{
    fetch(link, {
        method: "post",
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        },
        mode: "no-cors"
    }).then(function(response) {
        return response.json();
    }).then(function(data) {
        console.log(data);
    }).catch(function(error) {
        console.log(error)
    })
}
