var server = "http://localhost:8070/slabeste-cu-serban/slabeste-cu-serban-framework/public/tracking/receive";

var code = parseUrl();

if(code !== false)
{
    if(getData(code) == undefined)
    {
        var date = new Date();
        storeDate(code, date);
        sendData({
            pageCode: code,
            dateTime: date
        }, server);
    }
}

// Functions

// Get the tracking code from the page URL
function parseUrl()
{
    var params = window.location.href.split("/");
    var code = params[params.length - 1];

    if(code.length == 4)
    {
        return code;
    }
    // if(url.indexOf("?") > -1)
    // {
    //     var params = url.split("?")[1];
    //     params = params.split("&");
    //     var values = [];
    //     for(var i = 0; i < params.length; i++)
    //     {
    //         var store = params[i].split("=");
    //         values[store[0]] = store[1];
    //     }
    //     return values[search];
    // }
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
