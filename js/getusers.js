function updateTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i< jsonData.user_list.length; i++) {
        var row = table.insertRow();
        selectedUser = row.insertCell(0);
        usernameCell = row.insertCell(1);
        userTypeCell = row.insertCell(2);
        usernameCell.innerHTML = jsonData.user_list[i].username;
        if (jsonData.user_list[i].user_type == 0) {
            userTypeCell.innerHTML = "Admin";
        }
        else if (jsonData.user_list[i].user_type == 2) {
            userTypeCell.innerHTML = "Publisher";
        }
        else {
            userTypeCell.innerHTML = "Standard User";
        }
    }

}

function getUsers() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updateTable("usersTable", data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllUsers.php", true);
    xhttp.send();
} 