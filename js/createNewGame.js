function createNewGame() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("game_name").value = "";
            document.getElementById("release_date").value = "";
            document.getElementById("game_rating").value = "";
            document.getElementById("pubSelectList").value = "";
            document.getElementById("platSelectList").value = "";
        }
    };
    var game_name = document.getElementById("game_name").value;
    var release_date = document.getElementById("release_date").value;
    var game_rating = document.getElementById("game_rating").value;
    var publisher = document.getElementById("pubSelectList").value;
    var platform = document.getElementById("platSelectList").value;
    var store = document.getElementById("storesAvailableSelectList").value;
    xhttp.open("POST", "../php/databaseinterface/createNewGame.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&game_name=" + game_name + "&release_date=" + release_date + "&game_rating=" + game_rating + "&publisher=" + publisher + "&game_platform=" + platform + "&game_stores=" + store);
}