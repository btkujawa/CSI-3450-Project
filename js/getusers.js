function updateUsersTable(jsonData) {
    var table = document.getElementById("usersTable");
    var tableIDString = "userRowID";
    var buttonIDString = "userRemoveButtonID";
    while (table.firstChild) {
        table.removeChild(table.firstChild);
    }
    for (var i = 0; i < jsonData.user_list.length; i++) {
        var row = table.insertRow();
        var removeButton = document.createElement("input");
        var userID = jsonData.user_list[i].idUsers;
        removeFunctionPlusArgument = "removeUser(" + userID + ")";
        removeButton.setAttribute("id", userID.toString() + buttonIDString);
        removeButton.setAttribute("type", "button");
        removeButton.setAttribute("onclick", removeFunctionPlusArgument);
        removeButton.setAttribute("class", "btn btn-primary");
        removeButton.setAttribute("style", "background-color: #2DE2E6; color: #261447");
        removeButton.setAttribute("value", "remove");
        row.id = jsonData.user_list[i].idUsers.toString() + tableIDString;
        userIDCell = row.insertCell(0);
        usernameCell = row.insertCell(1);
        userTypeCell = row.insertCell(2);
        removeButtonCell = row.insertCell(3);
        usernameCell.innerHTML = jsonData.user_list[i].username;
        if (jsonData.user_list[i].user_type == 0) {
            userTypeCell.innerHTML = "Admin";
        } else if (jsonData.user_list[i].user_type == 2) {
            userTypeCell.innerHTML = "Publisher";
        } else {
            userTypeCell.innerHTML = "Standard User";
        }
        userIDCell.innerHTML = jsonData.user_list[i].idUsers;
        removeButtonCell.appendChild(removeButton);
    }

}

function getUsers() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updateUsersTable(data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllUsers.php", true);
    xhttp.send();
}