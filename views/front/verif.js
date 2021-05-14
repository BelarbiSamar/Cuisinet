function test() {
    var i = 0;
  
    if (document.formajout.idLivraison.value == "") {
      alert("saisir votre id livraison : ");
      i++;
    }
    if (document.formajout.idCommande.value == "") {
      alert("saisir votre id commande : ");
      i++;
    }
    if (document.formajout.idLivreur.value == "") {
      alert("saisir votre daid livreur : ");
      i++;
    }
    if (document.formajout.adresseLivraison.value == "") {
      alert("saisir votre adresse du livraison : ");
      i++;
    }
    if (document.formajout.dureeLivraison.value == "") {
      alert("saisir votre duree de  livraison : ");
      i++;
    }
    if (document.formajout.idClient.value == "") {
      alert("saisir votre id client : ");
      i++;
    }
  }