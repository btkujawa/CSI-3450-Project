function editUser() {
    var r = confirm("Are you sure???");
    if (r == true) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
            }
        };        
        var idUsers = document.getElementById("user_id_to_edit").value;
        var username = document.getElementById("user_name_edit").value;
        var password = document.getElementById("user_password_edit").value;
        xhttp.open("POST", "/php/databaseinterface/editUser.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        if (username == "") {
            xhttp.send("&idUsers=" + idUsers + "&password=" + password);
        }
        else if (password == "") {
            xhttp.send("&idUsers=" + idUsers + "&username=" + username);
        }    
        else {
            xhttp.send("&idUsers=" + idUsers + "&username=" + username + "&password=" + password);
        }
    }
}