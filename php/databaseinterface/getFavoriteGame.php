<?php
session_start();
include_once 'databaseconnect.php';
$user_name = $_SESSION['username'];
$game_id = $_POST['game_id'];
$sql = "SELECT idUsers FROM Users WHERE username = '$user_name';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$user_id = $row['idUsers'];
$sql = "SELECT favorite_games_game_id FROM Favorite_Games WHERE favorite_games_user_id = $user_id;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['gameID_list'][] = $row;
    }
    echo json_encode($r);
}
