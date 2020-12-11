<?php
include_once 'databaseconnect.php';
$gameID = $_POST['gameID'];
$sql = "SELECT Platform_Mapping_platform_id FROM Platform_has_Game WHERE Platform_Mapping_game_id = '$gameID';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$platformID = $row['Platform_Mapping_platform_id'];

$sql = "SELECT platform_name FROM Platforms WHERE idPlatform = '$platformID';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$r = array();
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $r['plat_name'][] = $row;
    }
    echo json_encode($r);
}
