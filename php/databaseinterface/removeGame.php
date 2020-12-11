<?php
include_once 'databaseconnect.php';
if (array_key_exists('idGame', $_POST)) {
    $idGame = $_POST['idGame'];
    $sql = "DELETE FROM Games WHERE idGame = '$idGame';";
    mysqli_query($conn, $sql);
    $sql = "DELETE FROM Platform_has_Game WHERE Platform_Mapping_game_id = '$idGame';";
    mysqli_query($conn, $sql);
    $sql = "DELETE FROM Store_has_Game WHERE Store_Mapping_game_id = '$idGame';";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}