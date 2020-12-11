<?php
include_once 'databaseconnect.php';
if (array_key_exists('idUsers', $_POST)) {
    $idUsers = $_POST['idUsers'];
    $sql = "DELETE FROM Users WHERE idUsers = '$idUsers';";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}