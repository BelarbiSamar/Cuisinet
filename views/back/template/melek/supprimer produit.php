<?php 

include 'C:/xampp/htdocs/client/controller/ProduitC.php';
include_once 'C:/xampp/htdocs/client/model/Produit.php';

if(isset($_GET['idProduit'])){
	
	$produitC= new produitC();
	$produitC->supprimerproduit($_GET['idProduit']);
    header("location: afficher produit.php"); 

}
?>