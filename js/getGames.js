function updateGamesTable(jsonData) {
    var table = document.getElementById("gamesAdminTable");
    var tableIDString = "gameRowID";
    var buttonIDString = "gameRemoveButtonID";
    while (table.firstChild) {
        table.removeChild(table.firstChild);
    }
    for (var i = 0; i < jsonData.game_list.length; i++) {
        var row = table.insertRow();
        var removeButton = document.createElement("input");
        var gameID = jsonData.game_list[i].idGame;
        removeFunctionPlusArgument = "removeGame(" + gameID + ")";
        removeButton.setAttribute("id", gameID.toString() + buttonIDString);
        removeButton.setAttribute("type", "button");
        removeButton.setAttribute("onclick", removeFunctionPlusArgument);
        removeButton.setAttribute("class", "btn btn-primary");
        removeButton.setAttribute("style", "background-color: #2DE2E6; color: #261447");
        removeButton.setAttribute("value", "remove");
        row.id = jsonData.game_list[i].idGame.toString() + tableIDString;
        gameIDCell = row.insertCell(0);
        gamenameCell = row.insertCell(1);
        gameDateCell = row.insertCell(2);
        gamePublisherCell = row.insertCell(3);
        gamePlatformCell = row.insertCell(4);
        gameRatingCell = row.insertCell(5);
        gameStoresCell = row.insertCell(6);
        removeButtonCell = row.insertCell(7);
        gamenameCell.innerHTML = jsonData.game_list[i].game_name;
        gameDateCell.innerHTML = jsonData.game_list[i].game_release_date;
        gameIDCell.innerHTML = jsonData.game_list[i].idGame;
        gameRatingCell.innerHTML = jsonData.game_list[i].game_rating;
        var xhttp2 = new XMLHttpRequest();
        xhttp2.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                gamePlatformCell.innerHTML = data.plat_name[0].platform_name;

            }
        };
        xhttp2.open("POST", "/php/databaseinterface/getGamePlatform.php", true);
        xhttp2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp2.send("&gameID=" + gameID);

        var xhttp3 = new XMLHttpRequest();
        xhttp3.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                gameStoresCell.innerHTML = data.store_info[0].store_name;

            }
        };
        xhttp3.open("POST", "/php/databaseinterface/getGameStore.php", true);
        xhttp3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp3.send("&gameID=" + gameID);

        removeButtonCell.appendChild(removeButton);
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
    }

}

function getGames() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updateGamesTable(data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllGames.php", true);
    xhttp.send();
}