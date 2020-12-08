<?php

session_start();

include_once 'databaseconnect.php';
if (array_key_exists('user_name', $_POST) && array_key_exists('user_password', $_POST)) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_password = hash('sha256', $user_password, false);
    $sql = "SELECT user_password FROM Users WHERE username = '$user_name';";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $databasePassword = hash('sha256', $row['user_password'], false);
    if ($user_password == $databasePassword) {
        $sql = "SELECT idUsers, username FROM Users WHERE username = '$user_name';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userid'] = $row['idUsers'];
        $_SESSION['username'] = $row['username'];
        echo json_encode(array("success" => "user logged in", "session" => $_SESSION));
    } 
    else {
        echo json_encode(array("error" => "Invalid login provided."));
    }
} 
else {
    echo "Something Went Wrong With the Input";
}
