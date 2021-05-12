function controlRep() {
  var i = 0;

  if (document.formajout.idReparation.value == "") {
    alert("saisir votre identifiant: ");
    i++;
  }
  if (document.formajout.delai_intervention.value == "") {
    alert("saisir votre date d'intervention : ");
    i++;
  }
}
