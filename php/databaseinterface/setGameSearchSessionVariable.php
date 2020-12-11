<?php

session_start();

if (array_key_exists('game_name', $_POST)) {
    $_SESSION['gameSearched'] = $_POST['game_name'];
}