
function checkIfLocalStorage()
{
    if (typeof(Storage) !== "undefined") {
        return true;
    } else {
        return false;
    }
}

export {
    checkIfLocalStorage
}
