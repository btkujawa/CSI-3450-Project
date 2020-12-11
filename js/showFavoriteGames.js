function updateFavoritesTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    var tableIDString = "gameRowID";
    var buttonIDString = "gameFavoriteButtonID";    
    while (table.firstChild) {
        table.removeChild(table.firstChild);
    }
    for (var i = 0; i < jsonData.gameID_list.length; i++) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {   
                console.log(JSON.parse(this.responseText));             
                var data = JSON.parse(this.responseText);
                var row = table.insertRow();

                var favoriteButton = document.createElement("input");
                
                favoriteFunctionPlusArgument = "favoriteGame(" + gameID + ")";
                favoriteButton.setAttribute("id", gameID.toString() + buttonIDString);
                favoriteButton.setAttribute("type", "checkbox");
                favoriteButton.setAttribute("onclick", favoriteFunctionPlusArgument);
                favoriteButton.setAttribute("class", "btn btn-primary");
                favoriteButton.checked = true;
                favoriteButton.setAttribute("style", "background-color: #2DE2E6; color: #261447");
                favoriteButton.setAttribute("value", "Favorite");
                row.id = gameID.toString() + tableIDString;
                var gamePageLink = document.createElement("a");
                gamePageLink.setAttribute("style", "text-decoration: none");
                gamePageLink.setAttribute("href", "/php/gamePage.php");
                gamePageLink.innerHTML = data.games_list[0].game_name;
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
                xhttp1.send("&idUsers=" + data.games_list[0].game_publisher_id);

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {}
                };
                xhttp.open("POST", "/php/databaseinterface/setGameSearchSessionVariable.php", true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send("&game_name=" + data.games_list[0].game_name);


            }
        };
        var gameID = jsonData.gameID_list[i].favorite_games_game_id;
        xhttp.open("POST", "/php/databaseinterface/getAllFavoriteGames.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&game_id=" + jsonData.gameID_list[i].favorite_games_game_id);
    }

}

function showAllFavorites() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updateFavoritesTable("favoriteGamesTable", data);
        }
    };
    xhttp.open("POST", "/php/databaseinterface/getFavoriteGame.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send();
}