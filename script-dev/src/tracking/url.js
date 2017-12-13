function getQuery()
{
    let query = window.location.href.split("?");
    if(query.length == 2)
    {
        let result = [];
        let keyValue = query[1].split('&');
        for(let i = 0; i < keyValue.length; i++)
        {
            let query = keyValue[i].split('=');
            result[query[0]] = query[1];
        }
        return result;
    }
    return false;
}

function getRoot()
{
    return window.location.origin;
}

function getPathString()
{
    return window.location.pathname;
}

function getPathArray()
{
    let path = getPathString();
    return path.substr(1).split('/');
}

function getRealPathArray()
{
    return getPathArray().slice(2);
}

export {
    getQuery,
    getRoot,
    getPathString,
    getPathArray,
    getRealPathArray
}
