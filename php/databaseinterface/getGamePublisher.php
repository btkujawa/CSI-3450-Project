<?php
include_once 'databaseconnect.php';
$idUsers = $_POST['idUsers'];
$sql = "SELECT publisher_name FROM Publishers WHERE idUsers = '$idUsers';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['pub_name'][] = $row;
    }
    echo json_encode($r);
}