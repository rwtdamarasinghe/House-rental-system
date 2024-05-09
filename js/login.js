function validation() {
    var userName = document.forms["loginForm"]["uName"].value.length;
    var password = document.forms["loginForm"]["uPass"].value.length;
    if (userName < 5) {
        alert("Pleace Enter valid user Name");
    }
    if (password != 8) {
        alert("Enter valid password");
    }
    if (isNaN(document.forms["loginForm"]["uPass"].value)) {
        alert("Enter Numeric value only");
    }
}