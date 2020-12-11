function updateTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i< jsonData.game_list.length; i++) {
        var row = table.insertRow();
        gameNameCell = row.insertCell(0);
        gameReleaseDateCell = row.insertCell(1);
        gameRatingCell = row.insertCell(2);
        gamePublisherCell = row.insertCell(3);
        gameNameCell.innerHTML = jsonData.game_list[i].game_name;
        gameReleaseDateCell.innerHTML = jsonData.game_list[i].game_release_date;
        gameRatingCell.innerHTML = jsonData.game_list[i].game_rating;
        gamePublisherCell.innerHTML = jsonData.game_list[i].game_publisher_id;
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