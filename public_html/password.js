function validate() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    if (pass1.length < 8) {
        alert("Your password is too short, it must be 8 characters or longer.")
    } else if (pass1 != pass2) {
        alert("Your passwords don't match")
    } else {
        alert("Access Granted")
    }
}