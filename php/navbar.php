<?php
session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/animations.css">
<link href="/assets/fontawesome/css/all.css" rel="stylesheet">
<nav class="navbar d-flex flex-row navbar-dark" style="background-color: #0D0221;">
    <div class="d-flex">
        <a class="title-brand" href="/index.php" id="logo">Game DB</a>
    </div>
    <div class=" d-flex justify-content-center flex-row flex-grow-1" id="centerNavbar">
        <div class="navbar-nav">
        </div>
    </div>
    <div class=" d-flex justify-content-right" id="rightNavbar">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<a class="nav-link" style="text-decoration: none; color: #FF6C11" href="/php/logout.php">Log out</a>';
            echo '<a class="nav-link" href="./php/userProfile.php" style="color: #FF6C11">User Profile</a>';
        }
        else {
            echo '<a class="nav-link" style="text-decoration: none; color: #FF6C11" href="/php/loginPage.php">Sign in</a>';  
            echo '<a class="nav-link" href="./php/accountCreation.php" style="color: #FF6C11">Sign up</a>';
            echo '<a class="nav-link" href="./php/adminLoginPage.php" style="color: #FF6C11">Admin sign in</a>';
        }
        ?>        
    </div>
</nav>