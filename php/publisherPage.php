<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/js/getusers.js"></script>
    <script src="/js/getPublishers.js"></script>
    <script src="/js/getPlatforms.js"></script>
    <script src="/js/getStores.js"></script>
    <script src="/js/createNewGame.js"></script>
    <script src="/js/editUser.js"></script>
    <script src="/js/loadPublisherPage.js"></script>
    <title>Admin Panel</title>
</head>

<body style="background-color: #261447;" onload="loadPublisherPage()">
    <?php include 'navbar.php'; ?>
    <main class="container d-flex flex-row flex-grow-1" id="adminCreatorDiv" style="margin-top: 10px; padding: 5px;">
        <div class="container" style="margin-top: 10px; padding: 5px;" id="adminGameEditorDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow p-3" style="background-color: #7B9EBE;">
                <h4 style="font-family: Bungee-Regular;">Create Game</h4>
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Game name</label>
                        <input type="text" class="form-control" id="game_name" placeholder="Game name" required style="background-color: #E6F2F8;">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Release date</label>
                        <input type="date" class="form-control" id="release_date" placeholder="Release date" required style="background-color: #E6F2F8;">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Game rating</label>
                        <select class="form-control" id="game_rating" required>
                            <option>E</option>
                            <option>E10</option>
                            <option>T</option>
                            <option>M</option>
                            <option>A(18+)</option>
                            <option>Rating Pending</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Publisher</label>
                        <select class="form-control" id="pubSelectList" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Platform</label>
                        <select class="form-control" id="platSelectList" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Stores Available</label>
                        <select multiple class="form-control" id="storesAvailableSelectList" required>
                        </select>
                    </div>
                </form>
                <button class="btn btn-primary m-2" role="button" id="createGameButton" onclick="createNewGame() " style="background-color: #2DE2E6; color: #261447">Create New Game</button>
            </div>
        </div>
    </main>
</body>

</html>