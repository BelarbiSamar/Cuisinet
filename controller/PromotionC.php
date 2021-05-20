<?php
include "C:/xampp/htdocs/client/config.php";
require_once 'C:/xampp/htdocs/client/model/Promotion.php';

class promotionC{

    function ajouterpromotion($promotion){
       
        $sql="insert into promotion (idPromo, idProduit, dureePromo, pourcentage, idCarte)
        values (idPromo, idProduit, dureePromo, pourcentage, idCarte)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $idPromo=$promotion->getidPromo();
		    $idProduit=$promotion->getidProduit();
		    $dureePromo=$promotion->getdureePromo();
            $pourcentage=$promotion->getpourcentage();
            $idCarte=$promotion->getidCarte();
           



		$query->bindValue(':idPromo',$idPromo);
		$query->bindValue(':idProduit',$idProduit);
		$query->bindValue(':dureePromo',$dureePromo);
		$query->bindValue(':pourcentage',$pourcentage);
		$query->bindValue(':idCarte',$idCarte);
		
		
        $query->execute();
            
        }
        catch(Exception $e){
            echo 'Erreur: ajouter promotion' .$e->getMessage();

        }



    }
 





    function modifierpromotion($idPromo){
                  $promotion=new promotion;         
            $sql='UPDATE promotion SET
            idPromo = :idPromo,  idProduit = :idProduit,   dureePromo = :dureePromo,    pourcentage = :pourcentage,     idCarte = :idCarte
           
            WHERE idPromo = :idPromo';
		$db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $idPromo=$_POST['idPromo'];
		    $idProduit=$_POST['idProduit'];
		    $dureePromo=$_POST['dureePromo'];
            $pourcentage=$_POST['pourcentage'];
            $idCarte=$_POST['idCarte'];
		$query->bindValue(':idPromo',$idPromo);
		$query->bindValue(':idProduit',$idProduit);
		$query->bindValue(':dureePromo',$dureePromo);
		$query->bindValue(':pourcentage',$pourcentage);
		$query->bindValue(':idCarte',$idCarte);
	
		
        $query->execute();
        } catch (PDOException $e) {
        $e->getMessage();
        }
        }



        function recupererClient($idPromo){
            $sql="SELECT * from promotion where idPromo='$idPromo'";
            $db = config::getConnexion();
            try{
            $query=$db->prepare($sql);
            $query->execute();
            
            $Clients=$query->fetch();
            return $Clients;
            }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
            }
            
function afficherpromotion(){

    $sql="SELECT * FROM promotion";
    $db = config::getConnexion();
    try{
    $liste = $db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }





    function supprimerClient($idPromo){
        $sql="DELETE FROM promotion WHERE idPromo= :idPromo";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idPromo',$idPromo);
        try{
        $req->execute();
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }

        function chercherClient($chercher,$champs) {
            $db=config::getConnexion();
            $sql="select * from promotion where $champs like '%$chercher%'  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherclient: '.$e->getMessage());
    
            }
        }






        function TrierClient($champs,$order) {
            $db=config::getConnexion();
            $sql="select * from promotion order By $champs $order  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherclient: '.$e->getMessage());
    
            }
        }





}
?>