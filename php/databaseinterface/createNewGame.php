<?php
include_once 'databaseconnect.php';
if (array_key_exists('game_name', $_POST) && array_key_exists('release_date', $_POST) &&  array_key_exists('game_rating', $_POST) &&  array_key_exists('publisher', $_POST) && array_key_exists('game_platform', $_POST) && array_key_exists('game_stores', $_POST)) {

    $game_name = $_POST['game_name'];
    $release_date = $_POST['release_date'];
    $game_rating = $_POST['game_rating'];
    $publisher = $_POST['publisher'];
    $sql = "SELECT idUsers FROM Publishers WHERE publisher_name = '$publisher';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $publisherID = $row['idUsers'];
    $platform = $_POST['game_platform'];
    $store = $_POST['game_stores'];

    $sql = "INSERT INTO Games (game_name, game_release_date, game_rating, game_publisher_id) VALUES ('$game_name', '$release_date', '$game_rating', '$publisherID');";
    mysqli_query($conn, $sql);

    $sql = "SELECT idGame FROM Games WHERE game_name = '$game_name';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $gameID = $row['idGame'];
    
    $sql = "SELECT idPlatform FROM Platforms WHERE platform_name = '$platform';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $platformID = $row['idPlatform'];
    $sql = "INSERT INTO Platform_has_Game (Platform_Mapping_game_id, Platform_Mapping_platform_id) VALUES ('$gameID', '$platformID');";
    mysqli_query($conn, $sql);

    $sql = "SELECT idStores FROM Stores WHERE store_name = '$store';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $storeID = $row['idStores'];
    $sql = "INSERT INTO Store_has_Game (Store_Mapping_game_id, Store_Mapping_store_id) VALUES ('$gameID', '$storeID');";
    mysqli_query($conn, $sql);

}
else {
    echo "Something Went Wrong With the Input";
}