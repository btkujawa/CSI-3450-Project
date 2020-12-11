<?php

session_start();

include_once 'databaseconnect.php';
if (array_key_exists('user_name', $_POST) && array_key_exists('user_password', $_POST)) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $sql = "SELECT user_password FROM Users WHERE username = '$user_name';";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $databasePassword = $row['user_password'];
    if ($user_password == $databasePassword) {
        $sql = "SELECT idUsers, username, user_type FROM Users WHERE username = '$user_name';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userid'] = $row['idUsers'];
        $_SESSION['username'] = $row['username'];
        if ($row['user_type'] == 0) {
            $_SESSION['adminSession'] == true;
        }
        echo json_encode(array("success" => "user logged in", "session" => $_SESSION));
    } else {
        echo json_encode(array("error" => "Invalid login provided."));
    }
} else {
    echo "Something Went Wrong With the Input";
}
