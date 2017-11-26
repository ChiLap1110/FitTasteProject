function myFunction() {
    var x = document.getElementById("Topnav");
    if (x.className === "navigation") {
        x.className += " responsive";
    } else {
        x.className = "navigation";
    }
}