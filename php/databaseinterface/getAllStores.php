<?php
include_once 'databaseconnect.php';

$sql = "SELECT store_name FROM Stores;";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['stores_list'][] = $row;
    }
    echo json_encode($r);
}
