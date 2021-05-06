<?php
include "C:/wamp/www/aouididi/config.php";
require_once 'C:/wamp/www/aouididi/model/Client.php';

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
 





    function modifierp($id){
                  $clients=new Client;         
            $sql='UPDATE Clients SET
            cin = :cin,  nom = :nom,   prenom = :prenom,    email = :email,     adresse = :adresse,
            dateNaiss = :dateNaiss
            WHERE id = :id';
		$db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $id=$_POST['id'];
		    $cin=$_POST['cin'];
		    $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $adresse=$_POST['adresse'];
            $dateNaiss=$_POST['dateNaiss'];
		$query->bindValue(':id',$id);
		$query->bindValue(':cin',$cin);
		$query->bindValue(':nom',$nom);
		$query->bindValue(':prenom',$prenom);
		$query->bindValue(':email',$email);
		$query->bindValue(':adresse',$adresse);
		$query->bindValue(':dateNaiss',$dateNaiss);
		
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