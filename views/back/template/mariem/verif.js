function controlRec() {
  var i = 0;

  if (document.formajout.id.value == "") {
    alert("saisir votre identifiant: ");
    i++;
  }
  if (document.formajout.type.value == "") {
    alert("saisir votre type : ");
    i++;
  }
  if (document.formajout.nomC.value == "") {
    alert("saisir votre nom du chef: ");
    i++;
  }
  if (document.formajout.desc.value == "") {
    alert("saisir votre description: ");
    i++;
  }
}
