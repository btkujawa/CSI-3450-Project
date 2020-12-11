<?php
include_once 'databaseconnect.php';
if (array_key_exists('platform_name', $_POST) && array_key_exists('platform_release_date', $_POST) && array_key_exists('manufacturer_name', $_POST)) {
    $platform_name = $_POST['platform_name'];
    $platform_release_date = $_POST['platform_release_date'];
    $manufacturer_name = $_POST['manufacturer_name'];
    $sql = "INSERT INTO Platforms (platform_name, platform_release_date, platform_manufacturer) VALUES ('$platform_name', '$platform_release_date', '$manufacturer_name');";
    mysqli_query($conn, $sql);
}
else if (array_key_exists('platform_name', $_POST) && array_key_exists('platform_release_date', $_POST)) {
    $platform_name = $_POST['platform_name'];
    $platform_release_date = $_POST['platform_release_date'];
    $sql = "INSERT INTO Platforms (platform_name, platform_release_date) VALUES ('$platform_name', '$platform_release_date');";
    mysqli_query($conn, $sql);
}
else if (array_key_exists('platform_name', $_POST) && array_key_exists('manufacturer_name', $_POST)) {
    $platform_name = $_POST['platform_name'];
    $manufacturer_name = $_POST['manufacturer_name'];
    $sql = "INSERT INTO Platforms (platform_name, platform_manufacturer) VALUES ('$platform_name', '$manufacturer_name');";
    mysqli_query($conn, $sql);
}
else if (array_key_exists('platform_name', $_POST)) {
    $platform_name = $_POST['platform_name'];
    $sql = "INSERT INTO Platforms (platform_name) VALUES ('$platform_name');";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}