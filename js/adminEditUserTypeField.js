function userTypeEditSelected() {

    var createUserButton = document.getElementById('createUserButton');

    var user_type = document.getElementById("user_type_edit").value;
    var pubNameLabel = document.getElementById('pub_name_label_edit');
    var pubNameInput = document.getElementById('publisher_name_edit');
    var pubDateLabel = document.getElementById('pub_date_est_label_edit');
    var pubDateInput = document.getElementById('publisher_date_est_edit');
    var pubHQLabel = document.getElementById('pub_hq_label_edit');
    var pubHQInput = document.getElementById('publisher_hq_edit');
    

    if (user_type == "Publisher") {

        pubNameLabel.innerHTML = "Publisher Name";
        pubNameInput.setAttribute("type", "text");
        pubNameInput.setAttribute("placeholder", "Publisher name");
        pubDateLabel.innerHTML = "Date est.";
        pubDateInput.setAttribute("type", "date");
        pubDateInput.setAttribute("placeholder", "YYYY-MM-DD");
        pubHQLabel.innerHTML = "Publisher Headquarters";
        pubHQInput.setAttribute("type", "text");
        pubHQInput.setAttribute("placeholder", "Publisher Headquarters");
        createUserButton.setAttribute("onclick", "createNewPublisher()");
    } else if (user_type == "Admin") {
        pubNameLabel.innerHTML = "";
        pubNameInput.setAttribute("type", "hidden");
        pubNameInput.setAttribute("placeholder", "");
        pubDateLabel.innerHTML = "";
        pubDateInput.setAttribute("type", "hidden");
        pubDateInput.setAttribute("placeholder", "");
        pubHQLabel.innerHTML = "";
        pubHQInput.setAttribute("type", "hidden");
        pubHQInput.setAttribute("placeholder", "");
        createUserButton.setAttribute("onclick", "createNewAdmin()");
    } else if (user_type == "Standard User") {
        pubNameLabel.innerHTML = "";
        pubNameInput.setAttribute("type", "hidden");
        pubNameInput.setAttribute("placeholder", "");
        pubDateLabel.innerHTML = "";
        pubDateInput.setAttribute("type", "hidden");
        pubDateInput.setAttribute("placeholder", "");
        pubHQLabel.innerHTML = "";
        pubHQInput.setAttribute("type", "hidden");
        pubHQInput.setAttribute("placeholder", "");
        createUserButton.setAttribute("onclick", "createNewUser()");
    }
}