
function checkIfLocalStorage()
{
    if (typeof(Storage) !== "undefined") {
        return true;
    } else {
        return false;
    }
}

function setLocal(key, value)
{
    if(checkIfLocalStorage())
    {
        localStorage.setItem(key, value);
        return getLocal(key);
    }
    return false;
}

function getLocal(key)
{
    if(checkIfLocalStorage())
    {
        return (localStorage.getItem(key) !== null) ? localStorage.getItem(key) : false ;
    }
    return false;
}

function removeLocal(key)
{
    if(checkIfLocalStorage())
    {
        return localStorage.removeItem(key);
    }
    return false;
}

export {
    setLocal,
    getLocal,
    removeLocal,
    checkIfLocalStorage
}
