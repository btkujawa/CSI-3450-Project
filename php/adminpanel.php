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
    <script src="/js/createNewUser.js"></script>
    <script src="/js/createPublisher.js"></script>
    <script src="/js/createNewAdmin.js"></script>
    <script src="/js/createNewPlatform.js"></script>
    <script src="/js/createNewStore.js"></script>
    <script src="/js/adminCreateUserTypeField.js"></script>
    <script src="/js/loadAdminPanel.js"></script>
    <script src="/js/removeUser.js"></script>
    <script src="/js/filterUserList.js"></script>
    <script src="/js/showEditMenu.js"></script>
    <script src="/js/showCreateMenu.js"></script>
    <script src="/js/editUser.js"></script>
    <script src="/js/getGames.js"></script>
    <script src="/js/removeGame.js"></script>
    <script src="/js/editGame.js"></script>
    <title>Admin Panel</title>
</head>

<body style="background-color: #261447;" onload="loadAdminPanel()">
    <?php include 'navbar.php'; ?>
    <div class="container d-flex align-content-center flex-row flex-grow-1 rounded text-white-50 box-shadow" style="margin-top: 10px; padding: 5px; background-color: #7B9EBE;">
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="materialInline1" checked name="inlineMaterialRadiosExample" onclick="showCreateMenu()">
            <label class="form-check-label" for="materialInline1">Create</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="materialInline1" onclick="showEditMenu()" name="inlineMaterialRadiosExample">
            <label class="form-check-label" for="materialInline1">Edit</label>
        </div>
    </div>
    <div class="container d-flex flex-column flex-grow-1" style="margin-top: 10px; padding: 5px;">
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
                            <select class="form-control" id="storesAvailableSelectList" required>
                            </select>
                        </div>
                    </form>
                    <button class="btn btn-primary m-2" role="button" id="createGameButton" onclick="createNewGame() " style="background-color: #2DE2E6; color: #261447">Create New Game</button>
                </div>
            </div>
            <div class="container" style="margin-top: 10px; padding: 5px;" id="adminUserCreatorDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow p-3" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Create User</h4>
                    <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Username</label>
                                <input type="text" class="form-control" id="user_name" required placeholder="Username" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Password</label>
                                <input type="password" class="form-control" id="user_password" required placeholder="Password" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" id="user_type_label">User Type</label>
                                <select class="form-control" id="user_type" required onchange="userTypeSelected()" style="background-color: #E6F2F8;">
                                    <option>Standard User</option>
                                    <option>Publisher</option>
                                    <option>Admin</option>
                                </select>
                            </div>
                            <div class="form-group" id="publisherInputInfo">
                                <label for="formGroupExampleInput" id="pub_name_label"></label>
                                <input type="hidden" class="form-control" id="publisher_name" placeholder="" style="background-color: #E6F2F8;">

                                <label for="formGroupExampleInput" id="pub_date_est_label"></label>
                                <input type="hidden" class="form-control" id="publisher_date_est" placeholder="" style="background-color: #E6F2F8;">

                                <label for="formGroupExampleInput" id="pub_hq_label"></label>
                                <input type="hidden" class="form-control" id="publisher_hq" placeholder="" style="background-color: #E6F2F8;">
                            </div>
                            <button class="btn btn-primary" role="button" id="createUserButton" onclick="createNewUser() " style="background-color: #2DE2E6; color: #261447">Create New User</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 10px; padding: 5px;" id="adminPlatformCreatorDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow p-3" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Create Platform</h4>
                    <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Platform Name</label>
                                <input type="text" class="form-control" id="platform_name" required placeholder="Platform Name" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Release date</label>
                                <input type="date" class="form-control" id="platform_release_date" placeholder="Release date" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Manufacturer Name</label>
                                <input type="text" class="form-control" id="manufacturer_name" placeholder="Manufacturer Name" style="background-color: #E6F2F8;">
                            </div>
                            <button class="btn btn-primary" role="button" id="createPlatformButton" onclick="createNewPlatform() " style="background-color: #2DE2E6; color: #261447">Create New Platform</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 10px; padding: 5px;" id="adminStoreCreatorDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow p-3" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Create Store</h4>
                    <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Store Name</label>
                                <input type="text" class="form-control" id="store_name" required placeholder="Store Name" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Platform</label>
                                <select class="form-control" id="storePlatSelectList" required>
                                </select>
                            </div>
                            <button class="btn btn-primary" role="button" id="createStoreButton" onclick="createNewStore() " style="background-color: #2DE2E6; color: #261447">Create New Store</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <div class="container d-flex flex-row flex-grow-1" id="adminEditorDiv" style="margin-top: 10px; padding: 5px;">
            <div class="container" style="margin-top: 10px; padding: 5px;" id="adminUserRemoverDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Remove User</h4>
                    <p id="usersList"></p>
                    <input type="text" class="form-control" id="userTableSearch" placeholder="User">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Account Type</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody id="usersTable">
                        </tbody>
                    </table>
                    <button class="btn btn-primary m-2" role="button" id="getUsersListButton" onclick="getUsers() " style="background-color: #2DE2E6; color: #261447">Get All Users!!!</button>
                </div>
            </div>
            <div class="container" style="margin-top: 10px; padding: 5px; min-width: 250px" id="adminUserEditorDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Edit User</h4>
                    <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">User ID</label>
                                <input type="text" class="form-control" id="user_id_to_edit" required placeholder="User ID" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Username</label>
                                <input type="text" class="form-control" id="user_name_edit" placeholder="Username" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Password</label>
                                <input type="password" class="form-control" id="user_password_edit" placeholder="Password" style="background-color: #E6F2F8;">
                            </div>
                            <button class="btn btn-primary" role="button" id="editUserButton" onclick="editUser() " style="background-color: #2DE2E6; color: #261447">Edit User</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 10px; padding: 5px;" id="adminGameRemoverDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Remove Game</h4>
                    <p id="usersList"></p>
                    <input type="text" class="form-control" id="gameTableSearch" placeholder="Game">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Game ID</th>
                                <th>Game Name</th>
                                <th>Release Date</th>
                                <th>Game Publisher</th>
                                <th>Game Platform</th>
                                <th>Game Rating</th>
                                <th>Game Stores</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody id="gamesAdminTable">
                        </tbody>
                    </table>
                    <button class="btn btn-primary m-2" role="button" id="getUsersListButton" onclick="getGames() " style="background-color: #2DE2E6; color: #261447">Get All Games!!!</button>
                </div>
            </div>
            <div class="container" style="margin-top: 10px; padding: 5px; min-width: 250px" id="adminGameEditorDiv">
                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow p-3" style="background-color: #7B9EBE;">
                    <h4 style="font-family: Bungee-Regular;">Edit Game</h4>
                    <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Game ID</label>
                                <input type="text" class="form-control" id="game_id_to_edit" required placeholder="Game ID" style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Game name</label>
                                <input type="text" class="form-control" id="game_name_edit" placeholder="Game name" required style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Release date</label>
                                <input type="date" class="form-control" id="release_date_edit" placeholder="Release date" required style="background-color: #E6F2F8;">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Game rating</label>
                                <select class="form-control" id="game_rating_edit" required>
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
                                <select class="form-control" id="pubSelectList_edit" required>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Platform</label>
                                <select class="form-control" id="platSelectList_edit" required>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Stores Available</label>
                                <select multiple class="form-control" id="storesAvailableSelectList_edit" required>
                                </select>
                            </div>
                        </form>
                        <button class="btn btn-primary" role="button" id="editGameButton" onclick="editGame() " style="background-color: #2DE2E6; color: #261447">Edit Game</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>