<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '/php/bootstrapIncludes.php'; ?>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/js/getusers.js"></script>
    <script src="/js/createNewGame.js"></script>
    <script src="/js/createNewUser.js"></script>
    <script src="/js/publisherSearch.js"></script>
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
                        <input type="text" class="form-control" id="game_name" placeholder="Game name" required="" style="background-color: #E6F2F8;">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Release date</label>
                        <input type="text" class="form-control" id="release_date" placeholder="Release date" required="" style="background-color: #E6F2F8;">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Game rating</label>
                        <select multiple class="form-control" id="game_rating" required="">
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
                        <input type="text" class="form-control" id="publisherTableSearch" placeholder="Publisher" required="" style="background-color: #E6F2F8;">
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
        <div class="container" style="margin-top: 10px; padding: 5px;" id="adminUserEditorDiv">
            <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow" style="background-color: #7B9EBE;">

                <div class="d-flex align-items-center flex-column flex-grow-1 text-white-50 rounded box-shadow">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="user_name" placeholder="Username" style="background-color: #E6F2F8;">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="user_password" placeholder="Password" style="background-color: #E6F2F8;">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2" id="user_type_label">User Type</label>
                            <select multiple class="form-control" id="user_type" style="background-color: #E6F2F8;">
                                <option>Standard User</option>
                                <option>Publisher</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" role="button" id="createUserButton" onclick="createNewUser() " style="background-color: #2DE2E6; color: #261447">Create New User</button>
                    </form>
                    <p id="usersList"></p>
                    <input type="text" class="form-control" id="userTableSearch" placeholder="User">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
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
        </div>
    </main>
</body>

</html>