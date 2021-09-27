function validateForm() {
    //collecting user inputs 
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;

    if (username == "") {
        hideAllErrors();
        document.getElementById("usernameError").style.display = "inline";
        document.getElementById("username").select();
        document.getElementById("username").focus();
        return false;
    }

    if (password == "") {
        hideAllErrors();
        document.getElementById("passwordError").style.display = "inline";
        document.getElementById("password").select();
        document.getElementById("password").focus();
        return false;
    }
}

// hide error upon successful validation
function hideAllErrors() {
    document.getElementById("usernameError").style.display = "none";
    document.getElementById("passwordError").style.display = "none";
}