function editProfile() {
    var r = confirm("Are you sure???");
    if (r == true) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
            }
        };        
        var username = document.getElementById("user_name_edit").value;
        var password = document.getElementById("user_password_edit").value;
        xhttp.open("POST", "/php/databaseinterface/editProfile.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        if (username == "") {
            xhttp.send("&password=" + password);
        }
        else if (password == "") {
            xhttp.send("&username=" + username);
        }    
        else {
            xhttp.send("&username=" + username + "&password=" + password);
        }
    }
}