function updateGamePageTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.game_list.length; i++) {
        var row = table.insertRow();
        gameNameCell = row.insertCell(0);
        gameReleaseDateCell = row.insertCell(1);
        gameRatingCell = row.insertCell(2);
        gamePublisherCell = row.insertCell(3);
        gameNameCell.innerHTML = jsonData.game_list[i].game_name;
        gameReleaseDateCell.innerHTML = jsonData.game_list[i].game_release_date;
        gameRatingCell.innerHTML = jsonData.game_list[i].game_rating;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                gamePublisherCell.innerHTML = data.pub_name[0].publisher_name;
                
            }
        };
        xhttp.open("POST", "/php/databaseinterface/getGamePublisher.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&idUsers=" + jsonData.game_list[i].game_publisher_id);
    }

}

function populateGamePage(game_name) {
    var xhttp = new XMLHttpRequest();
    game_name = "Starcraft";
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            var data = JSON.parse(this.responseText);
            console.log(data);
            updateGamePageTable("gamePageTable", data);
        }
    };    
    xhttp.open("POST", "/php/databaseinterface/gameSearch.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&game_name=" + game_name);
}