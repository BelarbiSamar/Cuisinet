<?php
include "C:/xampp/htdocs/client/config.php";
require_once 'C:/xampp/htdocs/client/model/Recette.php';

class RecetteC
{
    function ajouterRecette($Recette)
    {
        			
        $sql = "insert into recette (idRecette , type , nomChef , description)
        values (:idRecette,:type,:nomChef,:description)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idRecette = $Recette->getIdRecette();
            $type = $Recette->getType();
            $nomChef = $Recette->getnomChef();
            $description = $Recette->getdescription();
            $query->bindValue(':idRecette', $idRecette);
            $query->bindValue(':type', $type);
            $query->bindValue(':nomChef', $nomChef);
            $query->bindValue(':description', $description);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter reparation' . $e->getMessage();
        }
    }
    function modifierRecette($idRecette)
    {
        $Recette=new Recette;         
            $sql='UPDATE recette SET
            type = :type,  nomChef = :nomChef,   description = :description
            WHERE idRecette = :idRecette';
		$db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $idRecette=$_POST['idRecette'];
		    $type=$_POST['type'];
		    $nomChef=$_POST['nomChef'];
            $description=$_POST['description'];
          
		$query->bindValue(':idRecette',$idRecette);
		$query->bindValue(':type',$type);
		$query->bindValue(':nomChef',$nomChef);
		$query->bindValue(':description',$description);
        $query->execute();
        } catch (PDOException $e) {
        $e->getMessage();
        }
        }





    function afficherRecette()
    {
        $sql = "select * from recette";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter recette' . $e->getMessage();
        }
    }

    function supprimerRecette($id)
    {

        $sql = "DELETE FROM recette where idRecette=:id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
