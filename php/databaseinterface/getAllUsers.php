<?php
include_once 'databaseconnect.php';
$sql = "SELECT idUsers, username, user_type FROM Users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['user_list'][] = $row;
    }
    echo json_encode($r);
}