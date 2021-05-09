function test() {
    var res = true;
    if (document.form_211202533002533.email.value == "") {
        alert("Veuillez taper votre email");
    }

    if (document.form_211202533002533.description.value == "") {
        alert("Veuillez taper votre description");
    } else {
        console.log("desc goood");
    }

    if (document.form_211202533002533.email.value.indexOf('@esprit.tn') == -1) {
        alert("Email incorrecte!");
    } else {
        console.log("Email goood");
    }
}