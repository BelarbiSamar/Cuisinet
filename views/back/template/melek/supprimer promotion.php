<?php 

include 'C:/xampp/htdocs/client/controller/ProduitC.php';
include_once 'C:/xampp/htdocs/client/model/Produit.php';

if(isset($_GET['idPromo'])){
	
	$promotionC= new promotionC();
	$promotionC->supprimerClient($_GET['idPromo']);
    header("location: afficher promotion.php"); 

}
?>