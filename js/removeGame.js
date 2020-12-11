function removeGame(gameID) {
    var r = confirm("Are you sure???");
    if (r == true) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                getGames();
            }
        };
        var idGame = gameID;
        xhttp.open("POST", "/php/databaseinterface/removeGame.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&idGame=" + idGame);
    }
}