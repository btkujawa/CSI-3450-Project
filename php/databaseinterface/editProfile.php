<?php
session_start();
include_once 'databaseconnect.php';
if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
    $idUsers = $_SESSION['userid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = hash('sha256', $password, false);
    $sql = "UPDATE Users SET username = '$username', user_password = '$password' WHERE idUsers = '$idUsers';";
    mysqli_query($conn, $sql);
}
elseif (array_key_exists('username', $_POST)) {
    $idUsers = $_SESSION['userid'];
    $username = $_POST['username'];
    $sql = "UPDATE Users SET username = '$username' WHERE idUsers = '$idUsers';";
    mysqli_query($conn, $sql);
}
elseif (array_key_exists('password', $_POST)) {
    $idUsers = $_SESSION['userid'];
    $password = $_POST['password'];
    $password = hash('sha256', $password, false);
    $sql = "UPDATE Users SET user_password = '$password' WHERE idUsers = '$idUsers';";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}