<?php
include_once 'databaseconnect.php';
$gameID = $_POST['gameID'];
$sql = "SELECT Store_Mapping_store_id FROM Store_has_Game WHERE Store_Mapping_game_id = '$gameID';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$storeID = $row['Store_Mapping_store_id'];

$sql = "SELECT store_name FROM Stores WHERE idStores = '$storeID';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['store_info'][] = $row;
    }
    echo json_encode($r);
}
