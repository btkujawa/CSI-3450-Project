<?php
include_once 'databaseconnect.php';
$sql = "SELECT publisher_name, publisher_date_established, publisher_headquarters FROM Publishers;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['pub_list'][] = $row;
    }
    echo json_encode($r);
}