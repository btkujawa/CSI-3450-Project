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
    <title>The Game DB</title>
</head>

<body style="background-color: #261447;">
    <?php include 'navbar.php'; ?>
    <main role="main" class="container d-flex flex-column flex-grow-1 align-items-center" style="margin-top: 10px; padding: 5px;">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<h1 style="color: #FF3864; font-family: Bungee-Regular;"> Welcome ' . $_SESSION['username'] . '</h1>';
        }
        ?>
        <div class="container" style="margin-top: 10px; padding: 5px;">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <div class="form-group d-flex align-items-center pt-3">
                    <input type="text" class="form-control" id="game_name" placeholder="Game name" required style="background-color: #E6F2F8;">
                    <button class="btn btn-primary" type="button" role="button" id="getUsersListButton" onclick="gameSearch() " style="background-color: #2DE2E6; color: #261447">Search</button>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Release Date</th>
                            <th>Rating</th>
                            <th>Publisher</th>
                        </tr>
                    </thead>
                    <tbody id="gamesTable">
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>