$(document).ready(function () {
    $("#publisherTableSearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#pubSelectTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});