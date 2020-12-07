function createStandardUser() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("createUserP").innerHTML = "User Created";
            document.getElementById("createUserP").style.color = "#F83B6F";
        }
    };
    var user_name = document.getElementById("user_name").value;
    var user_password = document.getElementById("user_password").value;
    if (user_name == "" || user_name == " " || user_name == "  ") {
        document.getElementById("user_name").placeholder = "Please input a valid user name";
    } else if (user_password == "" || user_password == " " || user_password == "  ") {
        document.getElementById("user_password").placeholder = "Please input a valid password";
    } else {
        xhttp.open("POST", "/php/databaseinterface/createStandardUser.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&user_name=" + user_name + "&user_password=" + user_password);
    }
}