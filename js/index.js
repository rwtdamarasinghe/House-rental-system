const submit = document.querySelector("#change");


submit.onclick = function() {
    const cvn = document.querySelector("#cvn").value;
    const date = document.querySelector("#date").value;
    const form = document.querySelector("#form");

    if (cvn.length === 3 && date) {
        form.submit()
    } else if (cvn.length !== 3) {
        alert("Invalid CVN")
    } else if (!date) {
        alert("Invalid Date")
    }
}