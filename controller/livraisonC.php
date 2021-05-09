<?php
include 'C:\wamp64\www\Cuisinet\config.php';
require_once 'C:\wamp64\www\Cuisinet\model\livraison.php';
class livraisonC{

function ajouterlivraison($livraison){
    $sql="insert into livraison (idLivraison,idCommande,idLivreur,adresseLivraison,dureeLivraison,idClient)
    values (:idLivraison,:idCommande,:idLivreur,:adresseLivraison,:dureeLivraison,:idClient)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $idLivraison=$livraison->getIdLivraison();
        $idCommande=$livraison->getIdCommande();
        $idLivreur=$livraison->getIdLivreur();
        $adresseLivraison=$livraison->getadresseLivraison();
        $dureeLivraison=$livraison->getDureeLivraison();
        $idClient=$livraison->getIdClient();



    $query->bindValue(':idLivraison',$idLivraison);
    $query->bindValue(':idCommande',$idCommande);
    $query->bindValue(':idLivreur',$idLivreur);
    $query->bindValue(':adresseLivraison',$adresseLivraison);
    $query->bindValue(':dureeLivraison',$dureeLivraison);
    $query->bindValue(':idClient',$idClient);
    
    $query->execute();
        
    }
    catch(Exception $e){
        echo 'Erreur: ajouter livraison' .$e->getMessage();

    }
}

function modifierlivraison($livraison){
    $livraison=new livraison;         
$sql='UPDATE livraison SET
idCommande = :idCommande,   idLivreur = :idLivreur,    adresseLivraison = :adresseLivraison,    dureeLivraison = :dureeLivraison,
idClient = :idClient
WHERE idLivraison = :idLivraison';
$db = config::getConnexion();
try{
$query = $db->prepare($sql);
$idLivraison=$_POST['idLivraison'];
$idCommande=$_POST['idCommande'];
$idLivreur=$_POST['idLivreur'];
$adresseLivraison=$_POST['adresseLivraison'];
$dureeLivraison=$_POST['dureeLivraison'];
$idClient=$_POST['idClient'];

$query->bindValue(':idLivraison',$idLivraison);
$query->bindValue(':idCommande',$idCommande);
$query->bindValue(':idLivreur',$idLivreur);
$query->bindValue(':adresseLivraison',$adresseLivraison);
$query->bindValue(':dureeLivraison',$dureeLivraison);
$query->bindValue(':idClient',$idClient);

$query->execute();
} catch (PDOException $e) {
$e->getMessage();
}
}



function recupererlivraison($livraison){
$sql="SELECT * from livraison where idLivraison='$idLivraison'";
$db = config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();

$livraison=$query->fetch();
return $livraison;
}
catch (Exception $e){
die('Erreur: '.$e->getMessage());
}
}





function afficherlivraison(){

    $sql="SELECT * FROM livraison";
    $db = config::getConnexion();
    try{
    $liste = $db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }



    function supprimerlivraison($idLivraison){
        $sql="DELETE FROM livraison WHERE idLivraison= :idLivraison";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idLivraison',$idLivraison);
        try{
        $req->execute();
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }
        function chercherlivraison($chercher,$champs) {
            $db=config::getConnexion();
            $sql="select * from livraison where $champs like '%$chercher%'  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherlivraison: '.$e->getMessage());
    
            }
        }






        function Trierlivraison($champs,$order) {
            $db=config::getConnexion();
            $sql="select * from livraison order By $champs $order  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherlivraison: '.$e->getMessage());
    
            }
        }




}
?>