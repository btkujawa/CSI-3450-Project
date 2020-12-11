function createNewPlatform() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        }
    };
    var platform_name = document.getElementById("platform_name").value;
    var platform_release_date = document.getElementById("platform_release_date").value;
    var manufacturer_name = document.getElementById("manufacturer_name").value;

    xhttp.open("POST", "/php/databaseinterface/createNewPlatform.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    if (platform_release_date == "" && manufacturer_name == "") {
        xhttp.send("&platform_name=" + platform_name);
    }
    else if (platform_release_date == "") {
        xhttp.send("&platform_name=" + platform_name + "&manufacturer_name=" + manufacturer_name);
    }
    if (manufacturer_name == "") {
        xhttp.send("&platform_name=" + platform_name + "&platform_release_date=" + platform_release_date);
    }
    else {
        xhttp.send("&platform_name=" + platform_name + "&platform_release_date=" + platform_release_date + "&manufacturer_name=" + manufacturer_name);
    }

}