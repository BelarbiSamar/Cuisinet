<?php
include "C:\wamp64\www\Cuisinet\config.php";
require_once 'C:\wamp64\www\Cuisinet\model\livreur.php';

class livreurC{

    function ajouterlivreur($livreur){
       
        $sql="insert into livreur (idLivreur,telLivreur,nom,prenom,dispo)
        values (:idLivreur,:telLivreur,:nom,:prenom,:dispo)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $idLivreur=$livreur->getIdLivreur();
		    $telLivreur=$livreur->geTtelLivreur();
		    $nom=$livreur->getNom();
            $prenom=$livreur->getPrenom();
            $dispo=$livreur->getDispo();
            


		$query->bindValue(':idLivreur',$idLivreur);
		$query->bindValue(':telLivreur',$telLivreur);
		$query->bindValue(':nom',$nom);
		$query->bindValue(':prenom',$prenom);
		$query->bindValue(':dispo',$dispo);
		
        $query->execute();
            
        }
        catch(Exception $e){
            echo 'Erreur: ajouter livreur' .$e->getMessage();

        }



    }
 





    function modifierlivreur($idLivreur){
                  $livreur=new livreur;         
            $sql='UPDATE livreur SET
            telLivreur = :telLivreur,  nom = :nom,   prenom = :prenom,    dispo = :dispo
            WHERE idLivreur = :idLivreur';
		$db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $id=$_POST['idLivreur'];
		    $cin=$_POST['telLivreur'];
		    $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['dispo'];
            
		$query->bindValue(':idLivreur',$idLivreur);
		$query->bindValue(':telLivreur',$telLivreur);
		$query->bindValue(':nom',$nom);
		$query->bindValue(':prenom',$prenom);
		$query->bindValue(':dispo',$dispo);
		
		
        $query->execute();
        } catch (PDOException $e) {
        $e->getMessage();
        }
        }



        function recupererlivreur($idLivreur){
            $sql="SELECT * from livreur where idLivreur='$idLivreur'";
            $db = config::getConnexion();
            try{
            $query=$db->prepare($sql);
            $query->execute();
            
            $livreur=$query->fetch();
            return $livreur;
            }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
            }
            
function afficherlivreur(){

    $sql="SELECT * FROM livreur";
    $db = config::getConnexion();
    try{
    $liste = $db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }





    function supprimerlivreur($id){
        $sql="DELETE FROM livreur WHERE idLivreur= :idLivreur";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idLivreur',$idLivreur);
        try{
        $req->execute();
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }

        function chercherlivreur($chercher,$champs) {
            $db=config::getConnexion();
            $sql="select * from livreur where $champs like '$chercher'  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherlivreur: '.$e->getMessage());
    
            }
        }






        function Trierlivreur($champs,$order) {
            $db=config::getConnexion();
            $sql="select * from livreur order By $champs $order  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherlivreur: '.$e->getMessage());
    
            }
        }





}
?>