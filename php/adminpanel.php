<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '/php/bootstrapIncludes.php'; ?>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/js/getusers.js"></script>
    <script src="/js/createNewGame.js"></script>
    <script src="/js/createNewUser.js"></script>
    <script src="/js/createPublisher.js"></script>
    <script src="/js/createNewAdmin.js"></script>
    <script src="/js/publisherSearch.js"></script>
    <script src="/js/adminCreateUserTypeField.js"></script>
    <title>Admin Panel</title>
</head>

<body style="background-color: #261447;">
    <?php include 'navbar.php'; ?>
    <main role="main" class="container d-flex flex-row flex-grow-1" style="margin-top: 10px; padding: 5px;">
        <div class="container" style="margin-top: 10px; padding: 5px;" id="adminGameEditorDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Game name</label>
                        <input type="text" class="form-control" id="game_name" placeholder="Game name" required style="background-color: #E6F2F8;">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Release date</label>
                        <input type="text" class="form-control" id="release_date" placeholder="Release date" required style="background-color: #E6F2F8;">
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
                        <input type="text" class="form-control" id="publisherTableSearch" placeholder="Publisher" required style="background-color: #E6F2F8;">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Publisher Name</th>
                                    <th>Headquarters</th>
                                    <th>Est.</th>
                                </tr>
                            </thead>
                            <tbody id="pubSelectTable">
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@mail.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@greatstuff.com</td>
                                </tr>
                                <tr>
                                    <td>Anja</td>
                                    <td>Ravendale</td>
                                    <td>a_r@test.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                <button class="btn btn-primary" role="button" id="createGameButton" onclick="createNewGame() " style="background-color: #2DE2E6; color: #261447">Create New Game</button>
                <p id="createGame">test</p>
            </div>
        </div>
        <div class="container" style="margin-top: 10px; padding: 5px;" id="adminUserCreatorDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">

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
        <div class="container" style="margin-top: 10px; padding: 5px;" id="adminUserEditorDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">
                <p id="usersList"></p>
                <input type="text" class="form-control" id="userTableSearch" placeholder="User">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>|_|</th>
                            <th>Username</th>
                            <th>Account Type</th>
                        </tr>
                    </thead>
                    <tbody id="usersTable">
                    </tbody>
                </table>
                <button class="btn btn-primary" role="button" id="getUsersListButton" onclick="getUsers() " style="background-color: #2DE2E6; color: #261447">Get All Users!!!</button>
            </div>
        </div>
    </main>
</body>

</html>