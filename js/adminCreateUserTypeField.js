function userTypeSelected() {

    var createUserButton = document.getElementById('createUserButton');

    var user_type = document.getElementById("user_type").value;
    var pubNameLabel = document.getElementById('pub_name_label');
    var pubNameInput = document.getElementById('publisher_name');
    var pubDateLabel = document.getElementById('pub_date_est_label');
    var pubDateInput = document.getElementById('publisher_date_est');
    var pubHQLabel = document.getElementById('pub_hq_label');
    var pubHQInput = document.getElementById('publisher_hq');
    

    if (user_type == "Publisher") {

        pubNameLabel.innerHTML = "Publisher Name";
        pubNameInput.setAttribute("type", "text");
        pubNameInput.setAttribute("placeholder", "Publisher name");
        pubDateLabel.innerHTML = "Date est.";
        pubDateInput.setAttribute("type", "text");
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