<?php
session_start();
if (!(isset($_SESSION['username']))) {
    header("Location:/php/loginPage.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '/php/bootstrapIncludes.php'; ?>
    <link rel="stylesheet" href="/css/animations.css">
    <script src="/js/gameSearch.js"></script>
    <script src="/js/favoriteGame.js"></script>
    <script src="/js/showFavoriteGames.js"></script>
    <script src="/js/showSearchMenu.js"></script>
    <script src="/js/showFavoritesMenu.js"></script>
    <script src="/js/showEditProfileMenu.js"></script>
    <script src="/js/editProfile.js"></script>
    <title>The Game DB</title>
</head>

<body style="background-color: #261447;" onload="showSearchMenu()">
    <?php include 'navbar.php'; ?>
    <main role="main" class="container d-flex flex-column flex-grow-1 align-items-center" style="margin-top: 10px; padding: 5px;">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<h1 style="color: #FF3864; font-family: Bungee-Regular;"> Welcome ' . $_SESSION['username'] . '</h1>';
        }
        ?>
        <div class="container d-flex align-content-center flex-row flex-grow-1 rounded text-white-50 box-shadow" style="margin-top: 10px; padding: 5px; background-color: #7B9EBE;">
            <div class="form-check form-check-inline">
                <input type="radio" checked class="form-check-input" id="materialInline1" checked name="inlineMaterialRadiosExample" onclick="showSearchMenu()">
                <label class="form-check-label" for="materialInline1">Search</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="materialInline1" onclick="showFavoritesMenu()" name="inlineMaterialRadiosExample">
                <label class="form-check-label" for="materialInline1">Favorites</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="materialInline1" onclick="showEditProfileMenu()" name="inlineMaterialRadiosExample">
                <label class="form-check-label" for="materialInline1">Edit Profile</label>
            </div>
        </div>
        <div class="container" style="margin-top: 10px; padding: 5px;" id="userProfileGameSearchDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <h4 style="font-family: Bungee-Regular;">Search</h4>
                <div class="form-group d-flex align-items-center pt-3">
                    <input type="text" class="form-control" id="game_name" placeholder="Game name" required style="background-color: #E6F2F8;">
                    <button class="btn btn-primary" type="button" role="button" id="getUsersListButton" onclick="gameSearch() " style="background-color: #2DE2E6; color: #261447">Search</button>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Publisher</th>
                            <th>Favorite</th>
                        </tr>
                    </thead>
                    <tbody id="gamesTable">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container" style="margin-top: 10px; padding: 5px;" id="userProfileGameFavoritesDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <h4 style="font-family: Bungee-Regular;">Favorites</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Publisher</th>
                            <th>Favorite</th>
                        </tr>
                    </thead>
                    <tbody id="favoriteGamesTable">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container" style="margin-top: 10px; padding: 5px;" id="editUserProfileDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="user_name_edit" placeholder="Username" style="background-color: #E6F2F8;">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="user_password_edit" placeholder="Password" style="background-color: #E6F2F8;">
                        </div>
                        <button class="btn btn-primary" role="button" id="editUserButton" onclick="editProfile() " style="background-color: #2DE2E6; color: #261447">Edit Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>