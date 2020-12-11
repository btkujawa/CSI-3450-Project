<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '/php/bootstrapIncludes.php'; ?>
    <link rel="stylesheet" href="/css/animations.css">
    <script src="/js/populateGamePage.js"></script>
    <title>The Game DB</title>
</head>

<?php
if (isset($_SESSION['gameSearched'])) {
    echo '<body style="background-color: #261447;" onload="populateGamePage('."'" .$_SESSION['gameSearched']."'" .')">';
} else {
    echo '<body style="background-color: #261447;">';
}
?>
<?php include 'navbar.php'; ?>
<main role="main" class="container d-flex flex-row flex-grow-1 align-items-center" style="margin-top: 10px; padding: 5px;">
    <div class="container" style="margin-top: 10px; padding: 5px;">
        <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Release Date</th>
                        <th>Rating</th>
                        <th>Publisher</th>
                    </tr>
                </thead>
                <tbody id="gamePageTable">
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>

</html>