<?php
include_once 'databaseconnect.php';
if (array_key_exists('user_name', $_POST) && array_key_exists('user_password', $_POST)) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_type = 1;
    $creation_date = $timestamp = date('Y-m-d H:i:s');
    echo $user_name.$creation_date.$user_type.$user_password;
    $sql = "INSERT INTO Users (username, creation_date, user_type, user_password) VALUES ('$user_name', '$creation_date', '$user_type', '$user_password');";
    mysqli_query($conn, $sql);
}
else {
    echo "Something Went Wrong With the Input";
}