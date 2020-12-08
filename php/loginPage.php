<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animations.css">
    <script src="/js/loginUser.js"></script>
    <title>Sign In</title>
</head>

<body class="text-center" style="background-color: #241734;">
    <div class="d-flex h-75">
        <div class="container d-flex flex-column justify-content-center align-items-center" style="margin-top: 10px; padding: 5px;" id="createUserDiv">
            <a class="title-brand" href="/index.php" id="logo" style="font-size: xx-large;">Game DB</a>
            <div class="d-flex align-items-center flex-column flex-grow-1 pl-5 pr-5 pt-3 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="user_name" placeholder="Username" required style="background-color: #E6F2F8;">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="user_password" placeholder="Password" required style="background-color: #E6F2F8;">
                        </div>
                        <button class="btn btn-primary" type="button" role="button" id="createUserButton" onclick="loginUser() " style="background-color: #2DE2E6; color: #261447">Sign up</button>
                </div>
                <h3 class="h3 mb-3 font-weight-normal" id="createUserP"></h3>
            </div>
        </div>
    </div>
</body>

</html>