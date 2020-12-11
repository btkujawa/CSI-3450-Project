<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '/php/bootstrapIncludes.php'; ?>
    <script src="./js/getfiles.js"></script>
    <script src="./js/gameSearchNotLoggedIn.js"></script>
    <link rel="stylesheet" href="/css/animations.css">
    <title>The Game DB</title>
</head>

<body style="background-color: #261447;">
    <?php include 'php/navbar.php'; ?>
    <main role="main" class="container" style="margin-top: 10px; padding: 5px;">
        <div class="container d-flex flex-column flex-grow-1 align-items-center">
            <h1 style="color: #FF3864; font-family: Bungee-Regular;">Welcome to GameDB</h1>
        </div>
        <div class="container" style="margin-top: 10px; padding: 5px;" id="userProfileGameSearchDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <h4 style="font-family: Bungee-Regular;">Search</h4>
                <div class="form-group d-flex align-items-center pt-3">
                    <input type="text" class="form-control" id="game_name" placeholder="Game name" required style="background-color: #E6F2F8;">
                    <button class="btn btn-primary" type="button" role="button" id="getUsersListButton" onclick="gameSearchNotLoggedIn() " style="background-color: #2DE2E6; color: #261447">Search</button>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Publisher</th>
                        </tr>
                    </thead>
                    <tbody id="gamesNoUserTable">
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>