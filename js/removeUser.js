function removeUser(userID) {
    var r = confirm("Are you sure???");
    if (r == true) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                getUsers();
            }
        };
        var idUsers = userID;
        xhttp.open("POST", "/php/databaseinterface/removeUser.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&idUsers=" + idUsers);
    }
}