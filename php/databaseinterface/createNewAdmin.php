<?php
include_once 'databaseconnect.php';
if (array_key_exists('user_name', $_POST) && array_key_exists('user_password', $_POST) &&  array_key_exists('user_type', $_POST)) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_password = hash('sha256', $user_password, false);
    $user_type = $_POST['user_type'];

    if ($user_type == 'Admin') {
        $user_type = 0;
    }
    elseif ($user_type == 'Publisher') {
        $user_type = 2;
    }
    else {
        $user_type = 1;
    }
    $creation_date = $timestamp = date('Y-m-d H:i:s');
    $sql = "INSERT INTO Users (username, creation_date, user_type, user_password) VALUES ('$user_name', '$creation_date', '$user_type', '$user_password');";
    mysqli_query($conn, $sql);
    $sql = "SELECT idUsers FROM Users WHERE username = '$user_name';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['idUsers'];
    $sql = "INSERT INTO Admin_List (idUsers) VALUES ('$userid');";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}