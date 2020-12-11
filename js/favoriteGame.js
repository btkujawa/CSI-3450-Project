function favoriteGame(game_id) {
    var buttonID = game_id.toString() + "gameFavoriteButtonID";
    if (document.getElementById(buttonID).checked) {
        console.log("checked");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {}
        };
        xhttp.open("POST", "/php/databaseinterface/favoriteGame.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&game_id=" + game_id);
    } else if ((document.getElementById(buttonID).checked) == false) {
        console.log("unchecked");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "/php/databaseinterface/unFavoriteGame.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&game_id=" + game_id);
    }
}