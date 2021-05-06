<?php 

include 'C:/wamp/www/aouididi/controller/CarteC.php';
require_once 'C:/wamp/www/aouididi/model/Carte.php';

if(isset($_GET['idProduit'])){
	
	$produitC= new produitC();
	$produitC->supprimerproduit($_GET['idproduit']);
    header("location: afficher carte.php"); 

}
?>