function updateStoresTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.stores_list.length; i++) {
        var option = document.createElement("option");
        option.text = jsonData.stores_list[i].store_name;
        var sel = table.options[table.selectedIndex];
        table.add(option, sel);
    }
    var option = document.createElement("option");
    var sel = table.options[table.selectedIndex];
    option.text = "None";
    table.add(option, sel);
}

function updateEditGameStoresTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.stores_list.length; i++) {
        var option = document.createElement("option");
        option.text = jsonData.stores_list[i].store_name;
        var sel = table.options[table.selectedIndex];
        table.add(option, sel);
    }
    var option = document.createElement("option");
    var sel = table.options[table.selectedIndex];
    option.text = "None";
    table.add(option, sel);
}

function getStores() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updateStoresTable("storesAvailableSelectList", data);
            updateEditGameStoresTable("storesAvailableSelectList_edit", data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllStores.php", true);
    xhttp.send();
}