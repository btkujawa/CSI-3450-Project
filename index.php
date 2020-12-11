<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '/php/bootstrapIncludes.php'; ?>
    <script src="./js/getfiles.js"></script>
    <link rel="stylesheet" href="/css/animations.css">    
    <title>The Game DB</title>
</head>

<body style="background-color: #261447;">    
    <?php include 'php/navbar.php'; ?>
    <main role="main" class="container" style="margin-top: 10px; padding: 5px;">
        <div class="d-flex align-items-center text-white-50 bg-white rounded box-shadow">
            <h1> <a class="btn btn-primary" href="./php/adminLoginPage.php" role="button" style="background-color: #2DE2E6; color: #261447">Admin Panel</a>  </h1>
            <h1> <a class="btn btn-primary" href="./php/userProfile.php" role="button" style="background-color: #2DE2E6; color: #261447">User Profile</a>  </h1>
            <h1> <a class="btn btn-primary" href="./php/gamePage.php" role="button" style="background-color: #2DE2E6; color: #261447">Game Page</a>  </h1>
            <h1> <a class="btn btn-primary" href="./php/publisherPage.php" role="button" style="background-color: #2DE2E6; color: #261447">Publisher Page</a>  </h1>
        </div>
    </main>
</body>

</html>