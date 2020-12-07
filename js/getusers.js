function updateTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i< jsonData.user_list.length; i++) {
        var row = table.insertRow();
        usernameCell = row.insertCell(0);
        userTypeCell = row.insertCell(1);
        usernameCell.innerHTML = jsonData.user_list[i].username;
        userTypeCell.innerHTML = jsonData.user_list[i].user_type;
    }

}

function getUsers() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            var data = JSON.parse(this.responseText);
            console.log(data);
            updateTable("usersTable", data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllUsers.php", true);
    xhttp.send();
}