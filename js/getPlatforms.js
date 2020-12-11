function updatePlatTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.plat_list.length; i++) {
        var option = document.createElement("option");
        option.text = jsonData.plat_list[i].platform_name;
        var sel = table.options[table.selectedIndex];
        table.add(option, sel);
    }
    var option = document.createElement("option");
    var sel = table.options[table.selectedIndex];
    option.text = "None";
    table.add(option, sel);
}

function updateStorePlatTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.plat_list.length; i++) {
        var option = document.createElement("option");
        option.text = jsonData.plat_list[i].platform_name;
        var sel = table.options[table.selectedIndex];
        table.add(option, sel);
    }
    var option = document.createElement("option");
    var sel = table.options[table.selectedIndex];
    option.text = "None";
    table.add(option, sel);
}

function updateEditPlatTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.plat_list.length; i++) {
        var option = document.createElement("option");
        option.text = jsonData.plat_list[i].platform_name;
        var sel = table.options[table.selectedIndex];
        table.add(option, sel);
    }
    var option = document.createElement("option");
    var sel = table.options[table.selectedIndex];
    option.text = "None";
    table.add(option, sel);
}

function getPlatforms() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updatePlatTable("platSelectList", data);
            updateStorePlatTable("storePlatSelectList", data);
            updateEditPlatTable("platSelectList_edit", data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllPlatforms.php", true);
    xhttp.send();
}