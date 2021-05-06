<?php 

include 'C:/wamp/www/aouididi/controller/ClientC.php';
require_once 'C:/wamp/www/aouididi/model/Client.php';

if(isset($_GET['idPromo'])){
	
	$promotionC= new promotionC();
	$promotionC->supprimerClient($_GET['idPromo']);
    header("location: afficher client.php"); 

}
?>