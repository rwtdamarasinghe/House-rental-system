function validation() {
    var UserName = document.forms["form1"]["name"].value;
    var Email = document.forms["form1"]["email"].value;
    var Textarea = document.forms["form1"]["text"].value;


    if (UserName == "") {
        alert("Please Enter Your User Name");
    }
    if (Email == "") {
        alert("Please Enter Your Email");

    }
    if (Textarea == "") {
        alert("Enter Your Message");
    }

}