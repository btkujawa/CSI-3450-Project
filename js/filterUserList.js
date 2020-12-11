$(document).ready(function () {
    $("#userTableSearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#usersTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});