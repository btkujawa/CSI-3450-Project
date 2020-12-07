<?php
include_once 'databaseconnect.php';
if (array_key_exists('game_name', $_POST) && array_key_exists('release_date', $_POST) &&  array_key_exists('game_rating', $_POST) &&  array_key_exists('publisher', $_POST)) {

    $game_name = $_POST['game_name'];
    $release_date = $_POST['release_date'];
    $game_rating = $_POST['game_rating'];
    $publisher = $_POST['publisher'];
    
    $sql = "INSERT INTO Games (game_name, game_release_date, game_rating, game_publisher_id) VALUES ($game_name, $release_date, $game_rating, $publisher)";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}