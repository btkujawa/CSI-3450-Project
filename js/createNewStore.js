function createNewStore() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {}
    };
    var store_name = document.getElementById("store_name").value;
    var store_platform_name = document.getElementById("storePlatSelectList").value;

    xhttp.open("POST", "/php/databaseinterface/createStore.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&store_name=" + store_name + "&store_platform_name=" + store_platform_name);

}