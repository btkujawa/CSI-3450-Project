function getfiles()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("testp").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../php/getfiles.php", true);
    xhttp.send();
}