function updatePubTable(tableId, jsonData) {
    var table = document.getElementById(tableId);
    for (var i = 0; i < jsonData.pub_list.length; i++) {
        var option = document.createElement("option");
        option.text = jsonData.pub_list[i].publisher_name;
        var sel = table.options[table.selectedIndex];
        table.add(option, sel);
    }
    var option = document.createElement("option");
    option.text = "Unknown";
    var sel = table.options[table.selectedIndex];
    table.add(option, sel);
    option = document.createElement("option");
    option.text = "None";
    sel = table.options[table.selectedIndex];
    table.add(option, sel);
    option.text = "Not Listed but Known";
    sel = table.options[table.selectedIndex];
    table.add(option, sel);
}

function getPublishers() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            updatePubTable("pubSelectList", data);
        }
    };
    xhttp.open("GET", "../php/databaseinterface/getAllPublishers.php", true);
    xhttp.send();
}