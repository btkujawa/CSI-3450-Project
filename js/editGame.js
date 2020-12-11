function editGame() {
    var r = confirm("Are you sure???");
    if (r == true) {
        var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            getGames();
        }
    };
    var game_id = document.getElementById("game_id_to_edit");
    var game_name = document.getElementById("game_name_edit");
    var game_date = document.getElementById("release_date_edit");
    var game_rating = document.getElementById("game_rating_edit");
    var game_publisher = document.getElementById("pubSelectList_edit");
    var game_platform = document.getElementById("platSelectList_edit");
    var game_stores = document.getElementById("storesAvailableSelectList_edit");
    xhttp.open("POST", "/php/databaseinterface/editGame.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&game_id=" + game_id + "&game_name=" + game_name + "&release_date=" + game_date + "&game_rating=" + game_rating + "&publisher=" + game_publisher + "&game_platform=" + game_platform + "&game_stores=" + game_stores);
    }
}