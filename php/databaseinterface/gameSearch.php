<?php
include_once 'databaseconnect.php';

    $gameName = $_POST['game_name'];
    $sql = "SELECT * FROM Games WHERE game_name = '$gameName';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $r = array();
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $r['game_list'][] = $row;
        }
        echo json_encode($r);
    }
