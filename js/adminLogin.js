function loginAdmin() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            var result = JSON.parse(this.responseText);
            if (result.success) {
                window.location.assign("/php/adminpanel.php");
            }
        }
    };
    var user_name = document.getElementById("user_name").value;
    var user_password = document.getElementById("user_password").value;
    xhttp.open("POST", "/php/databaseinterface/adminLogin.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&user_name=" + user_name + "&user_password=" + user_password);
}