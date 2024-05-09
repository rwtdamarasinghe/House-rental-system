function validation() {
    var Search = document.forms["form2"]["search1"].value;
    if (Search == "") {
        alert("No blank value allowed");
    }
}