
// Get input from form NAME & EMAIL
function getInput(event)
{
    if(event == "name")
    {
        var name = document.getElementById("name").value;
        storeDate("name", name);
    } else if(event == "email") {
        var email = document.getElementById("email").value;
        storeDate("email", email);
    }
}
