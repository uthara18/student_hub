function validateRegister() {
    var username = document.forms["regForm"]["username"].value;
    var email = document.forms["regForm"]["email"].value;
    var password = document.forms["regForm"]["password"].value;

    if (username == "") {
        alert("Enter username");
        return false;
    }

    if (email == "") {
        alert("Enter email");
        return false;
    }

    if (password.length < 5) {
        alert("Password must be 5+ chars");
        return false;
    }

    return true;
}