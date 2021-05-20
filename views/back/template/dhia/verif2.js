function controlRec() {
    var i = 0;
  
    if (document.formajout.idReclamation.value == "") {
      alert("saisir votre identifiant: ");
      i++;
    }
    if (document.formajout.DateReclamation.value == "") {
      alert("saisir votre date de reclamation : ");
      i++;
    }
    if (document.formajout.CINClient.value == "") {
      alert("selectionner le CIN du client : ");
      i++;
    }
    if (document.formajout.Description.value == "") {
      alert("saisir votre description : ");
      i++;
    }
  }