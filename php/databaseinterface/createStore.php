<?php
include_once 'databaseconnect.php';
if (array_key_exists('store_name', $_POST) && array_key_exists('store_platform_name', $_POST)) {
    $store_name = $_POST['store_name'];
    $platform_name = $_POST['store_platform_name'];

    $sql = "SELECT idPlatform FROM Platforms WHERE platform_name = '$platform_name';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $idPlatform = $row['idPlatform'];

    $sql = "INSERT INTO Stores (store_name, stores_platform_id) VALUES ('$store_name', '$idPlatform');";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}