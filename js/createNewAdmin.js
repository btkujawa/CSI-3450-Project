function createNewAdmin() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        }
    };
    var user_name = document.getElementById("user_name").value;
    var user_password = document.getElementById("user_password").value;
    var user_type = document.getElementById("user_type").value;
    if (user_name == "" || user_name == " " || user_name == "  ") {
        document.getElementById("user_name").placeholder = "Please input a valid user name";
    } else if (user_password == "" || user_password == " " || user_password == "  ") {
        document.getElementById("user_password").placeholder = "Please input a valid password";
    } else if (user_password == "") {
        document.getElementById("user_type_label").innerHTML = "Please select a user type";
    } else {
        xhttp.open("POST", "/php/databaseinterface/createNewAdmin.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&user_name=" + user_name + "&user_password=" + user_password + "&user_type=" + user_type);
    }
}