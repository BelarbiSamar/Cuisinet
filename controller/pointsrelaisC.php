<?php
include 'C:\wamp64\www\Cuisinet\config.php';
require_once 'C:\wamp64\www\Cuisinet\model\pointsrelais.php';
class pointsrelaisC{

function ajouterpointsrelais($pointsrelais){
    $sql="insert into pointrelais (idRelais,adresseRel,etatRel,horaire,conges)
    values (:idRelais,:adresseRel,:etatRel,:horaire,:conges)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $idRelais=$pointsrelais->getIdRelais();
        $adresseRel=$pointsrelais->getAdresseRel();
        $etatRel=$pointsrelais->getEtatRel();
        $horaire=$pointsrelais->getHoraire();
        $conges=$pointsrelais->getConges();
        



    $query->bindValue(':idRelais',$idRelais);
    $query->bindValue(':adresseRel',$adresseRel);
    $query->bindValue(':etatRel',$etatRel);
    $query->bindValue(':horaire',$horaire);
    $query->bindValue(':conges',$conges);
   
    
    $query->execute();
        
    }
    catch(Exception $e){
        echo 'Erreur: ajouter points relais' .$e->getMessage();

    }
}

function modifierpointsrelais($pointsrelais){
    $pointsrelais=new pointsrelais;         
$sql='UPDATE pointrelais SET
adresseRel = :adresseRel,   etatRel = :etatRel,    horaire = :horaire,     conges = :conges

WHERE idRelais = :idRelais';
$db = config::getConnexion();
try{
$query = $db->prepare($sql);
$idRelais=$_POST['idRelais'];
$adresseRel=$_POST['adresseRel'];
$etatRel=$_POST['etatRel'];
$horaire=$_POST['horaire'];
$conges=$_POST['conges'];


$query->bindValue(':idRelais',$idRelais);
$query->bindValue(':adresseRel',$adresseRel);
$query->bindValue(':etatRel',$etatRel);
$query->bindValue(':horaire',$horaire);
$query->bindValue(':conges',$conges);


$query->execute();
} catch (PDOException $e) {
$e->getMessage();
}
}



function recupererpointsrelais($pointsrelais){
$sql="SELECT * from pointrelais where idRelais='$idRelais'";
$db = config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();

$Carte=$query->fetch();
return $Carte;
}
catch (Exception $e){
die('Erreur: '.$e->getMessage());
}
}





function afficherpointsrelais(){

    $sql="SELECT * FROM pointrelais";
    $db = config::getConnexion();
    try{
    $liste = $db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }



    function supprimerpointsrelais($idRelais){
        $sql="DELETE FROM pointrelais WHERE idRelais= :idRelais";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idRelais',$idRelais);
        try{
        $req->execute();
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }
        function chercherpointsrelais($chercher,$champs) {
            $db=config::getConnexion();
            $sql="select * from pointrelais where $champs like '$chercher'  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherpointsrelais: '.$e->getMessage());
    
            }
        }
        function Trierpointsrelais($champs,$order) {
            $db=config::getConnexion();
            $sql="select * from pointrelais order By $champs $order  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherpointsrelais: '.$e->getMessage());
    
            }
        }





}
?>