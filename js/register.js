function validation() {
    var UserName = document.forms["form1"]["uname"].value;
    var Email = document.forms["form1"]["email"].value;
    var Password = document.forms["form1"]["pass"].value.length;
    var confirmPassword = document.forms["form1"]["conpass"].value.length;


    if (UserName == "") {
        alert("Please Enter Your User Name");
    }
    if (Email == "") {
        alert("Please Enter Your Email");

    }
    if (Password != 8) {
        alert("Enter Valid Password");
    }
    if (document.forms["form1"]["conpass"].value != document.forms["form1"]["pass"].value) {
        alert("Password Do not match");
    }
}