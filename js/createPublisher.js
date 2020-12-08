function createNewPublisher() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("createUserP").innerHTML = this.responseText;
        }
    };
    var user_name = document.getElementById("user_name").value;
    var user_password = document.getElementById("user_password").value;
    var user_type = document.getElementById("user_type").value;
    var publisherName = document.getElementById("publisher_name").value;
    var publisherDateEst = document.getElementById("publisher_date_est").value;
    var publisherHQ = document.getElementById("publisher_hq").value;
    if (user_name == "" || user_name == " " || user_name == "  ") {
        document.getElementById("user_name").placeholder = "Please input a valid user name";
    } else if (user_password == "" || user_password == " " || user_password == "  ") {
        document.getElementById("user_password").placeholder = "Please input a valid password";
    } else if (user_password == "") {
        document.getElementById("user_type_label").innerHTML = "Please select a user type";
    } else {
        xhttp.open("POST", "/php/databaseinterface/createPublisher.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("&user_name=" + user_name + "&user_password=" + user_password + "&user_type=" + user_type + "&publisher_name=" + publisherName + "&publisher_date_est=" + publisherDateEst + "&publisher_hq=" + publisherHQ);
    }
}