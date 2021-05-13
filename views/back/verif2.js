function controlEv() {
    var i = 0;
  
    if (document.formajout.idEvent.value == "") {
      alert("saisir votre identifiant: ");
      i++;
    }
    if (document.formajout.partenaire.value == "") {
      alert("saisir votre partenaire : ");
      i++;
    }
    if (document.formajout.prime.value == "") {
      alert("verifier le prime : ");
      i++;
    }
    if (document.formajout.dd.value == "") {
      alert("saisir votre date de debut : ");
      i++;
    }
    if (document.formajout.df.value == "") {
      alert("saisir votre date de fin : ");
      i++;
    }
  }