<?php
session_start();
include_once 'databaseconnect.php';
if (array_key_exists('game_id', $_POST)) {
    $user_name = $_SESSION['username'];
    $game_id = $_POST['game_id'];
    $sql = "SELECT idUsers FROM Users WHERE username = '$user_name';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['idUsers'];
    $sql = "INSERT INTO Favorite_Games (favorite_games_user_id, favorite_games_game_id) VALUES ('$user_id', '$game_id');";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}