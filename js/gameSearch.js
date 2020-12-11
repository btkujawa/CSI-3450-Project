function updateTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    var tableIDString = "gameRowID";
    var buttonIDString = "gameFavoriteButtonID";
    for (var i = 0; i < jsonData.game_list.length; i++) {
        var row = table.insertRow();

        var favoriteButton = document.createElement("input");
        var gameID = jsonData.game_list[i].idGame;
        favoriteFunctionPlusArgument = "favoriteGame(" + gameID + ")";
        favoriteButton.setAttribute("id", gameID.toString() + buttonIDString);
        favoriteButton.setAttribute("type", "checkbox");
        favoriteButton.setAttribute("onclick", favoriteFunctionPlusArgument);
        favoriteButton.setAttribute("class", "btn btn-primary");
        favoriteButton.setAttribute("style", "background-color: #2DE2E6; color: #261447");
        favoriteButton.setAttribute("value", "Favorite");
        row.id = jsonData.game_list[i].idGame.toString() + tableIDString;
        var gamePageLink = document.createElement("a");
        gamePageLink.setAttribute("style", "text-decoration: none");
        gamePageLink.setAttribute("href", "/php/gamePage.php");
        gamePageLink.innerHTML = jsonData.game_list[i].game_name;
        gameNameCell = row.insertCell(0);
        gamePublisherCell = row.insertCell(1);
        gameFavoriteButtonCell = row.insertCell(2);
        gameNameCell.appendChild(gamePageLink);
        gameFavoriteButtonCell.appendChild(favoriteButton);
        var xhttp1 = new XMLHttpRequest();
        xhttp1.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                gamePublisherCell.innerHTML = data.pub_name[0].publisher_name;

            }
        };
        xhttp1.open("POST", "/php/databaseinterface/getGamePublisher.php", true);
        xhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp1.send("&idUsers=" + jsonData.game_list[i].game_publisher_id);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {}
        };
        xhttp.open("POST", "/php/databaseinterface/setGameSearchSessionVariable.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&game_name=" + jsonData.game_list[i].game_name);
    }

}

function gameSearch() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            var data = JSON.parse(this.responseText);
            console.log(data);
            updateTable("gamesTable", data);
        }
    };
    var game_name = document.getElementById("game_name").value;
    xhttp.open("POST", "/php/databaseinterface/gameSearch.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&game_name=" + game_name);
}