<?php
session_start();
include_once 'databaseconnect.php';
$gameID = $_POST['game_id'];
$sql = "SELECT game_name, game_publisher_id FROM Games WHERE idGame = '$gameID';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['games_list'][] = $row;
    }
    echo json_encode($r);
}
