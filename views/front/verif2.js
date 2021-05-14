function test() {
    var i = 0;
  
    if (document.formajout.idRelais.value == "") {
      alert("saisir l'id du relais: ");
      i++;
    }
    if (document.formajout.adresseRel.value == "") {
      alert("saisir votre adresse relais : ");
      i++;
    }
    if (document.formajout.idLivreur.value == "") {
      alert("saisir votre id livreur : ");
      i++;
    }
    if (document.formajout.etatRel.value == "") {
      alert("saisir votre etat relai : ");
      i++;
    }
    if (document.formajout.horaire.value == "") {
      alert("saisir votre horaire : ");
      i++;
    }
    if (document.formajout.conges.value == "") {
      alert("saisir votre conges : ");
      i++;
    }
  }